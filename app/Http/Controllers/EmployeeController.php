<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee');
    }

    public function add_employee(Request $request)
    {
        $data = new Employee;

        $data->empid = $request->empid;
        $data->name = $request->name;
        $data->birthday = $request->birthday;
        $data->status = $request->status;

        $data->save();

        return redirect()->back();
    }

    public function show_employee()
    {
        $data = Employee::all();
        return view('employee_display', compact('data'));
    }
}
