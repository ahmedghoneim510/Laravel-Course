<?php

namespace App\Http\Controllers;

use App\Jobs\ActiveUserJob;
use App\Jobs\SendMailjob;
use App\Mail\SendMails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){
        ActiveUserJob::dispatch()->delay(now()->addSeconds(60));;
        return "Updated Successfully";
//        return $users;
    }
    public function sendmail(){
//        $data=['ahmedghoneim510@gmail.com','ahmedghoneim510@gmail.com','ahmedghoneim510@gmail.com'];
//        SendMailjob::dispatch($data);
        Mail::to('ahmedghoneim510@gmail.com')->send(new  \App\Mail\SendMails());
        return 'Data Send Successfully';
    }
}
