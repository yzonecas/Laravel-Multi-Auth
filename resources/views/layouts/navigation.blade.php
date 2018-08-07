<div class="row justify-content-center">
    <div class="btn-group" role="group" aria-label="Basic example">
        <input type="button" class="btn btn-outline-primary" value="Home" onclick="location.href = '{{ route('admin.dashboard') }}';">
        <input type="button" class="btn btn-outline-primary" value="Create New Employee Profile" onclick="location.href = '{{ route('admin.employee.create') }}';">
        <input type="button" class="btn btn-outline-primary" value="Update Employee Profile" onclick="location.href = '{{ route('admin.employee.select') }}';">
        <input type="button" class="btn btn-outline-primary" value="Delete Employee Profile" onclick="location.href = '{{ route('admin.employee.selectfordelete') }}';">
    </div>
</div>