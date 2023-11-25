<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Traits\UploadImage;
use Illuminate\Http\Request;

class Upload extends Controller
{
    use UploadImage;
    public function index(){
        $imges=Image::all();
        return view('index',compact('imges'));
    }
    public function show(){
        return view('upload');
    }
    public function store(Request $request){
        $path= $this->uploadimage($request,'admin');
        Image::create(['path'=>$path]);
        return "Upload Successfully";
//       $img=$request->file('photo')->getClientOriginalName();
//       //$path = $request->file('photo')->store('users','ghoneim');
//        $path = $request->file('photo')->storeAs('users',$img,'ghoneim');
//
//       return $path;
    }
}
