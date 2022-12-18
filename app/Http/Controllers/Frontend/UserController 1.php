<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $users = User::find($id);
        return view('backend.profile.admin.admin_profile_view', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminProfileEdit(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request, $id)
    {

           $users = User::find($id);

        if ($users->email == $request->email) {
            if ($request->hasfile('user_image')) {
                $user_image = $request->user_image;
                $user_image_new_name = time().$user_image->getClientOriginalName();
                $user_image->move('upload/user', $user_image_new_name);
                $file = $users->user_image;
                if ($file) {
                    unlink($users->user_image);
                }
                $users->user_image = 'upload/user/'.$user_image_new_name;
            }
            $users->name = $request->name;
            $users->phone = $request->phone;
            $users->facebook = $request->facebook;
            $users->twitter = $request->twitter;
            $users->linkedin = $request->linkedin;
            $users->whatsapp = $request->whatsapp;
            $users->address = $request->address;
            $users->about_us = $request->about_us;
            $users->website = $request->website;
            $users->save();
        }
          $users->email   =  $request->email;
          $users->save();
        Session::flash('success', 'Profile Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ChangePassword()
    {
        return view('backend.profile.admin.password_change');
    }
    public function UserPasswordUpdate(Request $request){


        $hashedPassword = User::find(1)->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
         $admin = User::find(1);
         $admin->password = Hash::make($request->password);
         $admin->save();
           Auth::guard('web')->logout();
         return redirect()->route('logout');
         }else{
            Session::flash('warning', 'Password Does Not Match');
            return redirect()->back();
        }





     }
}
