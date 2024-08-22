<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Posts;
use App\Http\Requests\StoreBidRequest;
use App\Http\Requests\UpdateBidRequest;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreBidRequest $request, Posts $posts)
    {
        //

        $validated = $request->validated();

        //TODO

        return response()->json([
            "status" => true,
            "message" => "Bid registered successfully",
            "data"=> $newbid
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBidRequest $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bid $bid)
    {
        //
    }
}
