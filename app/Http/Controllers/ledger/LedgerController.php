<?php

namespace App\Http\Controllers\ledger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Ledger;
class LedgerController extends Controller
{
  /* public function view()
    {
    	//to use array function
    	//$data['countLogo'] = Logo::count();
    	$data['alldata']=Ledger::all();
    	return view('frontend.Ledger.view-Ledger',$data);
    	
    }*/
    public function viewer()
        {
            //to use array function
            //$data['countLogo'] = Logo::count();
            $data['alldata']=Ledger::where('created_by',Auth::user()->id)->get();
            
            //dd($data);
            return view('frontend.Ledger.viewer-Ledger',$data);
            //to use compact function
            /*$alldata = User::all();
            dd($alldata->toArray());
            return view('frontend.user.viewuser',compact(alldata));*/ 
        }


    public function add()
    {
    	return view('frontend.Ledger.add-Ledger');
    }

    public function store(Request $request)
    {
    	

    	$data = new Ledger();
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
    	return redirect()->route('sliders.view')->with('success','Ledger inserted  successfully');

    	
    }

    public function edit($id)
    {
    	$editData=Ledger::find($id);
    	//dd($editData);
    	return view('frontend.Ledger.edit-Ledger',compact('editData'));
    }


    public function update(Request $request,$id)
    {
    	$data = Ledger::find($id);
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
    	$Ledger = Ledger::find($id);
    	if (file_exists('public/upload/user_images'.$Ledger->image) AND ! empty($Ledger->image)) {
    		

    		unlink('public/upload/user_images'.$Ledger->image);
    	}
    	$Ledger->delete();
    	return redirect()->route('sliders.view')->with('success','Ledger deleted successfully');
    }
}
