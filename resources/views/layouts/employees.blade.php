<table class="table">
    <thead>
        <tr>
        <th scope="col">EmpID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Designation</th>
        <th scope="col">Contact</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)

            <tr>
                <th scope="row">{{ $employee->employee_id }}</th>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->designation}}</td>
                <td>{{ $employee->contact}}</td>
            </tr>

        @endforeach
    </tbody>
</table>
