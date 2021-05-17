<?php

namespace App\Http\Controllers\ledger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\model\ledgermodels;
class ledger extends Controller
{

    public function master()
    {
        return view('frontend.ledgermodel.master');
    }

    public function viewer()
        {
            //to use array function
            //$data['countLogo'] = Logo::count();
           $data['alldata']=ledgermodels::all();
            //$data['alldata']=ledgermodels::where('created_by',Auth::User()->id)->get();
            
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
    	

    	$data = new ledgermodels();
    	$data->cash =$request->cash;
        $data->receivable =$request->receivable;
        $data->equipment =$request->equipment;
        $data->note_payble =$request->note_payble;
        $data->account_payble =$request->account_payble;
        $data->capital =$request->capital;
        $data->drawing =$request->drawing;
        $data->revenue =$request->revenue;
        $data->expense =$request->expense;    	
    	$data->created_by = Auth::User()->id;
        $data->updated_by = Auth::User()->id;
    		
    	$data->save();
    	return redirect()->route('ledgermodel.viewer')->with('success','ledgermodel inserted  successfully');

    	
    }

    public function edit($id)
    {
    	$editData=ledgermodels::find($id);
    	//dd($editData);
    	return view('frontend.ledgermodel.edit-ledgermodel',compact('editData'));
    }


    public function update(Request $request,$id)
    {
    	$data = ledgermodels::find($id);
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
    	return redirect()->route('ledgermodel.view')->with('success','data updated successfully');
    	
    }

    public function delete($id)
    {
    	$ledgermodel = ledgermodels::find($id);
    	$ledgermodel->delete();
    	return redirect()->route('ledgermodel.viewer')->with('success','ledgermodel deleted successfully');
    }
}
