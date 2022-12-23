<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\TeamDescription;
use Illuminate\Http\Request;
use Image;
use Session;

class TeamController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::latest()->get();
        return view('backend.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
            'title_en' => 'required|max:100|min:1',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name_en)));

        $team = new Team();
        $team->name_en = $request->name_en;
        $team->slug = $slug;
        
        if($request->name_bn == ''){
            $team->name_bn = $request->name_en;
        }else{
            $team->name_bn = $request->name_bn;
        }
        $team->title_en = $request->title_en;

        if($request->title_bn == ''){
            $team->title_bn = $request->title_en;
        }else{
            $team->title_bn = $request->title_bn;
        }

        // slug image shop_profile
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,380)->save('upload/team/'.$name_gen);
        $team_img = 'upload/team/'.$name_gen;

        $team->image = $team_img;
        $team->facebook_url = $request->facebook_url;
        $team->twitter_url = $request->twitter_url;
        $team->behance_url = $request->behance_url;
        $team->envelope_url = $request->envelope_url;

        if($request->status == Null){
            $request->status = 0;
        }
        $team->status = $request->status;

        $team->save();

        Session::flash('success', 'Team Inserted Successfully');
        return redirect()->route('team.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('backend.team.edit', compact('team'));
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
            'title_en' => 'required|max:100|min:1',
        ]);

        // slug insert   
        $slug  = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name_en)));

        $team = Team::find($id);
        $team->name_en = $request->name_en;
        $team->slug = $slug;
        
        if($request->name_bn == ''){
            $team->name_bn = $request->name_en;
        }else{
            $team->name_bn = $request->name_bn;
        }
        $team->title_en = $request->title_en;

        if($request->title_bn == ''){
            $team->title_bn = $request->title_en;
        }else{
            $team->title_bn = $request->title_bn;
        }
        // Image Update
        if($request->hasfile('image')){
            try {
                if(file_exists($team->image)){
                    unlink($team->image);
                }
            } catch (Exception $e) { }
            
            // image insert
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(350,380)->save('upload/team/'.$name_gen);
            $team_img = 'upload/team/'.$name_gen;
        }else{
            $team_img = $team->image;
        }

        $team->image = $team_img;
        $team->facebook_url = $request->facebook_url;
        $team->twitter_url = $request->twitter_url;
        $team->behance_url = $request->behance_url;
        $team->envelope_url = $request->envelope_url;

        if($request->status == Null){
            $request->status = 0;
        }
        $team->status = $request->status;

        $team->save();
        
        Session::flash('success', 'Successfully update');
        return redirect()->route('team.index');
    }


    public function active($id){

        $team = Team::find($id);
        $team->status = 1;
        $team->save();

        Session::flash('success','team Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $team = Team::find($id);
        $team->status = 0;
        $team->save();

        Session::flash('success','team Disabled Successfully.');
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
        $team = Team::find($id);
        $team_image = $team->image;
        unlink($team_image);
        $team->delete();
        Session::flash('warning', 'Successfully Delete');
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
        $descriptions = TeamDescription::latest()->get();
        return view('backend.team.description_index', compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function description_create()
    {
        return view('backend.team.description_create');
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
            'team_descrption_en' => 'required',
        ]);
       
        $team_description = new TeamDescription();
        $team_description->team_descrption_en = $request->team_descrption_en;

        if($request->team_descrption_bn == ''){
            $team_description->team_descrption_bn = $request->team_descrption_en;
        }else{
            $team_description->team_descrption_bn = $request->team_descrption_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $team_description->status = $request->status;
        $team_description->save();

        Session::flash('success', 'Description Inserted Successfully');
        return redirect()->route('team.description.index');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_edit($id)
    {
        $description = TeamDescription::find($id);
        return view('backend.team.description_edit', compact('description'));
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
            'team_descrption_en' => 'required',
        ]);
       
        $team_description = TeamDescription::find($id);
        $team_description->team_descrption_en = $request->team_descrption_en;

        if($request->team_descrption_bn == ''){
            $team_description->team_descrption_bn = $request->team_descrption_en;
        }else{
            $team_description->team_descrption_bn = $request->team_descrption_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $team_description->status = $request->status;
        $team_description->save();
        Session::flash('success', 'Description Update Successfully');
        return redirect()->route('team.description.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function description_destroy($id)
    {
        $description = TeamDescription::find($id);
        $description->delete();
        Session::flash('warning', 'Description Delete Successfully');
        return redirect()->back();

    }

    public function description_active($id){

        $description = TeamDescription::find($id);
        $description->status = 1;
        $description->save();

        Session::flash('success','Description Active Successfully.');
        return redirect()->back();
    }

    public function description_inactive($id){
        $description = TeamDescription::find($id);
        $description->status = 0;
        $description->save();

        Session::flash('success','Description Disabled Successfully.');
        return redirect()->back();
    }
    

}
