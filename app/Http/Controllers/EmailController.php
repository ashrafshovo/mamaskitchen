<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AdminEmailConfirmed;
use Mail;

class EmailController extends Controller
{
    //
    public function index()
    {
        //
        $mailData = [
            "name" => "Ashraf Hossan Shovo"
        ];

        Mail::to('ashrafhossanshovo@gmail.com')->send(new AdminEmailConfirmed($mailData));

        dd("Done");
    }
}
