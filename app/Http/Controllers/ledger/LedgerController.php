<?php

namespace App\Http\Controllers\ledgermodel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\ledgermodel;
class LedgerController extends Controller
{
  /* public function view()
    {
    	//to use array function
    	//$data['countLogo'] = Logo::count();
    	$data['alldata']=ledgermodel::all();
    	return view('frontend.ledgermodel.view-ledgermodel',$data);
    	
    }*/
    public function viewer()
        {
            //to use array function
            //$data['countLogo'] = Logo::count();
            $data['alldata']=ledgermodel::where('created_by',Auth::user()->id)->get();
            
            //dd($data);
            return view('frontend.ledgermodel.viewer-ledgermodel',$data);
            //to use compact function
            /*$alldata = User::all();
            dd($alldata->toArray());
            return view('frontend.user.viewuser',compact(alldata));*/ 
        }


    public function add()
    {
    	return view('frontend.ledgermodel.add-ledgermodel');
    }

    public function store(Request $request)
    {
    	

    	$data = new ledgermodel();
    	$data->short_title =$request->short_title;
    	$data->long_title =$request->long_title;
    	$data->created_by = Auth::user()->id;
    		
    	$data->save();
    	return redirect()->route('sliders.view')->with('success','ledgermodel inserted  successfully');

    	
    }

    public function edit($id)
    {
    	$editData=ledgermodel::find($id);
    	//dd($editData);
    	return view('frontend.ledgermodel.edit-ledgermodel',compact('editData'));
    }


    public function update(Request $request,$id)
    {
    	$data = ledgermodel::find($id);
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
    	$ledgermodel = ledgermodel::find($id);
    	if (file_exists('public/upload/user_images'.$ledgermodel->image) AND ! empty($ledgermodel->image)) {
    		

    		unlink('public/upload/user_images'.$ledgermodel->image);
    	}
    	$ledgermodel->delete();
    	return redirect()->route('sliders.view')->with('success','ledgermodel deleted successfully');
    }
}
