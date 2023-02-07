<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Slider $slider)
    {

        $sliders = $slider::all();

        return view('layouts.index',compact('sliders'));

    }
}
