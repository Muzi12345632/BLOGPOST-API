<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Posts extends Model
{
    use HasFactory;
    use SoftDeletes;

    const BRAND_NEW =1;
    const SECOND_HAND=2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'amount',
        'condition',
        'location_id',
        'category_id',
        'user_id',
        "expires_at",
        "updated_at",
        "deleted_at",
    ];


    public function scopeNotExpired($query)
    {
        return $query->where(function ($query) {
            $query->where("expires_at", ">", now())->orWhereNull("expires_at");
        });
    }



    public function getIsExpiredAttribute()
    {
        if (is_null($this->expires_at)) {
            return false;
        }

        return $this->expires_at < now();
    }



    public function scopePostedByMe($query)
    {
        if (
            auth()
            ->user()
            ->isAdmin()
        ) {
            return $query;
        }
        return $query->where("user_id", auth()->user()->id);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function location(){
        return $this->belongsTo(Location::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function bids(){
        return $this->hasMany(Bid::class);
    }

    //relationship for bookmarks
    public function bookmarks(){
        return $this->belongsToMany(Bookmarks::class, 'bookmark_posts')->withTimestamps();
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

}
