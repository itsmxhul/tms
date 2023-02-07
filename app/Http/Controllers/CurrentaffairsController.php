<?php

namespace App\Http\Controllers;

use App\Models\Dynamicheader;
use Illuminate\Http\Request;

class CurrentaffairsController extends Controller
{
    public function index(Dynamicheader $dynamicheader)
    {

        $dynamicheaders = $dynamicheader::all();

        return view('layouts.currentaffairs',compact('dynamicheaders'));
        // return view('layouts.currentaffairs');

    }
}
