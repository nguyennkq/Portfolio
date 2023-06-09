<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller
{
    public function AdminTestimonial(){
        $testimonial = Testimonial::all();
        return view('admin.testimonial.testimonial_all', compact('testimonial'));
    }

    public function AddTestimonial(){
        return view('admin.testimonial.testimonial_add');
    }

    public function StoreTestimonial(Request $request){

        $avatar = $request->file('testimonial_avatar');
        $name_gen = hexdec(uniqid()).'.'.$avatar->getClientOriginalExtension();

        Image::make($avatar)->resize(430,327)->save('upload/testimonial/'.$name_gen);

        $save_url = 'upload/testimonial/'.$name_gen;

        Testimonial::insert([
            'testimonial_username'=>$request->testimonial_username,
            'testimonial_description'=>$request->testimonial_description,
            'testimonial_avatar'=>$save_url,
            'testimonial_job'=>$request->testimonial_job,
        ]);


        $notification= array(
            "message" => "Testimonial Inserted Successfully",
            "alert-type" => "success"
        );

        return redirect()->route('admin.testimonial')->with($notification);
    }

    public function EditTestimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.testimonial_edit', compact('testimonial'));
    }

    public function UpdateTestimonial(Request $request){
        $testimonial_id = $request->id;
        if($request->file('testimonial_avatar')){
            $avatar = $request->file('testimonial_avatar');
            $name_gen = hexdec(uniqid()).'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(430,327)->save('upload/testimonial/'.$name_gen);

            $save_url = 'upload/testimonial/'.$name_gen;
            Testimonial::findOrFail($testimonial_id)->update([
                'testimonial_username'=>$request->testimonial_username,
                'testimonial_description'=>$request->testimonial_description,
                'testimonial_avatar'=>$save_url,
                'testimonial_job'=>$request->testimonial_job,
            ]);


            $notification= array(
                "message" => "Testimonial Updated With Avatar Successfully",
                "alert-type" => "success"
            );

            return redirect()->route('admin.testimonial')->with($notification);

        }else {
            Testimonial::findOrFail($testimonial_id)->update([
                'testimonial_username'=>$request->testimonial_username,
                'testimonial_description'=>$request->testimonial_description,
                'testimonial_job'=>$request->testimonial_job,
            ]);

            $notification= array(
                "message" => "Testimonial Updated Without Avatar Successfully",
                "alert-type" => "success"
            );

            return redirect()->route('admin.testimonial')->with($notification);
        }
    }

    public function DeleteTestimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        $img= $testimonial->testimonial_avatar;

        unlink($img);

        Testimonial::findOrFail($id)->delete();

        $notification= array(
            "message" => "Testimonial Deleted Successfully",
            "alert-type" => "success"
        );
        return redirect()->back()->with($notification);
    }
}
