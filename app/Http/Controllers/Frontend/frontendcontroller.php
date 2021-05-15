<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Mission;
use App\Model\News;
use App\Model\Contacts;


class frontendcontroller extends Controller
{
    public function index()
    {
        $data['alldata']=Contacts::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['missions'] = Mission::all();
        $data['news'] = News::all();
    	return view('frontend.layouts.home',$data);
    }
    public function about()
    {   
        $data['alldata']=Contacts::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['news'] = News::all();
        $data['missions'] = Mission::all();
    	return view('frontend.layouts.about',$data);
    }
    public function contact()
    {   $data['alldata']=Contacts::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['news'] = News::all();
        $data['missions'] = Mission::all();
    	return view('frontend.layouts.contact',$data);
    }
    public function portfolio()

    {   $data['alldata']=Contacts::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['missions'] = Mission::all();
        $data['news'] = News::all();
        return view('frontend.layouts.portfolio',$data);
    }

       public function footer()

    {   $data['alldata']=Contacts::all();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['missions'] = Mission::all();
        $data['news'] = News::all();
        return view('frontend.layouts.footer',$data);
    }




}
