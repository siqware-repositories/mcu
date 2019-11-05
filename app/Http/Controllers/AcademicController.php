<?php

namespace App\Http\Controllers;

use App\Academic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class AcademicController extends Controller
{
    /*list*/
    public function list(){
        $lists = Academic::where('status',true)->get();
        return DataTables::of($lists)
            ->addColumn('action', function ($action) {
                return '<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right py-0">
												<a href="'.route('backend.academic.remove',$action->id).'" class="dropdown-item text-warning py-1"><i class="icon-database-remove"></i> Remove</a>
											</div>
										</div>';
            })
            ->make(true);
    }
    /*index*/
    public function index(){
        return view('backend.academic.index');
    }
    /*create*/
    public function create(){
        return view('backend.academic.create');
    }
    /*store*/
    public function store(Request $request){
        $input = $request->all();
        $request->validate([
            'faculty'=>'required',
            'desc'=>'required'
        ]);
        $insert = DB::table('academics')->insert([
            'faculty'=>$input['faculty'],
            'desc'=>$input['desc'],
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now()
        ]);
        if ($insert){
            return redirect(route('backend.academic.index'));
        }
    }
    /*remove*/
    public function remove($id){
        $remove = Academic::findOrFail($id);
        $remove->status = false;
        $remove->save();
        return redirect()->back();
    }
}
