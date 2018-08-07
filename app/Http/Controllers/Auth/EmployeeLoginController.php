<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EmployeeLoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest');
	}

    public function showLoginForm()
    {
    	return view('auth.employee-login');
    }

    public function login(Request $request)
    {

    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	if (Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password])) {
    	
            return redirect()->intended(route('employee.dashboard'))->with('success', 'You have logged in successfully as an employee');
    	}
    	
    	return redirect()->back()->withInput($request->only('email'))->with('error', 'Please provide correct credentials');
    }
}
