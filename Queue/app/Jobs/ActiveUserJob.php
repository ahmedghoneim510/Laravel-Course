<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ActiveUserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $users_id=User::where('status','0')->pluck('id');
        foreach ($users_id as $user_id){
            User::where('id',$user_id)->update([
                'status'=>1
            ]);
        }
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
    }
}
