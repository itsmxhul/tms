<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Dynamicheader;
use App\Models\Slider;
use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{


    // public function index(Dynamicheader $dynamicheader)
    // {
    //     $dynamicheader = $dynamicheader::all();
    //     dd($dynamicheader);
    // }
    public function index(Dynamicheader $dynamicheader , Slider $slider)
    {
        // $dynamicheaders = $dynamicheader::all();
        // SELECT * FROM dynamicheaders LEFT JOIN `subheaders` ON dynamicheaders.id=subheaders.dynamicheader_id;
        DB::connection()->enableQueryLog();

        $dynamicheaders = DB::table('dynamicheaders')
        ->leftjoin('subheaders', 'dynamicheaders.id', '=', 'subheaders.dynamicheader_id')
        ->select('*')
        ->distinct('submenu')
        ->get();
        $dynamicheaderssubmenu = DB::table('dynamicheaders')
        ->rightjoin('subheaders', 'dynamicheaders.id', '=', 'subheaders.dynamicheader_id')
        ->select('*')
        ->distinct('submenu')
        ->get()->toarray();

        // dd($dynamicheaderssubmenu);
        $queries = DB::getQueryLog();
        $sliders = $slider::all();

        // dd($queries);
        // dd($dynamicheaders);
            return view('layouts.index',compact('dynamicheaders','sliders','dynamicheaderssubmenu'));




            // return view('layouts.index',compact('sliders'));

        // return view('layouts.index');
    }






    public function inquiry(Request $req)
    {
        $inquiry = new Inquiry;
        $inquiry->name =$req->name;
        $inquiry->mobile_number =$req->mobile_number;
        $inquiry->mode_of_education =$req->mode_of_education;
        $inquiry->course =$req->course;
        $inquiry->message =$req->message;

        $inquiry->save();

            if($inquiry->course=="Jee")
            {
                return redirect('home');
            }
            else{
                return redirect('contact');
            }
    }

}
