<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;

class ContactsController extends Controller
{
    //

    public function sendMessage(Request $request)
    {
    	$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'message' => 'required'
		]);

    	$contact = new Contact();
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->subject = $request->subject;
    	$contact->message = $request->message;
    	$contact->save();

    	Toastr::success('Your message successfully send.', 'Success', ["positionClass" => "toast-top-right"]);

    	return redirect()->back();
    }
}
