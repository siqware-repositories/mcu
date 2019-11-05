<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\News;
use App\Video;
use Illuminate\Http\Request;

class FrontVideoController extends Controller
{
    /*index*/
    public function index(){
        $videos = Video::paginate(6);
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.video-index',compact(['corporations','news_latest','videos']));
    }
}
