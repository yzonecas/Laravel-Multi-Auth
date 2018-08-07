<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:employee');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($user = Auth::guard('employee')->User())
        {

            return view('employee', compact('user'))->with('message', 'You can view your information');

        }
        return back()->with('message', 'You are not authorized to see the view');
    }
}   
