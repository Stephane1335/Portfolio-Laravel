<?php

namespace App\Http\Controllers;

use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Service;
use App\Models\TypeProject;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $educations = Educations::all();
        $experiences = Experiences:: all();
        $services = Service::take(4)->get();
        $type_projects = TypeProject::all();
        $projects = Project::with('typeproject')->take(3)->get();

        return view('index',[
            'educations'=> $educations,
            'experiences'=> $experiences,
            'services'=> $services,
            'projects'=> $projects,
            'type_projects'=> $type_projects
        ]);
    }
}
