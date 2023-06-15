<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function AdminResume(){
        $resume_all = Resume::all();
        return view('admin.resume.resume_all', compact('resume_all'));
    }

    public function AddResume(){
        return view('admin.resume.resume_add');
    }

    public function StoreResume(Request $request){

        $request->validate([
            'resume_title'=> 'required',
            'resume_subtitle'=> 'required',
            'start_time'=> 'required',
            'end_time'=> 'required',
            'resume_description'=> 'required',
        ]);

        Resume::insert([
            "resume_title"=>$request->resume_title,
            "resume_subtitle"=>$request->resume_subtitle,
            "start_time"=>$request->start_time,
            "end_time"=>$request->end_time,
            "resume_description"=>$request->resume_description,
        ]);

        $notification = array(
            'message' => "Resume Inserted Successfully",
            "alert-type" => "success"
        );

        return redirect()->route('admin.resume')->with($notification);
    }

    public function EditResume($id){
        $resume_edit = Resume::findOrFail($id);
        return view('admin.resume.resume_edit', compact('resume_edit'));
    }

    public function UpdateResume(Request $request){
        $resume_id= $request->id;
        Resume::findOrFail($resume_id)->update([
            "resume_title"=>$request->resume_title,
            "resume_subtitle"=>$request->resume_subtitle,
            "start_time"=>$request->start_time,
            "end_time"=>$request->end_time,
            "resume_description"=>$request->resume_description,
        ]);

        $notification = array(
            'message' => "Resume Updated Successfully",
            "alert-type" => "success"
        );

        return redirect()->route('admin.resume')->with($notification);
    }

    public function DeleteResume($id){
        Resume::findOrFail($id)->delete();

        $notification = array(
            'message' => "Resume Deleted Successfully",
            "alert-type" => "success"
        );

        return redirect()->back()->with($notification);
    }
}
