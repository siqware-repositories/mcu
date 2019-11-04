<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EventController extends Controller
{
    public function list(){
        $event = Event::where('status',1)->get();
        return DataTables::of($event)
            ->addColumn('action', function ($action) {
                return '<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right py-0">
												<a href="'.route('backend.event.remove',$action->id).'" class="dropdown-item text-warning py-1"><i class="icon-database-remove"></i> Remove</a>
												<a href="'.route('backend.event.edit',$action->id).'" class="dropdown-item text-success py-1"><i class="icon-database-edit2"></i> Edit</a>
											</div>
										</div>';
            })
            ->editColumn('is_publish',function ($is_publish){
                return $is_publish->is_publish?'<a href="'.route('backend.event.is_publish',$is_publish->id).'" class="badge badge-pill badge-success">Published</a>':'<a href="'.route('backend.event.is_publish',$is_publish->id).'" class="badge badge-pill badge-warning">Unpublished</a>';
            })
            ->addColumn('date',function ($date){
                return Carbon::parse($date->open)->isoFormat('DD/MM/Y, h:mm:ss A').' - '.Carbon::parse($date->close)->isoFormat('DD/MM/Y, h:mm:ss A');
            })
            ->rawColumns(['date','action','is_publish'])
            ->make(true);
    }
    /*index*/
    public function index(){
        return view('backend.event.index');
    }
    /*create*/
    public function create(){
        return view('backend.event.create');
    }
    /*store*/
    public function store(Request $request){
        $input = $request->all();
        $request->validate([
            'title' => 'required',
            'open' => 'required',
            'close' => 'required',
            'location' => 'required',
            'content' => 'required'
        ]);
        $newEvent = Event::create([
            'user_id' => 1,
            'title' => $input['title'],
            'open' => $input['open'],
            'close' => $input['close'],
            'location' => $input['location'],
            'desc' => $input['content'],
            'is_publish' => false,
            'status' => true
        ]);
        if ($newEvent){
            return redirect(route('backend.event.index'));
        }
    }
    /*edit*/
    public function edit($id){
        $event = Event::findOrFail($id);
        return view('backend.event.edit',compact('event'));
    }
    /*update*/
    public function update(Request $request,$id){
        $event = Event::findOrFail($id);
        $input = $request->all();
        $request->validate([
            'title' => 'required',
            'open' => 'required',
            'close' => 'required',
            'location' => 'required',
            'content' => 'required'
        ]);
        /*post*/
        $event->update([
            'title' => $input['title'],
            'open' => $input['open'],
            'close' => $input['close'],
            'location' => $input['location'],
            'desc' => $input['content']
        ]);
        if ($event){
            return redirect(route('backend.event.index'));
        }
    }
    /*is publish*/
    public function is_publish($id){
        $toggle_publish = Event::findOrFail($id);
        $toggle_publish->is_publish = !$toggle_publish->is_publish;
        $toggle_publish->save();
        return redirect(route('backend.event.index'));
    }
    public function remove($id){
        $remove = Event::findOrFail($id);
        $remove->status = false;
        $remove->save();
        return redirect(route('backend.event.index'));
    }
}
