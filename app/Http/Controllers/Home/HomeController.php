<?php

namespace App\Http\Controllers\Home;

use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeMain(){
        $about_home = About::find(1);
        $skill_all = Skill::all();
        $resume_all= Resume::all();
        return view('frontend.index', compact('about_home','skill_all','resume_all'));
    }
}
