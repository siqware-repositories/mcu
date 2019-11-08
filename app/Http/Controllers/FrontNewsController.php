<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\News;
use Illuminate\Http\Request;

class FrontNewsController extends Controller
{
    /*index*/
    public function index(){
        $news = News::where('is_publish',true)->paginate(6);
        return view('front.news-index',compact(['corporations','news_latest','news']));
    }
    /*show*/
    public function show($id){
        $show = News::where('is_publish',true)->where('status',true)->where('id',$id)->first();
        return view('front.news-show',compact('show'));
    }
}
