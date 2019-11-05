<?php

namespace App\Http\Controllers;

use App\Academic;
use App\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontAcademicController extends Controller
{
    /*index*/
    public function index(){
        $academics_bachelor = Academic::where('status',true)->where('type','Bachelor')->get();
        $academics_associate = Academic::where('status',true)->where('type','Associate')->get();
        $academics_master = Academic::where('status',true)->where('type','Master')->get();
        $academics_doctor = Academic::where('status',true)->where('type','Doctor')->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.academic-index',compact(['corporations','academics_bachelor','academics_associate','academics_master','academics_doctor']));
    }
    /*show*/
    public function show($id){
        $academic = Academic::findOrFail($id);
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.academic-show',compact(['corporations','academic']));
    }
    /*show*/
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
}
