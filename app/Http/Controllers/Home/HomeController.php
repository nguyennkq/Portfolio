<?php

namespace App\Http\Controllers\Home;

use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeMain(){
        $about_home = About::find(1);
        $skill_all = Skill::all();
        $resume_all= Resume::all();
        $portfolio = Portfolio::all();
        $portfolio_category = PortfolioCategory::all();
        return view('frontend.main', compact('about_home','skill_all','resume_all','portfolio','portfolio_category'));
    }
}
