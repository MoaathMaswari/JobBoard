<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    function createJob(Request $request){
        $job = Jobs::create($request->all());
        $job->tags()->attach($request->tags);
        return redirect("/jobs");


    }
    function getAllJobs(){

    }
    function getJob(){

    }

    function editJob(Request $request, $id){
        $job = Jobs::findOrfail($id);
        $job->tags()->detach();
        $job->update($request->all());
        $job->tags()->attach($request->tags);

        return redirect("/jobs");

    }

    function deleteJob($id){
        Jobs::destroy($id);
        return redirect('/jobs');

    }

    function comments($id){
        $job = Jobs::findOrfail($id);
        return view('comments', ['title' => 'Comments', 'job' => $job]);
    }


}
