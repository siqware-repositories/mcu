<?php

namespace App\Http\Controllers;

use App\Event;
use App\Gallery;
use App\News;
use Illuminate\Http\Request;

class FrontEventController extends Controller
{
    /*index*/
    public function index(){
        $events = Event::where('is_publish',true)->paginate(5);
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.event-index',compact(['corporations','news_latest','events']));
    }
}
