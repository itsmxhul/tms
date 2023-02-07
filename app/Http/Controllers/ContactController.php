<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Dynamicheader;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Dynamicheader $dynamicheader)
    {


        $dynamicheaders = $dynamicheader::all();
        return view('layouts.contact',compact('dynamicheaders'));

    }



    public function contact(Request $req)
    {
        $inquiry = new Contact();
        $inquiry->name =$req->name;
        $inquiry->mobile_number =$req->mobile_number;
        $inquiry->email =$req->email;
        $inquiry->message =$req->message;

        $inquiry->save();

        return redirect('home');
    }
}
