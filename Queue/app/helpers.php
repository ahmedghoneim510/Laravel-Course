<?php
use Illuminate\Support\Facades\Auth;
use App\Models\User;

if (! function_exists('UserName')) {
    function UserName()
    {
        return auth::user()->name;
    }
}
