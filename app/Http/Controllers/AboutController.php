<?php

namespace App\Http\Controllers;
use App\Models\Dynamicheader;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Dynamicheader $dynamicheader)
    {

        $dynamicheaders = $dynamicheader::all();
        
            return view('layouts.about',compact('dynamicheaders'));

    }
}
