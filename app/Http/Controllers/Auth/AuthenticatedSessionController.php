<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $this->validate($request,[
            'email' =>'required',
            'password' =>'required'
        ]);

        $check = $request->all();
        // dd($check);
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password'=> $check['password'] ])){

            $request->authenticate();
            $request->session()->regenerate();

            $notification = array(
                'message' => 'Admin Login Successfully',
                'alert-type' => 'success'
            );


            $url = '';
            if ($request->user()->role === 'admin') {
                $url = 'admin/dashboard';
            }elseif ($request->user()->role === 'user') {
                $url = '/dashboard';
            }

            return redirect()->intended($url)->with($notification);

        }else{
            $notification = array(
                'message' => 'Invaild Email Or Password.', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }


    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();


        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logout Successfully.', 
            'alert-type' => 'success'
        );


        return redirect('/login')->with($notification);

    }
}
