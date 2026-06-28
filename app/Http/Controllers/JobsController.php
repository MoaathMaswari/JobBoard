<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Tags;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobs::paginate();
        return view('job.jobs', ['title' => 'Jobs', 'jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tags::all();
        return view('job.create', ['title' => 'Add a Job', 'tags' => $tags ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = Jobs::create($request->all());
        $job->tags()->attach($request->tags);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Jobs::findOrFail($id);
        return view('job.show', ['title' => 'View a Job', 'job' => $job ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Jobs::find($id);
        $tags = Tags::all();
        $jobTags = $job->tags;
        $tags_ids =[];
        foreach($jobTags as $tag){
            array_push($tags_ids, $tag->id);
        }
        $jobTags = $tags_ids;

        return view('job.edit', ['title' => 'Edit a Job', 'job' => $job, 'tags' => $tags, 'jobTags' => $jobTags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Jobs::findOrfail($id);
        $job->tags()->detach();
        $job->update($request->all());
        $job->tags()->attach($request->tags);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jobs::destroy($id);

    }

    function comments($id){
        $job = Jobs::findOrfail($id);
        return view('job.comments', ['title' => 'Comments', 'job' => $job]);
    }
}
