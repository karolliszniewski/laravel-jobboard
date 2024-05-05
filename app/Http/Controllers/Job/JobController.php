<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job\Job;

class JobController extends Controller
{
    public function single($id){
        $job = Job::find($id);

        // getting related jobs

        $relatedJobs = Job::where('category', $job->category)
        ->where('id', '!=' , $id)->take(5)->get();

        $relatedJobsCount = Job::where('category', $job->category)->where('id', '!=' , $id)->count();


        return view('jobs.single',compact('job', 'relatedJobs', 'relatedJobsCount'));
    }
    //
}
