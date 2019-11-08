<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\GalleryDetail;
use App\News;

class FrontGalleryController extends Controller
{
    /*index*/
    public function index(){
        $galleries = Gallery::where('type','gallery')->paginate(6);


        return view('front.gallery-index',compact(['corporations','news_latest','galleries']));
    }
    /*index*/
    public function show($id){
        $gallery_details = GalleryDetail::where('gallery_id',$id)->paginate(16);


        return view('front.gallery-show',compact(['corporations','news_latest','gallery_details']));
    }
}
