<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\GalleryDetail;
use App\News;
use App\Rector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class NewsController extends Controller
{
    public function list(){
        $news = News::where('status','<>',0)->get();
        return DataTables::of($news)
            ->addColumn('action', function ($action) {
                return '<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right py-0">
												<a href="'.route('backend.news.remove',$action->id).'" class="dropdown-item text-warning py-1"><i class="icon-database-remove"></i> Remove</a>
												<a href="'.route('backend.news.edit',$action->id).'" class="dropdown-item text-success py-1"><i class="icon-database-edit2"></i> Edit</a>
											</div>
										</div>';
            })
            ->editColumn('thumb',function ($thumb){
                return '<img src="'.$thumb->thumb.'" width="50">';
            })
            ->editColumn('is_publish',function ($is_publish){
                return $is_publish->is_publish?'<a href="'.route('backend.news.is_publish',$is_publish->id).'" class="badge badge-pill badge-success">Published</a>':'<a href="'.route('backend.news.is_publish',$is_publish->id).'" class="badge badge-pill badge-success">Unpublished</a>';
            })
            ->rawColumns(['thumb','action','is_publish'])
            ->make(true);
    }
    public function index(){
        $rector = Rector::first();
        return view('backend.news.index',compact('rector'));
    }
    public function create(){
        return view('backend.news.create');
    }
    public function edit($id){
        $news = News::findOrFail($id);
        return view('backend.news.edit',compact('news'));
    }
    public function store(Request $request){
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
            'academic_id' =>0,
            'thumb' =>$input['file_thumb'][0],
            'title' =>$input['title'],
            'content' =>$input['content'],
            'status' =>true,
            'is_publish' =>false,
        ]);
        if ($news){
            return redirect(route('backend.news.index'));
        }
    }
    public function update(Request $request,$id){
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
            return redirect(route('backend.news.index'));
        }
    }
    public function is_publish($id){
        $toggle_publish = News::findOrFail($id);
        $toggle_publish->is_publish = !$toggle_publish->is_publish;
        $toggle_publish->save();
        return redirect(route('backend.news.index'));
    }
    public function remove($id){
        $remove = News::findOrFail($id);
        $remove->status = false;
        $remove->save();
        return redirect(route('backend.news.index'));
    }
}
