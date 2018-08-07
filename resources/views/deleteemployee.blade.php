@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <h1>Delete an Employee Profile</h1>
                
                @include ('layouts.navigation')

                <div class="row justify-content-center">

                    {!! Form::open(['route' => 'admin.employee.delete', 'method' => 'delete', 'onsubmit' => 'return confirm("are you sure ?")']) !!}
                        
                        <div class="form-group">
                            {{ Form::label('employee_id', 'Employee ID') }}
                            {{ Form::number('employee_id', '', ['class' => 'form-control', 'placeholder' => 'Employee ID']) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::submit('Delete Employee Profile', ['class' => 'btn btn-primary']) }}
                            {{ Form::reset('Reset', ['class' => 'btn btn-secondary']) }}

                        </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
