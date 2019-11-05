<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\GalleryDetail;
use App\News;
use Illuminate\Http\Request;

class FrontGalleryController extends Controller
{
    /*index*/
    public function index(){
        $galleries = Gallery::where('type','gallery')->paginate(6);
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.gallery-index',compact(['corporations','news_latest','galleries']));
    }
    /*index*/
    public function show($id){
        $gallery_details = GalleryDetail::where('gallery_id',$id)->paginate(16);
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        return view('front.gallery-show',compact(['corporations','news_latest','gallery_details']));
    }
}
