<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('id', 'desc')->paginate(20);
        return view('admin.notice', compact('notices'));
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
     * @param  \Illuminate\Http\Request  $requestuest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('file'))
        {
            $fext=$request->file('file')->extension();
            $fname=date('d-M-Y').$request->cat.rand(0,9).rand(0,9).rand(0,9).rand(0,9).".".$fext;
            $request->file->move(public_path('upload/Notice'),$fname);
            $data = [
                'title' => $request->title,
                'category' => $request->category,
                'type' => $request->filetype,
                'filename' => 'upload/Notice/'.$fname
            ];
            if(Notice::create($data))
            {
                return back()->with('success', 'Notice saved successfully');
            }
            else {
                return back()->with('error', 'Oh! Notice did not saved successfully');
            }
        }
        else
        {
            $data = [
                'title' => $request->title,
                'category' => $request->category,
                'type' => $request->filetype,
                'filename' => $request->link
            ];
            if(Notice::create($data)) {
                return back()->with('success', 'Notice saved successfully');
            }
            else {
                return back()->with('error', 'Oh! Notice did not saved successfully');
            }
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
        $id             =   Crypt::Decrypt($id);
        $Notice_data   =   Notice::find($id);
        $notices        =   Notice::get()->all();
        return view('admin.notice',compact('Notice_data','notices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestuest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        if($request->hasFile('file'))
        {
            $fext=$request->file('file')->extension();
            $fname=date('d-M-Y').$request->cat.rand(0,9).rand(0,9).rand(0,9).rand(0,9).".".$fext;
            $request->file->move(public_path('upload/Notice'),$fname);
            $data = [
                'title' => $request->title,
                'category' => $request->category,
                'type' => $request->filetype,
                'filename' => 'upload/Notice/'.$fname
            ];
            if(Notice::find($id)->update($data))
            {
                unlink($request->oldfile);
                return back()->with('success', 'Notice updated successfully');
            }
            else {
                return back()->with('error', 'Oh! Notice did not update successfully');
            }
        }
        elseif(isset($request->link) && !empty($request->link))
        {
            $data = [
                'title' => $request->title,
                'category' => $request->category,
                'type' => $request->filetype,
                'filename' => $request->link
            ];
            if(Notice::find($id)->update($data)) {
                return back()->with('success', 'Notice Updated successfully');
            }
            else {
                return back()->with('error', 'Oh! Notice did not update successfully');
            }
        }else{
            $data = [
                'title' => $request->title,
                'category' => $request->category,
                'type' => $request->filetype,
                'filename' => $request->filetype=='file'?$request->oldfile:$request->oldfile
            ];
            if(Notice::find($id)->update($data)) {
                return back()->with('success', 'Notice Updated successfully');
            }
            else {
                return back()->with('error', 'Oh! Notice did not update successfully');
            }
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
        if(Notice::find(Crypt::decrypt($id))->delete()) {
            return back()->with('success', 'Notice deleted successfully');
        }
        else {
            return back()->with('failed', 'Oh! Notice did not deleted successfully');
        }
    }
}
