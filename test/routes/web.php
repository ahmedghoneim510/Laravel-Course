<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfile;



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

// or user only(['index']) // put here spacific function

// Route::resource('users', UsersController::class)->except(['index']); // if we use expect spacific method
// Route::resource('users', UsersController::class)->only(['index']);
Route::resource('users', UsersController::class);

Route::get('user_profile',UserProfile::class);
