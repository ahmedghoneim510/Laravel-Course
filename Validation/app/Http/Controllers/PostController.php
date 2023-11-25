<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $posts=Post::get();
       //$posts=Post::all();
      // return $posts;
       return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        // ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        $posts=Post::onlyTrashed()->get();
         return view('posts.soft',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $post=Post::findorFail($id); // here only to find id only
        $post=Post::where('id','=',$id)->first(); // here we can use any conditions
        // $post=Post::find($id);
        // if($post){

            // return $post;
            // }
            // else{
                //     return response("There is no data to edit");
                // }

        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

         $post=Post::where('id','=',$id)->first();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();

        $affected = $post->update([
            'title' => $request->title,
            'body' => $request->body,

        ]);
         return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Post::findorfail($id)->delete();
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
    public function restore($id)
    {
        Post::withTrashed()->where('id', $id)->restore();
        return redirect()->back();
    }
    public function forcedelete( $id){
        Post::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
