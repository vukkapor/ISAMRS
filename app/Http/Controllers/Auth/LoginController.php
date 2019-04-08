<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated($request, $user)
    {
        if($user->hasRole('ROLE_ADMIN')) 
        {
            return redirect('/admin/dashboard');
        } 
        elseif($user->hasRole('ROLE_RENTACAR')) 
        {
            return redirect('/rentacar/dashboard');   
        } 
        elseif($user->hasRole('ROLE_HOTEL'))
        {
            return redirect('/hotel/dashboard');   
        }
        elseif($user->hasRole('ROLE_AVIO')) 
        {
            return redirect('/aviocompany/dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
