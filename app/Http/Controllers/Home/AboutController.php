<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    public function AdminAbout(){
        $about = About::find(1);
        return view('admin.about.about_all', compact('about'));
    }

    public function UpdateAbout(Request $request){
        $about_id = $request->id;
        if($request->file('about_image')){
            $image= $request->file('about_image');
            $name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(500,400)->save('upload/about/'.$name);

            $save_url= 'upload/about/'.$name;
            About::findOrFail($about_id)->update([
                'title'=>$request->title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description,
                'about_image'=>$save_url,
                'about_info'=>$request->about_info,
            ]);

            return redirect()->back();
        }else {
            About::findOrFail($about_id)->update([
                'title'=>$request->title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description,
                'about_info'=>$request->about_info,
            ]);

            return redirect()->back();
        }

    }
}
