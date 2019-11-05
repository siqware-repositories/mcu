<?php

namespace App\Http\Controllers;

use App\Founder;
use App\Gallery;
use App\News;
use Illuminate\Http\Request;

class FrontFounderController extends Controller
{
    /*index*/
    public function index(){
        $founder = Founder::first();
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.founder-index',compact(['corporations','news_latest','founder']));
    }
}
