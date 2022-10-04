@extends('../layout')

@section('content')

    <div class="container__form">
        <div class="wrap">
            <h3>Create new Employee</h3>
            <form action="{{route('employees.store')}}" method="POST">
                @csrf
                <div class="form-group ">
                    <label for="Employee_name">Employee Name</label>
                    <input id="Employee_name" name="Employee_name" value="{{old('Employee_name')}}" type="text" class="form-control">
                    @error('Employee_name')
                        <div class="text-danger"> 
                            <small>Name is required</small>
                        </div>
                    @enderror
                </div>
    
                <div class="form-group ">
                    <label for="Employee_email">Employee Email</label>
                    <input id="Employee_email" name="Employee_email"  value="{{old('Employee_email')}}" class="form-control" type="email">
                    @error('Employee_email')
                        <div class="text-danger"> 
                            <small>Email is required</small>
                        </div>
                    @enderror
                </div>
                            
                <div class="form-group ">
                    <label for="Employee_phone">Employee Phone</label>
                    <input id="Employee_phone" name="Employee_phone" value="{{old('Employee_phone')}}" type="text" class="form-control">
                    @error('Employee_phone')
                        <div class="text-danger"> 
                            <small>Phone is required</small>
                        </div>
                    @enderror
                </div>
                
                <div class="form-group ">
                    <label for="Employee_salary">Employee Salary</label>
                    <input id="Employee_salary" name="Employee_salary" value="{{old('Employee_salary')}}" type="text" class="form-control">
                    @error('Employee_salary')
                        <div class="text-danger"> 
                            <small>Salary is required</small>
                        </div>
                    @enderror
                </div>
                
                <div class="form-group  my-2">
                    <select name="Employee_department" id="Employee_department" class="form-select form-select-sm">
                        <option value="">Select Department</option>
                        <option value="IT">Information Tech</option>
                        <option value="CS">Computer Scinec</option>
                    </select>
                    @error('Employee_department')
                        <div class="text-danger"> 
                            <small>Department is required</small>
                        </div>
                    @enderror
                </div>
                <div class="buttons">
                    <input type="submit" value="Create" class="btn btn-primary">
                    <a href="{{route('employees.index')}}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
        
    </div>
@endsection

@section('title','Create')