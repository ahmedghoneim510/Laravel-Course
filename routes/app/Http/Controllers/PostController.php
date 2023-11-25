<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){
    return view('posts');
   }
   public function createPosts(){
    return view('post_create');
   }
   public function deletePosts(){
    return view('post_create');
   }
   public function updataPosts(){
    return view('post_create');
   }
}
