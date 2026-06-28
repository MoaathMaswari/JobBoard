<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    function addComment(Request $request){
        Comments::create($request->all());
        return redirect('/');

    }
}
