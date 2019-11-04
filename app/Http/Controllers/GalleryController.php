<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\GalleryDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    /*list*/
    public function list(){
        $videos = Gallery::where('type','gallery')->where('status',true)->get();
        return DataTables::of($videos)
            ->addColumn('thumb',function ($thumb){
                return '<img src="'.$thumb->gallery_detail[0]->path.'" width="100" height="50"/>';
            })
            ->addColumn('action', function ($action) {
                return '<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right py-0">
												<a href="'.route('backend.gallery.remove',$action->id).'" class="dropdown-item text-warning py-1"><i class="icon-database-remove"></i> Remove</a>
											</div>
										</div>';
            })
            ->rawColumns(['thumb','action'])
            ->make(true);
    }
    /*index*/
    public function index(){
        return view('backend.gallery.index');
    }
    /*store*/
    public function store(Request $request){
        $input = $request->all();
        if (!isset($input['file_path'][0])){
            return redirect()->back();
        }
        $request->validate([
            'title'=>'required',
            'file_path.*'=>'required',
        ]);
        /*gallery*/
        $gallery = Gallery::create([
            'user_id' => Auth::user()->id,
            'title' => $input['title'],
            'type' => 'gallery',
            'status' => true
        ]);
        foreach ($input['file_path'] as $file){
            GalleryDetail::create([
                'gallery_id'=>$gallery->id,
                'path'=>$file
            ]);
        }
        return redirect()->back();
    }
    /*remove*/
    public function remove($id){
        $video  = Gallery::findOrFail($id);
        $video->status = false;
        $video->save();
        return redirect()->back();
    }
}
