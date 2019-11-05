<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\History;
use App\News;
use Illuminate\Http\Request;

class FrontAboutController extends Controller
{
    /*index*/
    public function index(){
        $about = History::first();
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.about-index',compact(['corporations','news_latest','about']));
    }
}
