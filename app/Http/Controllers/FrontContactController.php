<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\News;
use Illuminate\Http\Request;

class FrontContactController extends Controller
{
    /*index*/
    public function index(){
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.contact-index',compact(['corporations','news_latest']));
    }
}
