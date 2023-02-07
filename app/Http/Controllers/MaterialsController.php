<?php

namespace App\Http\Controllers;

use App\Models\Dynamicheader;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function index(Dynamicheader $dynamicheader)
    {

        $dynamicheaders = $dynamicheader::all();

        return view('layouts.materials',compact('dynamicheaders'));
        // return view('layouts.materials');

    }
}
