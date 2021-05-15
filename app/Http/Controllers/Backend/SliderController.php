<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Slider;
class SliderController extends Controller
{
	public function view()
    {
    	//to use array function
    	//$data['countLogo'] = Logo::count();
    	$data['alldata']=Slider::all();
    	return view('backend.slider.view-slider',$data);
    	//to use compact function
    	/*$alldata = User::all();
    	dd($alldata->toArray());
    	return view('backend.user.viewuser',compact(alldata));*/ 
    }
    public function viewer()
        {
            //to use array function
            //$data['countLogo'] = Logo::count();
            $data['alldata']=Slider::where('created_by',Auth::user()->id)->get();
            
            //dd($data);
            return view('backend.slider.viewer-slider',$data);
            //to use compact function
            /*$alldata = User::all();
            dd($alldata->toArray());
            return view('backend.user.viewuser',compact(alldata));*/ 
        }


    public function add()
    {
    	return view('backend.slider.add-slider');
    }

    public function store(Request $request)
    {
    	

    	$data = new Slider();
    	$data->short_title =$request->short_title;
    	$data->long_title =$request->long_title;
    	$data->created_by = Auth::user()->id;
    		if ($request->file('image')){
    		
    		$file=$request->file('image');
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/slider_images'),$filename);
    		$data['image']=$filename;
        	}
    	$data->save();
    	return redirect()->route('sliders.view')->with('success','slider inserted  successfully');

    	
    }

    public function edit($id)
    {
    	$editData=Slider::find($id);
    	//dd($editData);
    	return view('backend.slider.edit-slider',compact('editData'));
    }


    public function update(Request $request,$id)
    {
    	$data = Slider::find($id);
    	$data->short_title =$request->short_title;
    	$data->long_title =$request->long_title;
    	$data->created_by = Auth::user()->id;
    	if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		@unlink(public_path('upload/user_images'.$data->image))	;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/slider_images'),$filename);
    		$data['image']=$filename;
    	}
    	$data->save();
    	return redirect()->route('sliders.view')->with('success','data updated successfully');
    	
    }

    public function delete($id)
    {
    	$slider = Slider::find($id);
    	if (file_exists('public/upload/user_images'.$slider->image) AND ! empty($slider->image)) {
    		

    		unlink('public/upload/user_images'.$slider->image);
    	}
    	$slider->delete();
    	return redirect()->route('sliders.view')->with('success','slider deleted successfully');
    }
}
