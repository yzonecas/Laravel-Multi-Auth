@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <h1>Select an Employee Profile</h1>

                @include ('layouts.navigation')

                <div class="row justify-content-center">

                    <div class="row justify-content-center">

                    {!! Form::open(['route' => 'admin.employee.edit', 'method' => 'post']) !!}
                        
                        <div class="form-group">
                            {{ Form::label('employee_id', 'Employee ID') }}
                            {{ Form::number('employee_id', old('employee_id'), ['class' => 'form-control', 'placeholder' => 'Employee ID', 'required']) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::submit('Select Employee Profile', ['class' => 'btn btn-primary']) }}
                        </div>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
@endsection
