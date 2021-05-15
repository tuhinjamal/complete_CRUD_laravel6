<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contacts;
use Auth;

class ContactController extends Controller
{
   public function view()
    {
    	//to use array function
    	$data['countContact'] = Contacts::count();
    	$data['alldata']=Contacts::all();
    	return view('backend.contact.view-contact',$data);
    	//to use compact function
    	/*$alldata = User::all();
    	dd($alldata->toArray());
    	return view('backend.user.viewuser',compact(alldata));*/
    }



    public function add()
    {
    	return view('backend.contact.add-contact');
    }

    public function store(Request $request)
    {
    	

    	$data = new contacts();
    	$data->address =$request->address;
    	$data->email =$request->email;
    	$data->mobile_number =$request->mobile_number;
    	$data->facebook =$request->facebook;
    	$data->twitter =$request->twitter;
    	$data->youtube =$request->youtube;
    	$data->created_by = Auth::user()->id; 
    	$data->save();
    	return redirect()->route('contacts.view')->with('success','contact inserted  successfully');

    	
    }

    public function edit($id)
    {
    	$editData=contacts::find($id);
    	//dd($editData);
    	return view('backend.contact.edit-contact',compact('editData'));
    }


    public function update(Request $request,$id)
    {
    	$data = Contacts::find($id);
    	$data->address =$request->address;
    	$data->mobile_number =$request->mobile_number;
    	$data->email =$request->email;
    	$data->facebook =$request->facebook;
    	$data->twitter =$request->twitter;
    	$data->youtube =$request->youtube;
    	$data->created_by = Auth::user()->id;
    	
    	$data->save();
    	return redirect()->route('contacts.view')->with('success','data updated successfully');
    	
    }

    public function delete($id)
    {
    	$contact = Contacts::find($id);
    	
    	$contact->delete();
    	return redirect()->route('contacts.view')->with('success','contact deleted successfully');
    }

}
