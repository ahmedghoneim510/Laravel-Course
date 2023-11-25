<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $user=User::find(1)->phone; // get user from user model and then get it's phone by realtion one to one
        // $phone=Phone::find(1)->user;// get phone from phone model and then get it's user by realtion one to one
        // return $user .'<br>'. $phone;

        // $user=User::find(1); // get user by id then get it's roles from model user
        // return  $user->roles;

        $role=Role::find(2); // get role by id
        return $role->users; // get user who has this role

    }
}
