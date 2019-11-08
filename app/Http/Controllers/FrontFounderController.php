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


        return view('front.founder-index',compact(['corporations','news_latest','founder']));
    }
}
