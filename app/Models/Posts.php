<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $fillable = ['title', 'author', 'body', 'published'];

    public $guarded = ['id'];
}
