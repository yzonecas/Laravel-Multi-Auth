@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <h1>Employee Dashboard</h1>
                
                <div class="row justify-content-center">

                     <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">EmpID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Contact</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">{{ $user->employee_id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ '************' }}</td>
                                <td>{{ $user->designation}}</td>
                                <td>{{ $user->contact}}</td>
                            </tr>
                        
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
@endsection
