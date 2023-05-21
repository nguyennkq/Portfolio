<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SkillController extends Controller
{
    public function AdminSkill(){
        $skill_all = Skill::all();
        return view('admin.skill.skill_all', compact('skill_all'));
    }

    public function AddSkill(){
        return view('admin.skill.skill_add');
    }

    public function StoreSkill(Request $request){
        Skill::insert([
            'skill_name'=>$request->skill_name,
            'skill_number'=>$request->skill_number,
        ]);

        $notification = array(
            'message'=> "Skill Inserted Successfully",
            "alert-type"=>"success"
        );

        return redirect()->route('admin.skill')->with($notification);
    }

    public function EditSkill($id){
        $skill_edit= Skill::findOrFail($id);
        return view('admin.skill.skill_edit', compact('skill_edit'));
    }

    public function UpdateSkill(Request $request){
        $skill_id = $request->id;
        Skill::findOrFail($skill_id)->update([
            'skill_name'=> $request->skill_name,
            'skill_number'=> $request->skill_number,
        ]);

        $notification = array(
            'message'=> "Skill Updated Successfully",
            "alert-type"=>"success"
        );

        return redirect()->route('admin.skill')->with($notification);
    }

    public function DeleteSkill($id){
        Skill::findOrFail($id)->delete();

        $notification = array(
            'message'=> "Skill Deleted Successfully",
            "alert-type"=>"success"
        );

        return redirect()->back()->with($notification);
    }

}
