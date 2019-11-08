<?php

namespace App\Http\Controllers;

use App\Academic;
use App\AcademicDetail;
use App\Gallery;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class FrontAcademicController extends Controller
{
    /*index*/
    public function index(){
        $academics_bachelor = Academic::where('status',true)->where('type','Bachelor')->get();
        $academics_associate = Academic::where('status',true)->where('type','Associate')->get();
        $academics_master = Academic::where('status',true)->where('type','Master')->get();
        $academics_doctor = Academic::where('status',true)->where('type','Doctor')->get();

        return view('front.academic-index',compact(['corporations','academics_bachelor','academics_associate','academics_master','academics_doctor']));
    }
    /*show*/
    public function show($id){
        $news = News::where('is_publish',true)->where('status',true)->where('academic_id',$id)->where('type','academic')->paginate(5);
        $academic = Academic::findOrFail($id);
        return view('front.academic-show',compact(['corporations','academic','news']));
    }
    /*add major*/
    public function add_major(Request $request,$id){
        $input = $request->all();
        $request->validate([
            'major'=>'required'
        ]);
        DB::table('academic_details')->insert([
            'academic_id' => $id,
            'major' => $input['major'],
            'desc' => 'Content',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    /*update home academic*/
    public function update_home(Request $request,$id){
        $input = $request->all();
        $request->validate([
            'content'=>'required'
        ]);
        $update = Academic::findOrFail($id);
            $update->desc = $input['content'];
            $update->save();
        return redirect()->back();
    }
    /*update home academic detail*/
    public function update_home_detail(Request $request,$id){
        $input = $request->all();
        $request->validate([
            'content'=>'required'
        ]);
        $update = AcademicDetail::findOrFail($id);
            $update->desc = $input['content'];
            $update->save();
        return redirect()->back();
    }
    /*store course*/
    public function update_course(Request $request,$id){
        $input = $request->all();
        $request->validate([
            'content'=>'required'
        ]);
        $update = AcademicDetail::findOrFail($id);
        $update->course = $input['content'];
        $update->save();
        return redirect()->back();
    }
    public function update_schedule(Request $request,$id){
        $input = $request->all();
        $request->validate([
            'content'=>'required'
        ]);
        $update = AcademicDetail::findOrFail($id);
        $update->schedule = $input['content'];
        $update->save();
        return redirect()->back();
    }
    public function update_teacher(Request $request,$id){
        $input = $request->all();
        $request->validate([
            'content'=>'required'
        ]);
        $update = AcademicDetail::findOrFail($id);
        $update->teacher = $input['content'];
        $update->save();
        return redirect()->back();
    }
    /*store news by academic*/
    public function store_news(Request $request,$id){
        $input = $request->all();
        if (!isset($input['file_thumb'][0]) && !isset($input['file_path'][0])){
            $input['file_thumb'][0] = '';
        }
        $request->validate([
            'file_thumb.*' =>'required',
            'title' =>'required',
            'content' =>'required',
        ]);
        /*post*/
        $news = News::create([
            'user_id' =>Auth::user()->id,
            'academic_id' =>$id,
            'type' =>'academic',
            'thumb' =>$input['file_thumb'][0],
            'title' =>$input['title'],
            'content' =>$input['content'],
            'status' =>true,
            'is_publish' =>false,
        ]);
        if ($news){
            return redirect()->back();
        }
    }
    public function news_remove($id){
        $remove = News::findOrFail($id);
        $remove->status = false;
        $remove->save();
        return redirect()->back();
    }
    public function news_edit($id){
        $edit = News::findOrFail($id);
        return view('front.edit-news',compact('edit'));
    }
    public function news_update(Request $request,$id){
        $news = News::findOrFail($id);
        $input = $request->all();
        if (!isset($input['file_thumb'][0])){
            $input['file_thumb'][0] = $news->thumb;
        }
        $request->validate([
            'title' =>'required',
            'content' =>'required',
        ]);
        /*post*/
        $news->update([
            'user_id' =>1,
            'thumb' =>$input['file_thumb'][0],
            'title' =>$input['title'],
            'content' =>$input['content']
        ]);
        if ($news){
            return Redirect::to($request->request->get('http_referrer'));
        }
    }
}
