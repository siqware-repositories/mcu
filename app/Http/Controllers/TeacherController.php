<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    /*list*/
    public function list(){
        $teachers = Teacher::all();
        return DataTables::of($teachers)
            ->editColumn('profile',function ($profile){
                return '<img src="'.$profile->profile.'" width="100" height="50"/>';
            })
            ->addColumn('action', function ($action) {
                return '<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right py-0">
												<a href="'.route('backend.teacher.remove',$action->id).'" class="dropdown-item text-warning py-1"><i class="icon-database-remove"></i> Remove</a>
											</div>
										</div>';
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }
    /*index*/
    public function index(){
        return view('backend.teacher.index');
    }
    /*store*/
    public function store(Request $request){
        $input = $request->all();
        if (!isset($input['file_path'][0])){
            $input['file_path'][0] = '';
        }
        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'tel'=>'required',
            'email'=>'required',
            'fb'=>'required',
            'file_path.*'=>'required',
        ]);
        /*Teacher*/
        Teacher::create([
            'name' => $input['name'],
            'position' => $input['position'],
            'tel' => $input['tel'],
            'email' => $input['email'],
            'fb' => $input['fb'],
            'profile' => $input['file_path'][0],
        ]);
        return redirect()->back();
    }
    /*remove*/
    public function remove($id){
        Teacher::findOrFail($id)->delete();
        return redirect()->back();
    }
}
