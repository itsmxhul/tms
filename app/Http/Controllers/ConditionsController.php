<?php

namespace App\Http\Controllers;

use App\Models\Dynamicheader;
use Illuminate\Http\Request;

class ConditionsController extends Controller
{
    public function index(Dynamicheader $dynamicheader)
    {

        $dynamicheaders = $dynamicheader::all();

            return view('layouts.conditions',compact('dynamicheaders'));
        // return view('layouts.conditions');

    }
}
