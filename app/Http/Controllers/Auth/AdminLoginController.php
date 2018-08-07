<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{ 
	public function __construct()
	{
		$this->middleware('guest');
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {

    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    
    		return redirect()->intended(route('admin.dashboard'))->with('success', 'You have logged in successfully as an admin');
    	}
    	
    	return redirect()->back()->withInput($request->only('email'))->with('error', 'Please provide correct credentials');
    }
}
