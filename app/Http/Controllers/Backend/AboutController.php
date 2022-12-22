<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::latest()->get();
        return view('backend.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
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
            'about_title_en' => 'required|max:100|min:8',
            'about_image' => 'required',
            'about_description_en' => 'required',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->about_title_en)));

        $about = new About();
        $about->about_title_en = $request->about_title_en;
        $about->slug = $slug;
        
        if($request->about_title_bn == ''){
            $about->about_title_bn = $request->about_title_en;
        }else{
            $about->about_title_bn = $request->about_title_bn;
        }
        $about->about_description_en = $request->about_description_en;

        if($request->about_description_bn == ''){
            $about->about_description_bn = $request->about_description_en;
        }else{
            $about->about_description_bn = $request->about_description_bn;
        }

        // slug image shop_profile
        $image = $request->file('about_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,150)->save('upload/about/'.$name_gen);
        $about_img = 'upload/about/'.$name_gen;

        $about->about_image = $about_img;
        $about->status = $request->status;

        $about->save();

        Session::flash('success', 'Adout Inserted Successfully');
        return redirect()->route('about.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('backend.about.edit', compact('about'));
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
            'about_title_en' => 'required|max:100|min:8',
            'about_description_en' => 'required',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->about_title_en)));

        $about = About::find($id);
        $about->about_title_en = $request->about_title_en;
        $about->slug = $slug;
        
        if($request->about_title_bn == ''){
            $about->about_title_bn = $request->about_title_en;
        }else{
            $about->about_title_bn = $request->about_title_bn;
        }
        $about->about_description_en = $request->about_description_en;

        if($request->about_description_bn == ''){
            $about->about_description_bn = $request->about_description_en;
        }else{
            $about->about_description_bn = $request->about_description_bn;
        }


        // Image Update
        if($request->hasfile('about_image')){
            try {
                if(file_exists($about->about_image)){
                    unlink($about->about_image);
                }
            } catch (Exception $e) { }
            
            // image insert
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(350,150)->save('upload/about/'.$name_gen);
            $about_img = 'upload/about/'.$name_gen;
        }else{
            $about_img = $about->about_image;
        }

        $about->about_image = $about_img;
        $about->status = $request->status;

        $about->save();
        
        Session::flash('success', 'Adout item update Successfully');
        return redirect()->route('about.index');
    }


    public function active($id){

        $about = About::find($id);
        $about->status = 1;
        $about->save();

        Session::flash('success','about Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $about = About::find($id);
        $about->status = 0;
        $about->save();

        Session::flash('success','about Disabled Successfully.');
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $about_image = $about->about_image;
        unlink($about_image);
        $about->delete();
        Session::flash('warning', 'about item Delete Successfully');
        return redirect()->back();
    }

    // ======================
    // ======================
    // ======================

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function description_index()
    {
        $descriptions = AboutDescription::latest()->get();
        return view('backend.about.description_index', compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function description_create()
    {
        return view('backend.about.description_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function description_store(Request $request)
    {
        //  dd($request);
         $this->validate($request, [
            'about_descrption_en' => 'required',
        ]);
       
        $company_description = new AboutDescription();
        $company_description->about_descrption_en = $request->about_descrption_en;

        if($request->about_descrption_bn == ''){
            $company_description->about_descrption_bn = $request->about_descrption_en;
        }else{
            $company_description->about_descrption_bn = $request->about_descrption_bn;
        }

        $company_description->status = $request->status;
        $company_description->save();

        Session::flash('success', 'Company Description Inserted Successfully');
        return redirect()->route('about.description.index');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_edit($id)
    {
        $description = AboutDescription::find($id);
        return view('backend.about.description_edit', compact('description'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_update(Request $request, $id)
    {
        //  dd($request);
        $this->validate($request, [
            'about_descrption_en' => 'required',
        ]);
       
        $company_description =  AboutDescription::find($id);
        $company_description->about_descrption_en = $request->about_descrption_en;

        if($request->about_descrption_bn == ''){
            $company_description->about_descrption_bn = $request->about_descrption_en;
        }else{
            $company_description->about_descrption_bn = $request->about_descrption_bn;
        }

        $company_description->status = $request->status;
        $company_description->save();

        Session::flash('success', 'Company Description Update Successfully');
        return redirect()->route('about.description.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_destroy($id)
    {
        $description = AboutDescription::find($id);
        $description->delete();
        Session::flash('warning', 'Description Delete Successfully');
        return redirect()->back();

    }

    public function description_active($id){

        $description = AboutDescription::find($id);
        $description->status = 1;
        $description->save();

        Session::flash('success','Description Active Successfully.');
        return redirect()->back();
    }

    public function description_inactive($id){
        $description = AboutDescription::find($id);
        $description->status = 0;
        $description->save();

        Session::flash('success','Description Disabled Successfully.');
        return redirect()->back();
    }



}
