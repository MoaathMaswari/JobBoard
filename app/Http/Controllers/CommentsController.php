<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Jobs;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    function commentPage($id){
        $job = Jobs::find($id);
        return view('job.comment',['title' => 'Commenting', 'job' => $job]);
    }
    function Comment(Request $request){
        Comments::create($request->all());

    }

}
