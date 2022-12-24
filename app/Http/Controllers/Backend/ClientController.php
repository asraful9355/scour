<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientDescription;
use Illuminate\Http\Request;
use Image;
use Session;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function description_index()
    {
        $descriptions = ClientDescription::latest()->get();
        return view('backend.client.description_index', compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function description_create()
    {
        return view('backend.client.description_create');
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
            'client_descrption_en' => 'required',
        ]);
       
        $client_description = new ClientDescription();
        $client_description->client_descrption_en = $request->client_descrption_en;

        if($request->client_descrption_bn == ''){
            $client_description->client_descrption_bn = $request->client_descrption_en;
        }else{
            $client_description->client_descrption_bn = $request->client_descrption_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $client_description->status = $request->status;
        $client_description->save();

        Session::flash('success', 'Description Inserted Successfully');
        return redirect()->route('client.description.index');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_edit($id)
    {
        $description = ClientDescription::find($id);
        return view('backend.client.description_edit', compact('description'));
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
            'client_descrption_en' => 'required',
        ]);
       
        $client_description = ClientDescription::find($id);
        $client_description->client_descrption_en = $request->client_descrption_en;

        if($request->client_descrption_bn == ''){
            $client_description->client_descrption_bn = $request->client_descrption_en;
        }else{
            $client_description->client_descrption_bn = $request->client_descrption_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $client_description->status = $request->status;
        $client_description->save();

        Session::flash('success', 'Description Update Successfully');
        return redirect()->route('client.description.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_destroy($id)
    {
        $description = ClientDescription::find($id);
        $description->delete();
        Session::flash('warning', 'Description Delete Successfully');
        return redirect()->back();

    }

    public function description_active($id){

        $description = ClientDescription::find($id);
        $description->status = 1;
        $description->save();

        Session::flash('success','Description Active Successfully.');
        return redirect()->back();
    }

    public function description_inactive($id){
        $description = ClientDescription::find($id);
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
        $clients = Client::latest()->get();
        return view('backend.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.client.create');
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
            'name_en' => 'required|max:100|min:1',
            'image' => 'required',
            'description_en' => 'required',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name_en)));

        $client = new Client();

        $client->name_en = $request->name_en;
        $client->description_en = $request->description_en;

        if($request->name_bn == ''){
            $client->name_bn = $request->name_en;
        }else{
            $client->name_bn = $request->name_bn;
        }


        if($request->description_bn == ''){
            $client->description_bn = $request->description_en;
        }else{
            $client->description_bn = $request->description_bn;
        }

        // inser image 
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(70,70)->save('upload/client/'.$name_gen);
        $client_image = 'upload/client/'.$name_gen;

        $client->image = $client_image;

        if($request->status == Null){
            $request->status = 0;
        }
        $client->status = $request->status;
        $client->slug = $slug;

        $client->save();

        Session::flash('success', 'Client Inserted Successfully');
        return redirect()->route('client.index');
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
        $client = Client::find($id);
        return view('backend.client.edit', compact('client'));
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
        'name_en' => 'required|max:100|min:1',
        'description_en' => 'required',
    ]);

    // slug insert   
    $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name_en)));

    $client = Client::find($id);

    $client->name_en = $request->name_en;
    $client->description_en = $request->description_en;

    if($request->name_bn == ''){
        $client->name_bn = $request->name_en;
    }else{
        $client->name_bn = $request->name_bn;
    }


    if($request->description_bn == ''){
        $client->description_bn = $request->description_en;
    }else{
        $client->description_bn = $request->description_bn;
    }


        // Image Update
        if($request->hasfile('image')){
            try {
                if(file_exists($client->image)){
                    unlink($client->image);
                }
            } catch (Exception $e) {

            }
            
            // inser image 
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(70,70)->save('upload/client/'.$name_gen);
            $client_image = 'upload/client/'.$name_gen;
        }else{
            $client_image = $client->image;
        }

        $client->image = $client_image;

        if($request->status == Null){
            $request->status = 0;
        }
        $client->status = $request->status;
        $client->slug = $slug;

        $client->save();

        Session::flash('success', 'Successfully Update');
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client_image = $client->image;
        unlink($client_image);
        $client->delete();
        Session::flash('warning', 'client Delete Successfully');
        return redirect()->back();

    }

    public function active($id){

        $client = Client::find($id);
        $client->status = 1;
        $client->save();

        Session::flash('success','Client Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $client = Client::find($id);
        $client->status = 0;
        $client->save();

        Session::flash('success','Client Disabled Successfully.');
        return redirect()->back();
    }
}
