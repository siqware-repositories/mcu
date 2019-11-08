<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\News;
use Illuminate\Http\Request;

class FrontContactController extends Controller
{
    /*index*/
    public function index(){


        return view('front.contact-index',compact(['corporations','news_latest']));
    }
}
