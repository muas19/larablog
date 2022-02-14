<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;


use App\Http\Resources\BlogPostResource;
use App\Models\BlogPost;
use App\Http\Controllers\BlogPostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiresource('/blogs', [BlogPostController::class, 'ind']);
Route::get('/blogs', function () {
    return new BlogPostResource(BlogPost::all());
});

Route::get('/blog/{id}', function ($id) {
    return new BlogPostResource(BlogPost::findOrFail($id));
});

Route::get('/users', function () {
    return new UserResource(User::all());
});
