<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        // $post=Post::find(2); get post of user
        // return $post->comments; // then get it's comments that related to this post
        $comment=Comment::find(2); // get comment
        return $comment->post; // retrun comment's owner
    //     foreach($comment->post as $post){

    //        echo $post->title;
    //    }
    //     foreach($post->comments as $comment){

    //        echo $comment->body.'<br /><br />';
    //    }
    }
}
