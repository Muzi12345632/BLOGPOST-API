<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsDetailsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index(Posts $posts){
        return response()->json([
            "status" => true,
            "message" => "Bid registered successfully",
            "data"=> $posts->load(['location','category'])
        ], 200);
    }
}
