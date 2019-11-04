<?php

namespace App\Http\Controllers;

use App\Commitment;
use App\Founder;
use App\Gallery;
use App\GalleryDetail;
use App\History;
use App\Rector;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('backend.setting.index');
    }
    public function rector_index(){
        $rector = Rector::first();
        return view('backend.setting.rector',compact('rector'));
    }
    public function rector_update(Request $request,$id){
        $input = $request->all();
        $rector = Rector::findOrFail($id);
        $rector->update([
            'name' => $input['name'],
            'profile' => $input['file_path'][0],
            'title' => $input['title'],
            'content' => $input['content']
        ]);
        return redirect(route('backend.rector.index'));
    }
    public function founder_index(){
        $founder = Founder::first();
        return view('backend.setting.founder',compact('founder'));
    }
    public function founder_update(Request $request,$id){
        $input = $request->all();
        $founder = Founder::findOrFail($id);
        $founder->update([
            'name' => $input['name'],
            'profile' => $input['file_path'][0],
            'title' => $input['title'],
            'content' => $input['content']
        ]);
        return redirect(route('backend.founder.index'));
    }
    public function history_index(){
        $history = History::first();
        return view('backend.setting.history',compact('history'));
    }
    public function history_update(Request $request,$id){
        $input = $request->all();
        $history = History::findOrFail($id);
        $history->update($input);
        return redirect(route('backend.history.index'));
    }
    public function corporation_index(){
        $corporation = Gallery::with('gallery_detail')->where('type','corporation')->first();
        return view('backend.setting.corporation',compact('corporation'));
    }
    public function corporation_update(Request $request,$id){
        $input = $request->all();
        if (!isset($input['file_path'][0])){
            return redirect(route('backend.corporation.index'));
        }
        $gallerie = Gallery::findOrFail($id);
        $gallerie->update([
            'user_id' => 1,
            'title' => $input['title'],
            'type' => 'corporation',
            'status' => true
        ]);
        $gallerie->gallery_detail()->delete();
        foreach ($input['file_path'] as $file){
            GalleryDetail::create([
                'gallery_id'=>$gallerie->id,
                'path'=>$file
            ]);
        }
        return redirect(route('backend.corporation.index'));
    }
    public function commitment_index(){
        $commitments = Commitment::orderBy('id')->get();
        return view('backend.setting.commitment', compact('commitments'));
    }
    public function commitment_update(Request $request,$id){
        $input = $request->all();
        $commitment = Commitment::findOrFail($id)->update($input);
        if ($commitment){
            return redirect(route('backend.commitment.index'));
        }
    }
    public function rector_store(Request $request){
        $input = $request->all();
        Rector::create([
            'name' =>$input['name'],
            'profile' =>$input['profile'],
            'title' =>$input['title'],
            'content' =>$input['content']
        ]);
    }
}
