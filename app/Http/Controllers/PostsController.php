<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use App\Models\Bid;
use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Posts $posts)
    {
        //$posts->load(['location','category'])->get()
        //return Posts::with('location','category')->get();
        //return $posts->load('user','location','category');
        //return Posts::NotExpired()->with('location','category')->get();
        return response()->json([
            "status" => true,
            "message" => "Posts loaded successfully",
            "data"=> Posts::NotExpired()->with('location','category', 'reviews')->get()
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostsRequest $request, Posts $posts)
    {
        //
        $validated = $request->validated([
            "title" => "required",
            "email"=> "required|email|unique:users",
            "phone_number" => "required",
            "location" => "required",
            "bid_amount" => "required", 
            "status" => "required"
        ]);

        /*$validated["title"] = $request->title;
        $validated["email"] = $request->email;
        $validated["phone_number"] = $request->phone_number;
        $validated["location"] = $request->location;
        $validated["bid_amount"] = $request->bid_amount;
        $validated["status"] = $request->status;*/

        $bid = Bid::create([
            "title"=> $request->title,
            "email"=> $request->email,
            "phone_number"=> $request->phone_number,
            "location"=> $request->location,
            "bid_amount"=> $request->bid_amount,
            "status" => $request->status
        ]);

        $bid->user_id = auth()->user();
        $bid->post_id = $posts->id;
        $posts->bids()->save($bid);

        return response()->json([
            "status" => true,
            "message" => "Bid registered successfully",
            "data"=> $bid
        ], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostsRequest $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
