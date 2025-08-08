<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\TypeProject;

class ProjectController extends Controller
{
    public function index(){

        $type_projects = TypeProject::all();
        $projects = Project::with('typeproject')->get();

        return view('projects',[
            'type_projects'=> $type_projects,
            'projects'=> $projects,
        ]);
    }
}
