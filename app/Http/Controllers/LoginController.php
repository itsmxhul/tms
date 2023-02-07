<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dynamicheader;


class LoginController extends Controller
{
    public function index(Dynamicheader $dynamicheader)
    {        $dynamicheaders = $dynamicheader::all();

        return view('layouts.login',compact('dynamicheaders'));
    }

    public function login()
    {
        return view('layouts.contact');
    }
}
