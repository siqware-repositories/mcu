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


        return view('front.video-index',compact(['videos']));
    }
}
