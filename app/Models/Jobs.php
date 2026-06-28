<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{

    use HasUuids;
    use HasFactory;


    public $table = 'jobs';
    public $primaryKey = 'id';
    public $fillable = ['title', 'publisher', 'description', 'published'];

    protected $guarded = ['id'];


    function comments(){
        return $this->hasMany(Comments::class);
    }
    function tags(){
        return $this->belongsToMany(Tags::class, 'job_tag', 'job_id', 'tag_id');
    }


}
    //
