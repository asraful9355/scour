<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Session;
use Image;
use Illuminate\Support\Carbon;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title_en'=>'required',
            'description_en'=>'required',
            'button_name_en'=>'required',
            'banner_image'=>'required'
        ]);

        if($request->hasfile('banner_image')){
            $image = $request->file('banner_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1920,1050)->save('upload/banner/'.$name_gen);
            $banner_image = 'upload/banner/'.$name_gen;
        }else{
            $banner_image = '';
        }

        $banner = new Banner();

        $banner->title_en = $request->title_en;
        if($request->title_bn == ''){
            $banner->title_bn = $request->title_en;
        }else{
            $banner->title_bn = $request->title_bn;
        }

        $banner->description_en = $request->description_en;
        if($request->description_bn == ''){
            $banner->description_bn = $request->description_en;
        }else{
            $banner->description_bn = $request->description_bn;
        }

        $banner->button_name_en = $request->button_name_en;
        if($request->button_name_bn == ''){
            $banner->button_name_bn = $request->button_name_en;
        }else{
            $banner->button_name_bn = $request->button_name_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $banner->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $banner->status = $request->status;

        $banner->banner_image = $banner_image;

        $banner->created_at = Carbon::now();

        $banner->save();

        Session::flash('success','Banner Inserted Successfully');
        return redirect()->route('banner.index');
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
        $banner = Banner::find($id);
        return view('backend.banner.edit',compact('banner'));
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

        $banner = Banner::find($id);

        if($request->hasfile('banner_image')){
            try {
                if(file_exists($banner->banner_image)){
                    unlink($banner->banner_image);
                }
            } catch (Exception $e) {

            }
            $image = $request->file('banner_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1920,1050)->save('upload/banner/'.$name_gen);
            $banner_image = 'upload/banner/'.$name_gen;
        }else{
            $banner_image = $banner->banner_image;
        }


        $banner->title_en = $request->title_en;
        if($request->title_bn == ''){
            $banner->title_bn = $request->title_en;
        }else{
            $banner->title_bn = $request->title_bn;
        }

        $banner->description_en = $request->description_en;
        if($request->description_bn == ''){
            $banner->description_bn = $request->description_en;
        }else{
            $banner->description_bn = $request->description_bn;
        }

        $banner->button_name_en = $request->button_name_en;
        if($request->button_name_bn == ''){
            $banner->button_name_bn = $request->button_name_en;
        }else{
            $banner->button_name_bn = $request->button_name_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $banner->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $banner->status = $request->status;

        $banner->banner_image = $banner_image;

        $banner->created_at = Carbon::now();

        $banner->save();

        Session::flash('success','Banner Updated Successfully');
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);

        try {
            if(file_exists($banner->banner_image)){
                unlink($banner->banner_image);
            }
        }catch (Exception $e) {

        }

        $banner->delete();

        Session::flash('success','Banner Parmanently Deleted Successfully.');
        return redirect()->back();
    }

     public function active($id){
        $banner = Banner::find($id);
        $banner->status = 1;
        $banner->save();

        Session::flash('success','Banner Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $banner = Banner::find($id);
        $banner->status = 0;
        $banner->save();

        Session::flash('success','Banner Disabled Successfully.');
        return redirect()->back();
    }
}
