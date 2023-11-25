<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($id){
        $user=User::findorFail($id);
        // $usere=User::findor
        return $user->name;
    }
    public function store(){

        User::create([
            "name"=> "mohamed",
            "email"=> "mohamed@gmail.com",
            "password"=>Hash::make('123456')
        ]);
        return response("Added User");
    }
}
