<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\SubDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SubDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = SubDepartment::paginate(10);
        $department = Department::all();
        return view('admin.subdepartment',compact('datas','department'));
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
            'department_id'=>'required',
            'subject_name'=>'required'
        ]);
        $pic_name = '';
        if ($request->hasFile('image')) {
            $dept_img = 'subdept-' . time() . '-' . rand(0, 99) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/uploads/subject-dept/'), $dept_img);
            $pic_name = 'uploads/uploads/subject-dept/' . $dept_img;
        }
        $department = SubDepartment::create([
            'department_id'=>$request->department_id,
            'subject_name'=>$request->subject_name,
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
        $edit = SubDepartment::find($id);
        $datas = SubDepartment::paginate(10);
        $department = Department::all();
        return view('admin.subdepartment',compact('edit','datas','department'));
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
        $data = SubDepartment::find($id);
        $exists_image = $data->image;
         
         if ($request->hasFile('image')) {
            $dept_img = 'subdept-' . time() . '-' . rand(0, 99) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/uploads/subject-dept/'), $dept_img);
            $pic_name = 'uploads/uploads/subject-dept/' . $dept_img;
             if ($exists_image) {
                 File::delete(public_path($exists_image));
             }
         }
         $data = SubDepartment::find($id);
         $subdepartment = $data->update([
            'department_id'=>$request->department_id,
            'subject_name'=>$request->subject_name,
            'image'=>$pic_name
         ]);
         if ($subdepartment) 
             {
                 return redirect(route('admin.subdepartment.index'))->with('success', 'Department Updated successfully');
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
        $delete = SubDepartment::find($id)->delete();
        if($delete){
            return back()->with('success', 'Department Deleted successfully');
        }
        else {
            return back()->with('error', 'Oh! Department did not Delete');
        }
    }
}
