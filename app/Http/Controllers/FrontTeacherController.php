<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\News;
use App\Teacher;
use Illuminate\Http\Request;

class FrontTeacherController extends Controller
{
    /*index*/
    public function index(){
        $staffs = Teacher::paginate(6);
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.teacher-index',compact(['corporations','news_latest','staffs']));
    }
}
