<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function AdminService(){
        $service= Service::all();
        return view('admin.service.service_all', compact('service'));
    }

    public function AddService(){
        return view('admin.service.service_add');
    }

    public function StoreService(Request $request){
        $request->validate([
            'service_title'=>'required',
            'service_icon'=>'required',
            'service_description'=>'required',
        ]);
        Service::insert([
            "service_title" => $request->service_title,
            "service_icon" => $request->service_icon,
            "service_description" => $request->service_description
        ]);

        $notification= array(
            "message"=> "Inserted Service Successfully",
            "alert-type"=>"success"
        );

        return redirect()->route('admin.service')->with($notification);
    }

    public function EditService($id){
        $service = Service::findOrFail($id);
        return view('admin.service.service_edit', compact('service'));
    }

    public function UpdateService(Request $request){
        $service_id= $request->id;
        Service::findOrFail($service_id)->update([
            "service_title" => $request->service_title,
            "service_icon" => $request->service_icon,
            "service_description" => $request->service_description
        ]);

        $notification= array(
            "message"=> "Updated Service Successfully",
            "alert-type"=>"success"
        );

        return redirect()->route('admin.service')->with($notification);
    }

    public function DeleteService($id){
        Service::findOrFail($id)->delete();

        $notification= array(
            "message"=> "Deleted Service Successfully",
            "alert-type"=>"success"
        );

        return redirect()->back()->with($notification);
    }
}
