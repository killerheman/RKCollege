<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Department::paginate(10);
        return view('admin.department',compact('datas'));
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
        $validate = $request->validate([
            'department_name'=>'required',
        ]);
        $pic_name = '';
        if ($request->hasFile('image')) {
            $dept_img = 'dept-' . time() . '-' . rand(0, 99) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/uploads/department/'), $dept_img);
            $pic_name = 'uploads/uploads/department/' . $dept_img;
        }
        $department = Department::create([
            'department_name'=>$request->department_name,
            'image'=>$pic_name
        ]);
        if ($department) 
            {
                return back()->with('success', 'Department Add successfully');
            }
            else {
                return back()->with('error', 'Oh! Department did not saved successfully');
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
        $edit = Department::find($id);
        $datas = Department::all();
        return view('admin.department',compact('edit','datas'));
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
        $pic_name = '';
       $data = Department::find($id);
       $exists_image = $data->image;
        
        if ($request->hasFile('image')) {
            $dept_img = 'dept-' . time() . '-' . rand(0, 99) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/uploads/department/'), $dept_img);
            $pic_name = 'uploads/uploads/department/' . $dept_img;
            if ($exists_image) {
                File::delete(public_path($exists_image));
            }
        }
        $data = Department::find($id);
        $department = $data->update([
            'department_name'=>$request->department_name,
            'image'=>$pic_name
        ]);
        if ($department) 
            {
                return redirect(route('admin.department.index'))->with('success', 'Department Updated successfully');
            }
            else {
                return back()->with('error', 'Oh! Department did not Update successfully');
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
        $delete = Department::find($id)->delete();
        if($delete){
            return back()->with('success', 'Department Deleted successfully');
        }
        else {
            return back()->with('error', 'Oh! Department did not Delete');
        }
    }
}
