<?php

namespace App\Http\Controllers;

use App\Academic;
use App\News;
use App\Office;
use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    /*show*/
    public function show($id){
        $news = News::where('is_publish',true)->where('status',true)->where('academic_id',$id)->where('type','office')->paginate(5);
        $office = Office::findOrFail($id);
        return view('front.office-show',compact(['corporations','office','news']));
    }
    /*store news by academic*/
    public function store_news(Request $request,$id){
        $input = $request->all();
        if (!isset($input['file_thumb'][0]) && !isset($input['file_path'][0])){
            $input['file_thumb'][0] = '';
        }
        $request->validate([
            'file_thumb.*' =>'required',
            'title' =>'required',
            'content' =>'required',
        ]);
        /*post*/
        $news = News::create([
            'user_id' =>Auth::user()->id,
            'academic_id' =>$id,
            'type' =>'office',
            'thumb' =>$input['file_thumb'][0],
            'title' =>$input['title'],
            'content' =>$input['content'],
            'status' =>true,
            'is_publish' =>false,
        ]);
        if ($news){
            return redirect()->back();
        }
    }
    public function news_remove($id){
        $remove = News::findOrFail($id);
        $remove->status = false;
        $remove->save();
        return redirect()->back();
    }
    public function news_edit($id){
        $edit = News::findOrFail($id);
        return view('front.edit-news',compact('edit'));
    }
    public function news_update(Request $request,$id){
        $news = News::findOrFail($id);
        $input = $request->all();
        if (!isset($input['file_thumb'][0])){
            $input['file_thumb'][0] = $news->thumb;
        }
        $request->validate([
            'title' =>'required',
            'content' =>'required',
        ]);
        /*post*/
        $news->update([
            'user_id' =>1,
            'thumb' =>$input['file_thumb'][0],
            'title' =>$input['title'],
            'content' =>$input['content']
        ]);
        if ($news){
            return redirect(route('front.academic'));
        }
    }
}
