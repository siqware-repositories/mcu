<?php

namespace App\Http\Controllers;

use App\Corporation;
use App\Event;
use App\Gallery;
use App\News;
use App\Rector;
use App\Testimonial;
use App\Video;

class FrontHomeController extends Controller
{
    public function index(){
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        $testimonials_one = Testimonial::limit(2)->offset(0)->get();
        $testimonials_two = Testimonial::limit(2)->offset(2)->get();
        $galleries = Gallery::where('type','gallery')->limit(3)->get();
        $videos = Video::limit(3)->get();
        $events = Event::where('is_publish',true)->limit(3)->get();
        $news = News::where('is_publish',true)->limit(3)->get();
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $rector = Rector::first();
        return view('front.index',compact(['rector','news','news_latest','events','videos','galleries','testimonials_one','testimonials_two','corporations']));
    }
}