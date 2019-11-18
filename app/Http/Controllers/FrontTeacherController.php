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


        return view('front.teacher-index',compact(['staffs']));
    }
}
