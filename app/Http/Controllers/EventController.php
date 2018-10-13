<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event= new Event;
        $event->name=$request->get('name');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $event->date = strtotime($format);
        $event->venue=$request->get('venue');
        $event->artiste=$request->get('artiste');
        $event->save();

        return redirect('events')->with('success', 'Event Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passport = Event::find($id);
        return view('edit',compact('event','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event= \App\Passport::find($id);
        $event->name=$request->get('name');
        $event->artiste=$request->get('artiste');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $event->date = strtotime($format);
        $event->venue=$request->get('venue');
        $event->save();
        return redirect('events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('events')->with('success','Event has been  deleted');
    }
}
