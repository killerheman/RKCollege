<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\SubDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subdepartment = SubDepartment::all();
        $department = Department::all();
        $faculties = Faculty::paginate(10);
        return view('admin.faculty',compact('subdepartment','department','faculties'));
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
            'subject_id'=>'required',
            'name'=>'required',
            'designation'=>'required',
        ]);
        $pic_name = '';
        if ($request->hasFile('image')) {
            $dept_img = 'faculty-' . time() . '-' . rand(0, 99) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/uploads/faculty/'), $dept_img);
            $pic_name = 'uploads/uploads/faculty/' . $dept_img;
        }
        $faculty = Faculty::create([
            'department_id'=>$request->department_id,
            'subject_id'=>$request->subject_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'status'=>$request->status,
            'designation'=>$request->designation,
            'image'=>$pic_name
        ]);
        if ($faculty) 
            {
                return back()->with('success', 'Faculty Add successfully');
            }
            else {
                return back()->with('error', 'Oh! Faculty did not saved successfully');
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
        $edit = Faculty::find($id);
        $faculty = Faculty::paginate(10);
        $department = Department::all();
        $subdepartment = SubDepartment::all();
        return view('admin.faculty',compact('edit','faculty','department','subdepartment'));
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
        $data = Faculty::find($id);
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
         $faculty = $data->update([
            'department_id'=>$request->department_id,
            'subject_id'=>$request->subject_id,
            'name'=>$request->name,
            'image'=>$pic_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'designation'=>$request->designation,
            'status'=>$request->status,
         ]);
         if ($faculty) 
             {
                 return redirect(route('admin.faculty.index'))->with('success', 'Faculty Updated successfully');
             }
             else {
                 return back()->with('error', 'Oh! Faculty did not Update successfully');
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
        $delete = Faculty::find($id)->delete();
        if($delete){
            return back()->with('success', 'Faculty Deleted successfully');
        }
        else {
            return back()->with('error', 'Oh! Faculty did not Delete');
        }
    }
    public function subDepartment($id){
        $datas = SubDepartment::where('department_id',$id)->get();
       $html="";
       foreach($datas as $dt){
        $html.='<option value="'.$dt->department_id.'">'.$dt->subject_name.'<option>';
       }                
       return $html;
       
    }
}
