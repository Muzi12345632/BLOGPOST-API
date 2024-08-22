<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookmark_title',
    ];

    // no timestamps
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }


    //relationship for posts
    public function posts(){
        return $this->belongsToMany(Bookmarks::class, 'bookmark_posts')->withTimestamps();
    }


}
