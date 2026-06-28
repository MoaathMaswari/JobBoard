<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Jobs;
use App\Models\Tags;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('index', ['title' => 'Home']);
    }
    function jobs(){
        $jobs = Jobs::paginate();
        return view('jobs', ['title' => 'Jobs', 'jobs' => $jobs]);
    }

    function comment($id){
        $job = Jobs::find($id);
        return view('jobs.comment',['title' => 'Commenting', 'job' => $job]);
    }
    function addJob(){
        $tags = Tags::all();
        return view('jobs.add', ['title' => 'Add a Job', 'tags' => $tags ]);
    }
    function editJob($id){
        $job = Jobs::find($id);
        $tags = Tags::all();
        $jobTags = $job->tags;
        $tags_ids =[];
        foreach($jobTags as $tag){
            array_push($tags_ids, $tag->id);
        }
        $jobTags = $tags_ids;

        return view('jobs.edit', ['title' => 'Edit a Job', 'job' => $job, 'tags' => $tags, 'jobTags' => $jobTags]);
    }
    function deleteJob($id){
        $job = Jobs::find($id);
        return view('jobs.delete', ['title' => 'Delete a Job', 'job' => $job]);
    }

    function about(){
        return view('about', ['title' => 'About']);
    }
    function contact(){
        return view('contact', ['title' => 'Contact']);
    }


    function createTag(){
        // Tags::create([
        //     'title' => "AI",
        // ]);

        Jobs::factory()->count(100)->has(Comments::factory()->count(rand(1, 10)))->create();


    }
}
