<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Optix\YoutubeUrlParser\UrlParser;

class VideoController extends Controller
{
    /*list*/
    public function list(){
        return Video::all();
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
        $parser = new UrlParser($input['url']);
        if ($parser->isValid()){
            Video::create([
                'url'=>$parser->getEmbedUrl()
            ]);
        }
        return redirect()->back();
    }
}
