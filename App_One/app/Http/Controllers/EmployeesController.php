<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('employees.index',[
            'employees' => Employee::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Employee_name' => 'required',
            'Employee_email' => 'required | email',
            'Employee_phone' => 'required | numeric',
            'Employee_salary' => 'required | numeric',
            'Employee_department' => 'required',

        ]);

        /* strip_tags() ==> A function that prevents JavaScript from being written inside input fields. */
        $employee = new Employee();
        $employee->name = strip_tags($request->input('Employee_name'));
        $employee->email = strip_tags($request->input('Employee_email'));
        $employee->phone = strip_tags($request->input('Employee_phone'));
        $employee->salary = strip_tags($request->input('Employee_salary'));
        $employee->department = strip_tags($request->input('Employee_department'));
        
        $employee->save();

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('employees.edit',[
            'employee' => Employee::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Employee_name' => 'required',
            'Employee_email' => 'required | email',
            'Employee_phone' => 'required | numeric',
            'Employee_salary' => 'required | numeric',
            'Employee_department' => 'required',

        ]);

        $to_update = Employee::FindOrFail($id);
        $to_update->name = strip_tags($request->input('Employee_name'));
        $to_update->email = strip_tags($request->input('Employee_email'));
        $to_update->phone = strip_tags($request->input('Employee_phone'));
        $to_update->salary = strip_tags($request->input('Employee_salary'));
        $to_update->department = strip_tags($request->input('Employee_department'));
        
        $to_update->save();

        return redirect()->route('employees.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $to_delete = Employee::FindOrFail($id);
        $to_delete->delete();

        return redirect()->route('employees.index');
    }
}
