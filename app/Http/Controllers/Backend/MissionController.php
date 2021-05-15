<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Mission;

class MissionController extends Controller
{
   public function view()
    {
    	//to use array function
    	//$data['countLogo'] = Logo::count();
    	$data['alldata']=Mission::all();
    	return view('backend.mission.view-mission',$data);
    	//to use compact function
    	/*$alldata = User::all();
    	dd($alldata->toArray());
    	return view('backend.user.viewuser',compact(alldata));*/
    }
    


    public function add()
    {
    	return view('backend.mission.add-mission');
    }

    public function store(Request $request)
    {
    	

    	$data = new Mission();
    	$data->title =$request->short_title;
    	$data->created_by = Auth::user()->id;
    		if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/mission_images'),$filename);
    		$data['image']=$filename;
    	}
    	$data->save();
    	return redirect()->route('missions.view')->with('success','mission inserted  successfully');

    	
    }

    public function edit($id)
    {
    	$editData=Mission::find($id);
    	//dd($editData);
    	return view('backend.mission.edit-mission',compact('editData'));
    }


    public function update(Request $request,$id)
    {
    	$data = Mission::find($id);
    	$data->title =$request->title;
    	$data->created_by = Auth::user()->id;
    	if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		@unlink(public_path('upload/mission_images'.$data->image))	;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/mission_images'),$filename);
    		$data['image']=$filename;
    	}
    	$data->save();
    	return redirect()->route('missions.view')->with('success','data updated successfully');
    	
    }

    public function delete($id)
    {
    	$mission = Mission::find($id);
    	if (file_exists('public/upload/mission_images'.$mission->image) AND ! empty($mission->image)) {
    		

    		unlink('public/upload/mission_images'.$mission->image);
    	}
    	$mission->delete();
    	return redirect()->route('missions.view')->with('success','mission deleted successfully');
    }
}
