<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SessionWiseModel;
use App\Models\Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class SessionWiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = SessionWiseModel::get()->all();
        return view('admin.aqar.session_wise',compact('session'));
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
        // dd($request);
        $request->validate([
            "session"=>'required',
            "title"=>'nullable',
            'upload'=>'required',
        ]);
        $filepath='';
        if($request->hasFile('upload')){
            // dd($request->upload);
            $mainpic='session-'.time().'-'.rand(0,99).'.'.$request->upload->extension();
            $request->upload->move(public_path('upload/AQAR/Session/'),$mainpic);
            $filepath = 'upload/AQAR/Session/'.$mainpic;
        }

       $data= SessionWiseModel::create([
           'session' => $request->session,
           'title' => $request->title,
           'upload' => $filepath,
        ]);
        if($data){
        return redirect()->back()->with('success','New AQAR added successfully.');
        }
        else{
            return redirect()->back()->with('error','AQAR not added');
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
        $id=Crypt::decrypt($id);
        $Session_data   =   SessionWiseModel::find($id);
        $session        =   SessionWiseModel::get()->all();
        return view('admin.aqar.session_wise',compact('Session_data','session'));
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
        $filepath='';
        if($request->hasFile('upload')){
            // dd($stock->upload);
            $mainpic='session-'.time().'-'.rand(0,99).'.'.$request->upload->extension();
            $request->upload->move(public_path('upload/AQAR/Session/'),$mainpic);
            $filepath = 'upload/AQAR/Session/'.$mainpic;
            $data= SessionWiseModel::find($id)->update(['upload' => $filepath]);
            unlink($request->oldfile);
        }else{
            $filepath = $request->oldfile;
        }

       $data= SessionWiseModel::find($id)->update([
           'session' => $request->session,
           'title' => $request->title,
           'upload' => $filepath,
        ]);
        if($data){
        return redirect()->back()->with('success','New AQAR Updated successfully.');
        }
        else{
            return redirect()->back()->with('error','AQAR not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id=Crypt::decrypt($id);
        try{
            $res=SessionWiseModel::find($id);
            // dd($res);
            unlink($res->upload);
            $res = $res->delete();
            if($res)
            {
                session()->flash('success','AQAR deleted Sucessfully');
            }
            else
            {
                session()->flash('error','AQAR not deleted ');
            }
        }
        catch(Exception $ex)
        {
            $url=URL::current();
            Error::create(['url'=>$url,'message'=>$ex->getMessage()]);
            Session::flash('error','Server Error ');
        }
        return redirect()->back();

    }
}
