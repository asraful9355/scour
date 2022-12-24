<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceDescription;
use Illuminate\Http\Request;
use Image;
use Session;
class ServiceController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
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
            'image' => 'required',
            'description_en' => 'required',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $service = new Service();
        $service->title_en = $request->title_en;
        $service->slug = $slug;
        
        if($request->title_bn == ''){
            $service->title_bn = $request->title_en;
        }else{
            $service->title_bn = $request->title_bn;
        }
        $service->description_en = $request->description_en;

        if($request->description_bn == ''){
            $service->description_bn = $request->description_en;
        }else{
            $service->description_bn = $request->description_bn;
        }

        // insert image
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,150)->save('upload/service/'.$name_gen);
        $service_img = 'upload/service/'.$name_gen;

        $service->image = $service_img;
        $service->status = $request->status;

        $service->save();

        Session::flash('success', 'Service Inserted Successfully');
        return redirect()->route('services.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.services.edit', compact('service'));
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
            'description_en' => 'required',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $service = Service::find($id);
        $service->title_en = $request->title_en;
        $service->slug = $slug;
        
        if($request->title_bn == ''){
            $service->title_bn = $request->title_en;
        }else{
            $service->title_bn = $request->title_bn;
        }
        $service->description_en = $request->description_en;

        if($request->description_bn == ''){
            $service->description_bn = $request->description_en;
        }else{
            $service->description_bn = $request->description_bn;
        }

        // Image Update
        if($request->hasfile('image')){
            try {
                if(file_exists($service->image)){
                    unlink($service->image);
                }
            } catch (Exception $e) { }
            
            // insert image
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(350,150)->save('upload/service/'.$name_gen);
            $service_img = 'upload/service/'.$name_gen;
        }else{
            $service_img = $service->image;
        }

        $service->image = $service_img;
        $service->status = $request->status;

        $service->save();
        
        Session::flash('success', 'Service item update Successfully');
        return redirect()->route('services.index');
    }


    public function active($id){

        $service = Service::find($id);
        $service->status = 1;
        $service->save();

        Session::flash('success','service Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $service = Service::find($id);
        $service->status = 0;
        $service->save();

        Session::flash('success','service Disabled Successfully.');
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
        $service = Service::find($id);
        $service_image = $service->image;
        unlink($service_image);
        $service->delete();
        Session::flash('warning', 'service item Delete Successfully');
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
        $descriptions = ServiceDescription::latest()->get();
        return view('backend.services.description_index', compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function description_create()
    {
        return view('backend.services.description_create');
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
            'service_descrption_en' => 'required',
            'image' => 'required',
        ]);
       
        $service_description = new ServiceDescription();
        $service_description->service_descrption_en = $request->service_descrption_en;

        if($request->service_descrption_bn == ''){
            $service_description->service_descrption_bn = $request->service_descrption_en;
        }else{
            $service_description->service_descrption_bn = $request->service_descrption_bn;
        }

        // insert image 
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,450)->save('upload/service/'.$name_gen);
        $service_img = 'upload/service/'.$name_gen;

        $service_description->image = $service_img;
        $service_description->status = $request->status;
        $service_description->save();

        Session::flash('success', 'Service Description Inserted Successfully');
        return redirect()->route('services.description.index');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_edit($id)
    {
        $description = ServiceDescription::find($id);
        return view('backend.services.description_edit', compact('description'));
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
            'service_descrption_en' => 'required',
        ]);
       
        $service_description = ServiceDescription::find($id);
        $service_description->service_descrption_en = $request->service_descrption_en;

        if($request->service_descrption_bn == ''){
            $service_description->service_descrption_bn = $request->service_descrption_en;
        }else{
            $service_description->service_descrption_bn = $request->service_descrption_bn;
        }

        // Image Update
        if($request->hasfile('image')){
            try {
                if(file_exists($service_description->image)){
                    unlink($service_description->image);
                }
            } catch (Exception $e) { }
            
            // insert image 
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1200,450)->save('upload/service/'.$name_gen);
            $service_img = 'upload/service/'.$name_gen;
        }else{
            $service_img = $service_description->image;
        }

        

        $service_description->image = $service_img;
        $service_description->status = $request->status;
        $service_description->save();

        Session::flash('success', 'Services Description Update Successfully');
        return redirect()->route('services.description.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_destroy($id)
    {
        $description = ServiceDescription::find($id);
        $description_image = $description->image;
        unlink($description_image);
        $description->delete();
        Session::flash('warning', 'Description Delete Successfully');
        return redirect()->back();

    }

    public function description_active($id){

        $description = ServiceDescription::find($id);
        $description->status = 1;
        $description->save();

        Session::flash('success','Description Active Successfully.');
        return redirect()->back();
    }

    public function description_inactive($id){
        $description = ServiceDescription::find($id);
        $description->status = 0;
        $description->save();

        Session::flash('success','Description Disabled Successfully.');
        return redirect()->back();
    }
    


}
