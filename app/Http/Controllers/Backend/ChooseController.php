<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\choose;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Carbon;
class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chooses = Choose::all();
        return view('backend.choose_us.choose_about_view',compact('chooses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.choose_us.choose_about_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title_en' => 'required',
            'description_en' => 'required',
            'icon_url' => 'required',
        ]);

        // slug insert
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $choose = new Choose();

        $choose->title_en = $request->title_en;
        if($request->title_bn == ''){
            $choose->title_bn = $request->title_en;
        }else{
            $choose->title_bn = $request->title_bn;
        }

        $choose->description_en = $request->description_en;
        if($request->description_bn == ''){
            $choose->description_bn = $request->description_en;
        }else{
            $choose->description_bn = $request->description_bn;
        }

        $choose->status = $request->status;
        $choose->slug = $slug;
        $choose->icon_url = $request->icon_url;
        $choose->created_at = Carbon::now();

        $choose->save();

        Session::flash('success', 'Choose About Inserted Successfully');
        return redirect()->route('choose_about.index');
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
        $choose = Choose::find($id);
        return view('backend.choose_us.choose_about_edit',compact('choose'));
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
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));

        $choose = Choose::find($id);

        $choose->title_en = $request->title_en;
        if($request->title_bn == ''){
            $choose->title_bn = $request->title_en;
        }else{
            $choose->title_bn = $request->title_bn;
        }

        $choose->description_en = $request->description_en;
        if($request->description_bn == ''){
            $choose->description_bn = $request->description_en;
        }else{
            $choose->description_bn = $request->description_bn;
        }

        $choose->status = $request->status;
        $choose->slug = $slug;
        $choose->icon_url = $request->icon_url;
        $choose->created_at = Carbon::now();

        $choose->save();

        Session::flash('success', 'Choose About Updated Successfully');
        return redirect()->route('choose_about.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $choose = Choose::find($id);

        $choose->delete();

        Session::flash('success','Choose About Deleted Successfully.');
        return redirect()->back();
    }

     public function active($id){
        $choose = Choose::find($id);
        $choose->status = 1;
        $choose->save();

        Session::flash('success','Choose About Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $choose = Choose::find($id);
        $choose->status = 0;
        $choose->save();

        Session::flash('success','Choose About Disabled Successfully.');
        return redirect()->back();
    }
}
