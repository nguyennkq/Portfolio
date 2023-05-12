<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AdminAbout(){
        $about = About::find(1);
        return view('admin.about.about_all', compact('about'));
    }
}
