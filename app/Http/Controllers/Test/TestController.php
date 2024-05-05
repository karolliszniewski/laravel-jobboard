<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job\Job;

class TestController extends Controller
{
    public function testMethod($id){
        $job = Job::find($id);

        return view('test.templatename',compact('job'));
    }
}
