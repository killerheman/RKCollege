<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Error;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->paginate(20);
        return view('admin.banner.banner', compact('banners'));
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
            'banner'=>'nullable',
            'title1'=>'required',
            'title2'=>'required',
        ]);
        if($request->hasFile('banner')){
            $upic='banner-'.time().'-'.rand(0,99).'.'.$request->banner->extension();
            $request->banner->move(public_path('upload/banner/'),$upic);
            $banner = 'upload/banner/'.$upic;
        }

       $data= Banner::create([
           'title2' => $request->title2,
           'title1' => $request->title1,
           'link' => $request->link ?? '',
           'banner' => $banner,
        ]);
        if($data){
        return redirect()->back()->with('success','New Banner added successfully.');
        }
        else{
            return redirect()->back()->with('error','Banner not added');
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
        $decryptid=Crypt::decrypt($id);
        $editbanner = Banner::find($decryptid);
        $banners = Banner::orderBy('id', 'desc')->paginate(20);
        //  $banner = Banner::where('criteria_id', $editbanner->criteria_id)->get();
        return view('admin.banner.banner', compact('editbanner','banners'));
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
            'banner'=>'nullable',
            'title1'=>'required',
            'title2'=>'required',
        ]);
        if($request->hasFile('banner')){
            $upic='banner-'.time().'-'.rand(0,99).'.'.$request->banner->extension();
            $request->banner->move(public_path('upload/banner/'),$upic);
            $banner = 'upload/banner/'.$upic;
            $data= Banner::find($id)->update(['banner' => $banner]);
        }
        $data= Banner::find($id)->update([
           'title2' => $request->title2,
           'title1' => $request->title1,
           'link' => $request->link ?? '',

        ]);
        if($data){
        return redirect()->back()->with('success','Banner Updated successfully.');
        }
        else{
            return redirect()->back()->with('error','Banner not Updated');
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
                $res=Banner::find($id)->delete();
                if($res)
                {
                    session()->flash('success','Banner deleted ducessfully');
                }
                else
                {
                    session()->flash('error','Banner not deleted ');
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
