<?php

namespace App\Http\Controllers;

use App\Category;
use App\Announcement;
use App\Jobs\ResizeImage;
use App\AnnouncementImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AnnouncementRequest;




class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $categories = Category::all();
        View::share('categories', $categories);
    }

    public function index()
    {
        return view('newhome');
    }

    public function newAnnouncement(Request $request)
    {
        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())), 16,36)
        );
        return view('announcement.new', compact('uniqueSecret'));
    }
   
    
    public function createAnnouncement(AnnouncementRequest $request)
    {
    $a = new Announcement();

    $a->title = $request->input('title');
    $a->body = $request->input('body');
    $a->category_id = $request->input('category');
    $a->price = $request->input('price');
    $a->user_id = Auth::id();
    $a->paginate(5);
    $a->save();

    $uniqueSecret = $request->input('uniqueSecret');
    
    $images = session()->get("images.{$uniqueSecret}", []);
    $removedImages = session()->get("removedImages.{$uniqueSecret}", []);

    $images = array_diff($images, $removedImages);
    
    
    foreach ($images as $image){
        $i = new AnnouncementImage();

        $fileName = basename($image);
        $newfileName = "public/announcements/{$a->id}/{$fileName}";
        Storage::move($image, $newfileName);

        dispatch(new ResizeImage(
           $newfileName,
           330,
           250

        ));

        $i ->file = $newfileName;
        $i ->announcement_id = $a->id;
        $i ->save();
    }

    File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));

    return redirect('/')->with('announcement.create.success', 'ok');
}

    public function uploadImages(Request $request){
    
        $uniqueSecret = $request->input('uniqueSecret');

        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");
  
        dispatch(new ResizeImage(
            $fileName,
            120,
            120
        ));
        session()->push("images.{$uniqueSecret}", $fileName);

        return response()->json(
                [
                'id' => $fileName 
                ]
        );
    }

    public function removeImages(Request $request)
            {       
                $uniqueSecret = $request->input('uniqueSecret');
                $fileName = $request->input('id');
                session()->push("removedImages.{$uniqueSecret}", $fileName);
                Storage::delete($fileName);
                return response()->json('ok');
            }

        
            public function getImages(Request $request) 

            {
                $uniqueSecret = $request->input('uniqueSecret');

                $images = session()->get("images.{$uniqueSecret}", []); 
                $removedImages = session()->get("removedImages.{$uniqueSecret}", []);
                $images = array_diff($images, $removedImages);
                $data = []; 
        
                foreach($images as $image) {
                    $data[] = [
                        'id'=> $image,
                        'src'=> AnnouncementImage::getUrlByFilePath($image, 120, 120)
                    ];
                }
                return response()->json($data);
            }
           
            

    }
