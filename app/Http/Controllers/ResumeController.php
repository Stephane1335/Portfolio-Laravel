<?php

namespace App\Http\Controllers;

use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){

        $educations = Educations::all();
        $experiences = Experiences::all();
        $projects = Project::all();
        $skills = Skill::all();

        return view('resume',[
            'educations'=> $educations,
            'experiences'=> $experiences,
            'projects' => $projects,
            'skills'=> $skills
        ]);
    }
}
