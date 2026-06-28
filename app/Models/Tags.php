<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //


    protected $fillable = ['title'];
    protected $guarded = ['id'];

    function jobs(){
        return $this->belongsToMany(Jobs::class, 'job_tag', 'tag_id', 'job_id');
    }

}
