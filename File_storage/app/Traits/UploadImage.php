<?php

namespace App\Traits;

use http\Env\Request;

trait UploadImage
{
     public function uploadimage(\Illuminate\Http\Request $request, $folder_name){
         $img=$request->file('photo')->getClientOriginalName();
         //$path = $request->file('photo')->store('users','ghoneim');
         $path = $request->file('photo')->storeAs($folder_name,$img,'ghoneim');

         return $path;
     }
}
