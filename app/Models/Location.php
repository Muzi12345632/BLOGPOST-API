<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'province',
        'city',
        'district'
    ];

    // no timestamps
    public $timestamps = false;


    public function posts(){
        return $this->hasMany(Posts::class);
    }

}
