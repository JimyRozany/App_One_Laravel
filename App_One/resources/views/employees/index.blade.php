@extends('../layout')
@section('content')
    <div >
        <div>
            <h2 class="text-center">Employees</h2>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            @if ($employees != null)
                <table class="table table-dark table-hover w-75">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Salary</th>
                            <th>Department</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>{{$employee->salary}}</td>
                            <td>{{$employee->department}}</td>
                            <td class="d-flex">
                                <a href="{{route('employees.edit',$employee->id)}}" class="mr-2 btn btn-warning mx-2">Edit</a>
                                <form action="{{route('employees.destroy',$employee->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Employees page is empty</p>
            @endif
            
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <a class="btn btn-primary" href="{{route('employees.create')}}">Create New Employee</a>
        </div>           
    </div>    
@endsection

@section('title','Employees')