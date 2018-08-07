@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Edit Employee Profile</h1>

                @include ('layouts.navigation')

                <div class="row justify-content-center">

                    {!! Form::open(['route' => 'admin.employee.update', 'method' => 'put']) !!}
                    {!! Form::model($employee, ['method' => 'PUT', 'route' => ['admin.employee.update', $employee->id]]) !!}
                        
                        <div class="form-group">
                            {{ Form::label('employee_id', 'Employee ID') }}
                            {{ Form::number('employee_id', old('employee_id'), ['class' => 'form-control', 'placeholder' => 'Employee ID', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::hidden('id', old('id'), ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Employee Name', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Employee Email', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('password', 'Password') }}
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Employee Password', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('designation', 'Designation') }}
                            {{ Form::text('designation', old('designation'), ['class' => 'form-control', 'placeholder' => 'Employee Designation', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('contact', 'Conact') }}
                            {{ Form::text('contact', old('contact'), ['class' => 'form-control', 'placeholder' => 'Employee Contact', 'required']) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::submit('Update Employee Profile', ['class' => 'btn btn-primary']) }}
                            {{ Form::reset('Reset', ['class' => 'btn btn-secondary']) }}

                        </div>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
@endsection
