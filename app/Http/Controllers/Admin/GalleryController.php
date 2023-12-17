<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Error;
use App\Models\Event;
use App\Models\EventGallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'event_id' => 'required'
        ]);
        $event = Event::find($request->event_id);
        if ($request->hasFile('file')) {
            $filepath = 'upload/EventGallery/' . $event->id . '/';
            foreach ($request->file('file') as $file) {
                $name = $event->name.'-' . time() . '-' . rand(0, 99) . '.' . $file->extension();
                $file->move(public_path($filepath), $name);
                $eventpic = $filepath . $name;

                $data = EventGallery::create([
                    'event_id' => $request->event_id,
                    'image' => $eventpic
                ]);
            }
            if ($data) {
                return redirect()->back()->with('success', 'Photos added to event successfully.');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Please upload correct file');
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
        $event = Event::find($id);
        $events = EventGallery::where('event_id', $id)->get();
        return view('admin.gallery', compact('event', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsez
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        try {
            $res = EventGallery::find($id)->delete();
            if ($res) {
                session()->flash('success', 'Photos deleted sucessfully');
            } else {
                session()->flash('error', 'Photo not deleted ');
            }
        } catch (Exception $ex) {
            $url = URL::current();
            Error::create(['url' => $url, 'message' => $ex->getMessage()]);
            Session::flash('error', 'Server Error ');
        }
        return redirect()->back();
    }
}
