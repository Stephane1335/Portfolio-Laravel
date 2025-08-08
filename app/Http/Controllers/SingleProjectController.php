<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class SingleProjectController extends Controller
{
    public function index($id){

        $project = Project::with('typeproject','images')->findOrFail($id);
        
        return view('single-project', compact('project'));

    }
}
