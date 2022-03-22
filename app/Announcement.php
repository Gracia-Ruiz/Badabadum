<?php

namespace App;
use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images()
    {
        return $this->HasMany(AnnouncementImage::class);
    }
    static public function ToBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count();
    }
   

}
