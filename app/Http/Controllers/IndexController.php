<?php

namespace App\Http\Controllers;

use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $educations = Educations::all();
        $experiences = Experiences:: all();
        $services = Service::take(4)->get();

        return view('index',[
            'educations'=> $educations,
            'experiences'=> $experiences,
            'services'=> $services,
        ]);
    }
}
