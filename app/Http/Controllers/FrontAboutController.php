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


        return view('front.about-index',compact(['corporations','about']));
    }
}
