<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PostDetailsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);


Route::group([
    "middleware" => ["auth:api"]
], function(){

        Route::get("index", [PostsController::class, "index"]);
        //Route::get("advert/{post}", [PostsController::class,"index"]);
        Route::get("review/index", [ReviewController::class, "index"]);
        Route::post("post/{id}/store", [PostsController::class, "store"]);

        Route::post("location/store", [LocationController::class, "store"]);

});


//TODO set secret for jwt.
