<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Work;
use Image;
use Session;
use Illuminate\Support\Carbon;
class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return view('backend.work.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.work.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'title_en'=>'required',
            'description_en'=>'required',
            'category_id'=>'required',
            'work_image'=>'required'
        ]);


        if($request->hasfile('work_image')){
            $image = $request->file('work_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(350,380)->save('upload/work/'.$name_gen);
            $work_image = 'upload/work/'.$name_gen;
        }else{
            $work_image = '';
        }

        $work = new Work();

        $work->category_id = $request->category_id;

        $work->title_en = $request->title_en;
        if($request->title_bn == ''){
            $work->title_bn = $request->title_en;
        }else{
            $work->title_bn = $request->title_bn;
        }

        $work->description_en = $request->description_en;
        if($request->description_bn == ''){
            $work->description_bn = $request->description_en;
        }else{
            $work->description_bn = $request->description_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $work->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $work->status = $request->status;

        $work->work_image = $work_image;

        $work->created_at = Carbon::now();

        $work->save();

        Session::flash('success','work Inserted Successfully');
        return redirect()->route('work.index');
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
    {   $categories = Category::all();
        $work = Work::find($id);
        return view('backend.work.edit',compact('work','categories'));
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
        $work = Work::find($id);

        if($request->hasfile('work_image')){
            try {
                if(file_exists($work->work_image)){
                    unlink($work->work_image);
                }
            } catch (Exception $e) {

            }
            $image = $request->file('work_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(350,380)->save('upload/work/'.$name_gen);
            $work_image = 'upload/work/'.$name_gen;
        }else{
            $work_image = $work->work_image;
        }

        $work->title_en = $request->title_en;
        if($request->title_bn == ''){
            $work->title_bn = $request->title_en;
        }else{
            $work->title_bn = $request->title_bn;
        }

        $work->description_en = $request->description_en;
        if($request->description_bn == ''){
            $work->description_bn = $request->description_en;
        }else{
            $work->description_bn = $request->description_bn;
        }


        if($request->status == Null){
            $request->status = 0;
        }
        $work->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $work->status = $request->status;


        $work->category_id = $request->category_id;
        $work->work_image = $work_image;

        $work->created_at = Carbon::now();

        $work->save();

        Session::flash('success','work Updated Successfully');
        return redirect()->route('work.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);

        try {
            if(file_exists($work->work_image)){
                unlink($work->work_image);
            }
        }catch (Exception $e) {

        }

        $work->delete();

        Session::flash('success','Work Parmanently Deleted Successfully.');
        return redirect()->back();
    }

     public function active($id){
        $work = Work::find($id);
        $work->status = 1;
        $work->save();

        Session::flash('success','Work Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $work = Work::find($id);
        $work->status = 0;
        $work->save();

        Session::flash('success','Work Disabled Successfully.');
        return redirect()->back();
    }
}
