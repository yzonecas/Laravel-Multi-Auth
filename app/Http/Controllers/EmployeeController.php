<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\Controller;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        
        $this->middleware('auth:admin');
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        return view('employee');
    
    }
    
    public function showEmployeeForm()
    {
    
        return view('createemployee');
    
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [

            'employee_id' => 'required|numeric|unique:employees,employee_id',
            
            'name' => 'required',
            
            'email' => 'required|email|unique:employees,email',
            
            'password' => 'required',
            
            'designation' => 'required',
            
            'contact' => 'required'

        ]);



        $employee = Employee::create(request(['employee_id', 'name', 'email', 'password', 'designation', 'contact']));


        return redirect('/admin')->with('success', 'Employee profile has been added successfully');
    
    }

    public function selectEmployee()
    {
    
        return view('selectemployee');
    
    }

    public function showEmployeeEditForm(Request $request)
    {
        $employee = Employee::where('employee_id', $request->employee_id)->first();

        if ($employee)
        {

            return view('editemployee', compact('employee'));

        }
        return redirect()->back()->with('error', 'Employee ID is not valid');
        

    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'employee_id' => 'required|numeric',
            
            'name' => 'required',
            
            'email' => 'required|email',
            
            'password' => 'required',
            
            'designation' => 'required',
            
            'contact' => 'required'

        ]);   

        if ($validator->fails()) 
        {
        
            return view('selectemployee')->withErrors($validator);
        
        }   

        $employee = Employee::find($request->id);
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->password = $request->password;
        $employee->designation = $request->designation;
        $employee->contact = $request->contact;

        $employee->save();

        return redirect('/admin')->with('success', 'Employee has been updated successfully');    

    }

    public function showEmployeeDeleteForm()
    {
    
        return view('deleteemployee');
    
    }

    public function delete(Request $request)
    {

        $employee = Employee::where('employee_id', $request->employee_id)->first();

        if ($employee)
        {

            $employee->delete();

            return redirect('/admin')->with('success', 'Employee has been deleted successfully');

        }

        return redirect()->back()->with('error', 'Employee ID is not valid');

    }

}
