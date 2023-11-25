<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use APP\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('users/{name}', function ($name) {
//     if($name=="ahmed"){

//         return "Ghoneim";
//     }
//     else{
//         return $name;
//     }
//     // return view('users');

// });

// Route::post('users', function (Request $request) {

//     return $request;
// });

// Route::get('users', function () {
//     $name="Ghoneim";

//     return view('users',compact('name'));
// });
Route::get('/posts', function () {
    return view('posts');
});

//--------------------------
// first method
// Route::get('posts',[PostController::class,'index']);
// Route::get('posts/create',[PostController::class,'createPosts']);
// Route::get('posts/update/{id}',[PostController::class,'updataPosts']);
// Route::get('posts/delete/{id}',[PostController::class,'deletePosts']);
// second method


//---------------------------------
// Route::controller(PostController::class)->group(function(){
//     Route::get('posts','index');
//     Route::get('posts/create','createPosts');
//     Route::get('posts/update/{id}','updatePosts');
//     Route::get('posts/delete/{id}','deletePosts');
// });

//------------------------------------------------

// Route::resource('Users',UsersController::class);


Route::resource('Users',UsersController::class);


