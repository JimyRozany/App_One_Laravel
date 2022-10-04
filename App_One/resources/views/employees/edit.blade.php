@extends('../layout')

@section('content')
    
    <div class="container__form">
        <div class="wrap">
            <h2>Edit info</h2>
            <form action="{{route('employees.update',$employee->id)}}" method="POST">
                @csrf
                @method('PUT') {{-- this method from laravel for converting from POST to PUT --}}
                <div class="form-group ">
                    <label for="Employee_name">Employee Name</label>
                    <input id="Employee_name" name="Employee_name" value="{{$employee->name}}" type="text" class="form-control">
                    @error('Employee_name')
                        <div class="text-danger"> 
                           <small>Name is required</small>
                        </div>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="Employee_email">Employee Email</label>
                    <input id="Employee_email" name="Employee_email"  value="{{$employee->email}}" class="form-control" type="email">
                    @error('Employee_email')
                        <div class="text-danger"> 
                            <small>Email is required</small>
                        </div>
                    @enderror
                </div>
                            
                <div class="form-group ">
                    <label for="Employee_phone">Employee Phone</label>
                    <input id="Employee_phone" name="Employee_phone" value="{{$employee->phone}}" type="text" class="form-control">
                    @error('Employee_phone')
                        <div class="text-danger"> 
                            <small>Phone is required</small>
                        </div>
                    @enderror
                </div>
                
                <div class="form-group ">
                    <label for="Employee_salary">Employee Salary</label>
                    <input id="Employee_salary" name="Employee_salary" value="{{$employee->salary}}" type="text" class="form-control">
                    @error('Employee_salary')
                        <div class="text-danger"> 
                            <small>Salary is required</small>
                        </div>
                    @enderror
                </div>
                
                <div class="form-group ">
                    <select name="Employee_department" id="Employee_department" class="form-control my-2">
                        <option value="">Select Department</option>
                        <option value="IT" {{$employee->department == 'IT' ? 'selected': '' }}>Information Tech</option>
                        <option value="CS" {{$employee->department == 'CS' ? 'selected': '' }}>Computer Scinec</option>
                    </select>
                    @error('Employee_department')
                    <div class="text-danger"> 
                        <small>Department is required</small>
                    </div>
                @enderror
                </div>
                <div class="buttons">
                    <input type="submit" value="Save" class="btn btn-primary">
                    <a href="{{route('employees.index')}}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('title','Create')