<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $settings = Setting::find(1);
        return view('backend.setting.index', compact('settings'));
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // dd($request->types);

        $setting = Setting::find($id);
        

        //Setting Logo Update
        if ($request->file('site_favicon')) {
            try {
                if(file_exists($setting->site_favicon)){
                    unlink($setting->site_favicon);
                }
            } catch (Exception $e) {
                
            }
            // insert image
            $image = $request->file('site_favicon');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(16,16)->save('upload/setting/'.$name_gen);
            $setting_site_favicon = 'upload/setting/'.$name_gen;
        }else{
            $setting_site_favicon = $setting->site_favicon;
        }

        //Setting Logo Update
        if ($request->file('site_logo')) {
            try {
                if(file_exists($setting->site_logo)){
                    unlink($setting->site_logo);
                }
            } catch (Exception $e) {
                
            }
            // insert image
            $image = $request->file('site_logo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(137,42)->save('upload/setting/'.$name_gen);
            $setting_site_logo = 'upload/setting/'.$name_gen;
        }else{
            $setting_site_logo = $setting->site_logo;
        }

        //Setting Logo Update
        if ($request->file('site_footer_logo')) {
            try {
                if(file_exists($setting->site_footer_logo)){
                    unlink($setting->site_footer_logo);
                }
            } catch (Exception $e) {
                
            }
            // insert image
            $image = $request->file('site_footer_logo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(137,42)->save('upload/setting/'.$name_gen);
            $setting_site_footer_logo = 'upload/setting/'.$name_gen;
        }else{
            $setting_site_footer_logo = $setting->site_footer_logo;
        }

        Setting::findOrFail($id)->update([
            'site_name' => $request->site_name,
            'phone' => $request->phone,
            'support_email' => $request->support_email,
            'email' => $request->email,
            'business_address' => $request->business_address,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'linkedin_url' => $request->linkedin_url,
            'youtube_url' => $request->youtube_url,
            'instagram_url' => $request->instagram_url,
            'pinterest_url' => $request->phone,

            'site_favicon' => $setting_site_favicon,
            'site_logo' => $setting_site_logo,
            'site_footer_logo' => $setting_site_footer_logo,

            'updated_at' => Carbon::now(),
        ]);

        Session::flash('success','Setting Updated Successfully');
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
        //
    }
}