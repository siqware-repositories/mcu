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
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.news-index',compact(['corporations','news_latest','news']));
    }
}
