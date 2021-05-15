<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class usercontroller extends Controller
{
    public function view()
    {
    	//to use array function
    	$data['alldata']=User::all();
    	return view('backend.user.viewuser',$data);
    	//to use compact function
    	/*$alldata = User::all();
    	dd($alldata->toArray());
    	return view('backend.user.viewuser',compact(alldata));*/
    }



    public function add()
    {
    	return view('backend.user.adduser');
    }

    public function store(Request $request)
    {
    	$this->validate($request , [

    		'name' =>'required||unique:users,name',
    		'email' =>'required|unique:users,email',
    		'usertype'=>'required'

    	]);

    	$data = new User();

    	$data->usertype = $request->usertype;
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->password = bcrypt($request->password);
    	$data->save();
    	return redirect()->route('view_user');
    }

    public function edit($id)
    {
    	$editData=User::find($id);
    	//dd($editData);
    	return view('backend.user.edituser',compact('editData'));
    }


    public function update(Request $request,$id)
    {
    	$data = User::find($id);
    	$data->usertype = $request->usertype;
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->save();
    	return redirect()->route('view_user')->with('success','data updated successfully');
    	
    }

    public function delete($id)
    {
    	$user = User::find($id);
    	if (file_exists('public/upload/user_images'.$user->image) AND ! empty($user->image)) {
    		

    		unlink('public/upload/user_images'.$user->image);
    	}
    	$user->delete();
    	return redirect()->route('view_user')->with('success','data deleted successfully');
    }

}