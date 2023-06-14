<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function AdminContact(){
        $contact = Contact::all();
        return view('admin.contact.contact_all', compact('contact'));
    }

    public function StoreContact(Request $request){
        Contact::insert([
            'contact_name'=>$request->contact_name,
            'contact_email'=>$request->contact_email,
            'contact_phone'=>$request->contact_phone,
            'contact_message'=>$request->contact_message,
        ]);


        $notification = array(
            'alert-type' => 'success',
            'message' => 'Contact sent successfully.'
        );

        return redirect()->route('home')->with($notification);
    }

    public function DeleteContact($id){
        Contact::findOrFail($id)->delete();

        $notification = array(
            'alert-type'=> 'success',
            'message'=> 'Contact Deleted Successfully'
        );

        return redirect()->back()->with($notification);
    }
}
