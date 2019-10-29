<?php

namespace App\Http\Controllers;

use App\Founder;
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
        $rector->update($input);
        return redirect(route('backend.rector.index'));
    }
    public function founder_index(){
        $founder = Founder::first();
        return view('backend.setting.founder',compact('founder'));
    }
    public function founder_update(Request $request,$id){
        $input = $request->all();
        $founder = Founder::findOrFail($id);
        $founder->update($input);
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
        $corporation = History::first();
        return view('backend.setting.corporation',compact('corporation'));
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
