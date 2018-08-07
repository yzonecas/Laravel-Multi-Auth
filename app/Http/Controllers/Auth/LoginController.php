<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
    
    }

    public function login(Request $request)
    {

        $this->validate($request, [

            'email' => 'required|email',
            
            'password' => 'required'
        
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    
            return redirect()->route('admin.dashboard')->with('success', 'You are logged in as an admin');
        }
        
        elseif (Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    
            return redirect()->route('employee.dashboard')->with('success', 'You are logged in as an employee');
        }
        
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'Please provide correct credentials');
    
    }

}
