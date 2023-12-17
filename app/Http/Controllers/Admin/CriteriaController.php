<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Models\Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class CriteriaController extends Controller
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
            'criteria_id'=> 'required',
            'name'=>'nullable',
            'file'=>'nullable',
        ]);
        $filepath='';
        if($request->hasFile('file')){
            $mainpic='criteria '.$request->criteria_id.'-'.time().'-'.rand(0,99).'.'.$request->file->extension();
            $request->file->move(public_path('upload/AQAR/Criteria '.$request->criteria_id.'/'),$mainpic);
            $filepath = 'upload/AQAR/Criteria '.$request->criteria_id.'/'.$mainpic;
        }

       $data= Criteria::create([
           'criteria_id' => $request->criteria_id,
           'name' => $request->name,
           'path' => $filepath,
        ]);
        if($data){
        return redirect()->back()->with('success','New Criteria added successfully.');
        }
        else{
            return redirect()->back()->with('error','Criteria not added');
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
        $criterias = Criteria::where('criteria_id', $id)->get();
        return view('admin.aqar.criteria', compact('criterias'), ['criteria_id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decryptid=Crypt::decrypt($id);
        $editcriteria = Criteria::find($decryptid);
        $criterias = Criteria::where('criteria_id', $editcriteria->criteria_id)->get();
        return view('admin.aqar.criteria', compact('criterias', 'editcriteria'), ['criteria_id' => $editcriteria->criteria_id]);
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
            'criteria_id'=> 'required',
            'name'=>'nullable',
            'file'=>'nullable',
        ]);
        $filepath='';
        if($request->hasFile('file')){
            $mainpic='criteria '.$request->criteria_id.'-'.time().'-'.rand(0,99).'.'.$request->file->extension();
            $request->file->move(public_path('upload/AQAR/Criteria '.$request->criteria_id.'/'),$mainpic);
            $filepath = 'upload/AQAR/Criteria '.$request->criteria_id.'/'.$mainpic;
            $data= Criteria::find($id)->update(['path' => $filepath]);
            unlink($request->oldfile);
        }
        $data= Criteria::find($id)->update([
           'name' => $request->name,
        ]);
        if($data){
        return redirect()->route('admin.criteria.show',$request->criteria_id)->with('success','Criteria updated successfully.');
        }
        else{
            return redirect()->route('admin.criteria.show',$request->criteria_id)->with('error','Something went wrong !');
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
                // $res=Criteria::find($id)->delete();
                $res=Criteria::find($id);
                unlink($res->path);
                $res = $res->delete();
                if($res)
                {
                    session()->flash('success','Criteria deleted Sucessfully');
                }
                else
                {
                    session()->flash('error','Criteria not deleted ');
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
