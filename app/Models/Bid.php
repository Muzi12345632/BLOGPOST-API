<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $appends = ['humanCreatedAt'];

    protected $fillable = [
        'title',
        'email',
        'phone',
        'location',
        'bid_amount',
        'status',
    ];

    public function post(){
        return $this->belongsTo(Posts::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function scopeOnMyJobs($query) {
        if(auth()->user()->isAdmin()) {
            return $query;
        }
        return $query->whereHas('posts', function($query) {
            $query->where('posts.user_id', auth()->id());
        });

    }

}
