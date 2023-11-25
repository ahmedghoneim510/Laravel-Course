<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    // protected $filable = ['title', 'body'];
    protected $fillable=['title','body'];
    use SoftDeletes;

    use HasFactory;
}
