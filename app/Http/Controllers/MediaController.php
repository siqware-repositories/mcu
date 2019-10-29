<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MediaController extends Controller
{
    public function store(Request $request){
        $file = $request->file('file');
        $file = $request->file('file');
        $img = Image::make($file)->encode('jpg',70);
        $name = uniqid().'-'.time() . '.jpg';
        $store = Storage::disk('public')->put($name, $img);
        if ($store){
            return response()->json(['link'=>'/storage/'.$name]);
        }
    }
    public function list(){
        return $images = Storage::disk('public')->allFiles();
    }
}
