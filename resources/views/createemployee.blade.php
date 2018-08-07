@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Create a New Employee Profile</h1>

                @include ('layouts.navigation')

                <div class="row justify-content-center">

                    <form>
                    <form method="POST" action="{{ route('admin.employee.submit') }}" aria-label="{{ __('admin.employee.sumbmit') }}">
                        @csrf

                        <div class="form-group">
                            <label for="employee_id">Employee ID</label>
                            <input type="number" class="form-control" id="employee_id" placeholder="Employee ID" name="employee_id" value="{{ old('employee_id') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Employee Name" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Employee Email" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" placeholder="Employee Designation" name="designation" value="{{ old('designation') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" id="contact" placeholder="Employee Contact" name="contact" value="{{ old('contact') }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" formmethod="POST" formaction="{{ route('admin.employee.submit') }}" class="btn btn-primary">Create Employee Profile</button>

                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                      
                </div>
            </div>
        </div>
    </div>
@endsection
