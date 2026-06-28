<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Jobs::paginate(20);

        return response($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = Jobs::create($request->all());

        return response($job,201);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Jobs::findOrfail($id);

        return response($job);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Jobs::findOrfail($id);
        $job->update($request->all());

        return response($job);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jobs::destroy($id);

        return response("Job Deleted successfully");

    }
}
