<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    use HasFactory;

    public $table = 'comments';
    public $primaryKey = 'id';


    public $fillable = ['author', 'content', 'jobs_id'];

    public $guarded = 'id';


    function job(){
        return $this->belongsTo(Jobs::class);
    }
}

