<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;
use App\Category;


class PublicController extends Controller
{
    public function index() {
        $announcements = Announcement::where('is_accepted', true)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();
        return view('newhome', compact('announcements'));
    }
    public function announcementsByCategory($name, $category_id) {
        $category = Category::find($category_id);
        $announcements = $category->announcements()
        ->where('is_accepted', true)
        ->orderBy('created_at', 'desc')
        ->paginate(4);
        return view('announcementsByCategory', compact('category', 'announcements'));
    }
    public function announcements()
    {   
        $announcements = Announcement::where('is_accepted', true)
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(6);
        
        return view('allannouncements',compact('announcements'));
    }

    public function show($id) {
        
        $announcement = Announcement::findOrFail($id);
       
        return view('single', compact('announcement'));

   }


    public function locale($locale)
{
          session()->put('locale', $locale);
          return redirect()->back();
}
}



