<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Error;
use App\Models\Event;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->get();
        return view('admin.event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        if ($request->hasFile('file'))
        {
            $filepath = 'upload/Event/';
            $file = $request->file('file');
            $name = 'Event-' . time() . '-' . rand(0, 99) . '.' . $file->extension();
            $file->move(public_path($filepath), $name);
            $eventpic = $filepath . $name;

            $data = Event::create([
                'name' => $request->name,
                'thumbnail' => $eventpic
            ]);

            if ($data) {
                return redirect()->back()->with('success', 'Event created successfully.');
            }
            else {
                return redirect()->back()->with('error', 'Something went wrong !');
            }
        }
        else
        {
            $data = Event::create([
                'name' => $request->name
            ]);

            return redirect()->back()->with('success', 'Event created successfully.');
        }
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
        $events = Event::orderBy('id', 'desc')->get();
        $editevent = Event::find(Crypt::decrypt($id));
        return view('admin.event', compact('events', 'editevent'));
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
        $request->validate([
            'name' => 'required',
        ]);
        Event::find(Crypt::decrypt($id))->update([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success','Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        try {
            $res = Event::find($id)->delete();
            if ($res) {
                session()->flash('success', 'Event deleted sucessfully');
            } else {
                session()->flash('error', 'Event not deleted ');
            }
        } catch (Exception $ex) {
            $url = URL::current();
            Error::create(['url' => $url, 'message' => $ex->getMessage()]);
            Session::flash('error', 'Server Error ');
        }
        return redirect()->back();
    }
}
