<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VideoController extends Controller
{
    function YoutubeID($url)
    {
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }

        return $url;
    }
    /*list*/
    public function list(){
        $videos = Video::all();
        return DataTables::of($videos)
            ->editColumn('url',function ($url){
                return '<iframe width="200" height="50" src="'.$url->url.'" frameborder="0" allowfullscreen></iframe>';
            })
            ->addColumn('action', function ($action) {
                return '<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right py-0">
												<a href="'.route('backend.video.remove',$action->id).'" class="dropdown-item text-warning py-1"><i class="icon-database-remove"></i> Remove</a>
											</div>
										</div>';
            })
            ->rawColumns(['url','action'])
            ->make(true);
    }
    /*index*/
    public function index(){
        return view('backend.video.index');
    }
    /*store*/
    public function store(Request $request){
        $input = $request->all();
        $request->validate([
            'url'=>'required'
        ]);
        $parser = $this->YoutubeID($input['url']);
        if ($parser){
            Video::create([
                'url'=>'https://www.youtube.com/embed/'.$parser
            ]);
        }
        return redirect()->back();
    }
    /*remove*/
    public function remove($id){
        $video  = Video::findOrFail($id);
        $video->delete();
        return redirect()->back();
    }
}
