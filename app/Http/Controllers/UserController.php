<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /*list*/
    public function list(){
        return User::orderBy('id','desc')->get();
    }
    /*index*/
    public function index(){
        $users = User::all();
        return view('backend.user.index',compact('users'));
    }
    /*create*/
    public function create(){
        return view('backend.user.create');
    }
    /*store*/
    public function store(Request $request){
        $input =  $request->all();
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'status' => 'required'
        ]);
        DB::table('users')->insert([
            'name' => $input['name'],
            'gender' => $input['gender'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role' => $input['role'],
            'status' => $input['status'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect(route('user.index'));
    }
    /*edit*/
    public function edit($id){
        $edit = User::findOrFail($id);
        return view('backend.user.edit',compact('edit'));
    }
    /*update*/
    public function update(Request $request,$id){
        $update = User::findOrFail($id);
        $input =  $request->all();
        if ($input['password']==null){
            $input['password'] = $update->password;
        }else{
            $input['password'] = Hash::make($input['password']);
        }
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'role' => 'required',
            'type' => 'required',
            'status' => 'required'
        ]);
        $update->name =$input['name'];
        $update->gender =$input['gender'];
        $update->email =$input['email'];
        $update->password =$input['password'];
        $update->role =$input['role'];
        $update->status =$input['status'];
        $update->type =$input['type'];
        $update->save();
        return redirect(route('user.index'));
    }
    /*inactive*/
    public function inactive($id){
        $user = User::findOrFail($id);
        $user->status = 'inactive';
        $user->save();
        return redirect()->back();
    }
}
