<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FeaturedProject;
use App\Models\FeaturedProjectDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Session;

class FeaturedProjectContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function descriptio_index()
    {
        $descriptions = FeaturedProjectDescription::latest()->get();
        return view('backend.featured_project.description_index', compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function descriptio_create()
    {
        return view('backend.featured_project.descriptio_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function descriptio_store(Request $request)
    {
        //  dd($request);
         $this->validate($request, [
            'featured_project_descrption_en' => 'required',
        ]);
       
        $featured_pro_des = new FeaturedProjectDescription();
        $featured_pro_des->featured_project_descrption_en = $request->featured_project_descrption_en;

        if($request->featured_project_descrption_bn == ''){
            $featured_pro_des->featured_project_descrption_bn = $request->featured_project_descrption_en;
        }else{
            $featured_pro_des->featured_project_descrption_bn = $request->featured_project_descrption_bn;
        }

        $featured_pro_des->status = $request->status;
        $featured_pro_des->created_at = Carbon::now();
        $featured_pro_des->save();

        Session::flash('success', 'Featured Projects Description Inserted Successfully');
        return redirect()->route('project.description.index');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function descriptio_edit($id)
    {
        $description = FeaturedProjectDescription::find($id);
        return view('backend.featured_project.description_edit', compact('description'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function descriptio_update(Request $request, $id)
    {
        //  dd($request);
        $this->validate($request, [
            'featured_project_descrption_en' => 'required',
        ]);
       
        $featured_pro_des =  FeaturedProjectDescription::find($id);
        $featured_pro_des->featured_project_descrption_en = $request->featured_project_descrption_en;

        if($request->featured_project_descrption_bn == ''){
            $featured_pro_des->featured_project_descrption_bn = $request->featured_project_descrption_en;
        }else{
            $featured_pro_des->featured_project_descrption_bn = $request->featured_project_descrption_bn;
        }

        $featured_pro_des->status = $request->status;
        $featured_pro_des->updated_at = Carbon::now();
        $featured_pro_des->save();

        Session::flash('success', 'Featured Projects Description Update Successfully');
        return redirect()->route('project.description.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function descriptio_destroy($id)
    {
        $description = FeaturedProjectDescription::find($id);
        $description->delete();
        Session::flash('warning', 'Description Delete Successfully');
        return redirect()->back();

    }

    public function descriptio_active($id){

        $description = FeaturedProjectDescription::find($id);
        $description->status = 1;
        $description->save();

        Session::flash('success','Description Active Successfully.');
        return redirect()->back();
    }

    public function descriptio_inactive($id){
        $description = FeaturedProjectDescription::find($id);
        $description->status = 0;
        $description->save();

        Session::flash('success','Description Disabled Successfully.');
        return redirect()->back();
    }


    // =================================================
    // =================================================
    // =================================================
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = FeaturedProject::latest()->get();
        return view('backend.featured_project.project_indext', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.featured_project.project_create');
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
        $this->validate($request, [
            'title_en' => 'required',
            'sub_title_en' => 'required',
            'image' => 'required',
            'desccription_en' => 'required',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $project = new FeaturedProject();

        $project->title_en = $request->title_en;
        $project->sub_title_en = $request->sub_title_en;
        $project->desccription_en = $request->desccription_en;

        if($request->title_bn == ''){
            $project->title_bn = $request->title_en;
        }else{
            $project->title_bn = $request->title_bn;
        }

        if($request->sub_title_bn == ''){
            $project->sub_title_bn = $request->sub_title_en;
        }else{
            $project->sub_title_bn = $request->sub_title_bn;
        }

        if($request->desccription_bn == ''){
            $project->desccription_bn = $request->desccription_en;
        }else{
            $project->desccription_bn = $request->desccription_bn;
        }

        // slug image shop_profile
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,150)->save('upload/featured_porject/'.$name_gen);
        $featured_image = 'upload/featured_porject/'.$name_gen;

        $project->image = $featured_image;
        $project->status = $request->status;
        $project->slug = $slug;
        $project->created_at = Carbon::now();

        $project->save();

        Session::flash('success', 'Featured Project Inserted Successfully');
        return redirect()->route('project.index');
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
        $project = FeaturedProject::find($id);
        return view('backend.featured_project.project_edit', compact('project'));
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
        // dd($request);
        $this->validate($request, [
            'title_en' => 'required',
            'sub_title_en' => 'required',
            'desccription_en' => 'required',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $project = FeaturedProject::find($id);

        $project->title_en = $request->title_en;
        $project->sub_title_en = $request->sub_title_en;
        $project->desccription_en = $request->desccription_en;

        if($request->title_bn == ''){
            $project->title_bn = $request->title_en;
        }else{
            $project->title_bn = $request->title_bn;
        }
 
        if($request->sub_title_bn == ''){
            $project->sub_title_bn = $request->sub_title_en;
        }else{
            $project->sub_title_bn = $request->sub_title_bn;
        }

        if($request->desccription_bn == ''){
            $project->desccription_bn = $request->desccription_en;
        }else{
            $project->desccription_bn = $request->desccription_bn;
        }


        // Image Update
        if($request->hasfile('image')){
            try {
                if(file_exists($project->image)){
                    unlink($project->image);
                }
            } catch (Exception $e) {

            }
            
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(350,150)->save('upload/featured_porject/'.$name_gen);
            $featured_image = 'upload/featured_porject/'.$name_gen;
        }else{
            $featured_image = $project->image;
        }

        $project->image = $featured_image;
        $project->status = $request->status;
        $project->slug = $slug;
        $project->updated_at = Carbon::now();

        $project->save();

        Session::flash('success', 'Featured Project Update Successfully');
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = FeaturedProject::find($id);
        $project_image = $project->image;
        unlink($project_image);
        $project->delete();
        Session::flash('warning', 'project Delete Successfully');
        return redirect()->back();

    }

    public function active($id){

        $project = FeaturedProject::find($id);
        $project->status = 1;
        $project->save();

        Session::flash('success','project Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $project = FeaturedProject::find($id);
        $project->status = 0;
        $project->save();

        Session::flash('success','project Disabled Successfully.');
        return redirect()->back();
    }

}
