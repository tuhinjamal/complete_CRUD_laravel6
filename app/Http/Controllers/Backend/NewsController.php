<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\News;
class NewsController extends Controller
{
    public function view()
    {
    	//to use array function
    	//$data['countLogo'] = Logo::count();
    	$data['alldata']=News::all();
    	return view('backend.news.view-news',$data);
    	//to use compact function
    	/*$alldata = User::all();
    	dd($alldata->toArray());
    	return view('backend.user.viewuser',compact(alldata));*/
    }
    


    public function add()
    {
    	return view('backend.news.add-news');
    }

    public function store(Request $request)
    {
    	

    	$data = new News();
    	$data->short_title =$request->short_title;
        $data->long_title =$request->long_title;
        $data->date =$request->date;
    	$data->created_by = Auth::user()->id;
    		if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/news_images'),$filename);
    		$data['image']=$filename;
    	}
    	$data->save();
    	return redirect()->route('news.view')->with('success','news inserted  successfully');

    	
    }

    public function edit($id)
    {
    	$editData=News::find($id);
    	//dd($editData);
    	return view('backend.news.edit-news',compact('editData'));
    }


    public function update(Request $request,$id)
    {
    	$data = News::find($id);
    	$data->short_title =$request->short_title;
        $data->long_title =$request->long_title;
        $data->date =$request->date;
    	$data->created_by = Auth::user()->id;
    	if ($request->file('image')) 
    	{
    		
    		$file=$request->file('image');
    		@unlink(public_path('upload/news_images'.$data->image))	;
    		$filename=date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/news_images'),$filename);
    		$data['image']=$filename;
    	}
    	$data->save();
    	return redirect()->route('news.view')->with('success','data updated successfully');
    	
    }

    public function delete($id)
    {
    	$news = News::find($id);
    	if (file_exists('public/upload/news_images'.$news->image) AND ! empty($news->image)) {
    		

    		unlink('public/upload/news_images'.$news->image);
    	}
    	$news->delete();
    	return redirect()->route('news.view')->with('success','news deleted successfully');
    }
}
