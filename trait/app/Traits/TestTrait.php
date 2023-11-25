<?php

namespace App\Traits;

trait TestTrait
{

    public function GetData($model){
        return  $model::all();
    }
}
