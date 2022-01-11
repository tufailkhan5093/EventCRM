<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function events()
    {
        $eventss=Event::all();
        return view('events',['events'=>$eventss]);
    }

    public function addevent(Request $request)
    {
        $event=new Event();
        $event->name=$request->name;
        $event->date=$request->date;
        $event->budget=$request->budget;
        $event->client=$request->clent;
        $event->save();
    }

    public function update_event(Request $request,$id)
    {
        $event=Event::find($id);
        if($request->name)
        {
            $event->name=$request->name;
        }

        if($request->date)
        {
            $event->date=$request->date;
        }

        if($request->budget)
        {
            $event->budget=$request->budget;
        }

        if($request->clent)
        {
            $event->client=$request->clent;
        }

        $event->save();
    }
   
}
