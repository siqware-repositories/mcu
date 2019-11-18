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


        return view('front.event-index',compact(['corporations','events']));
    }
}
