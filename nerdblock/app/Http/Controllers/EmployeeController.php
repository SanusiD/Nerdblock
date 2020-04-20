<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Jobs;
use App\User;
use DB;
use Illuminate\Http\Request;


use App;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Employee $employees)
    {
        $employees = $employees->all();
        return view('admin.editEmployee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editEmployee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::where('email', '=', $request->get('emailAddress'))->first();
        if ($user === null) {
           $user = new \App\User;

            $user->firstName = $request->get('employeeFirstName');
            $user->lastName = $request->get('employeeLastName');
            $user->phone = $request->get('employeePhoneNumber');
            $user->address = $request->get('employeeAddress');
            $user->city = $request->get('employeeCity');
            $user->state = $request->get('employeeState');
            $user->email = $request->get('emailAddress');
            $user->isEmployee = "1";
            $user->password = bcrypt('password');

            $user->save();
        }
        $employeeUser= \App\User::find($user->id);

        $employee = new \App\Employee;

        $job = Jobs::where('jobTitle', '=', $request->get('jobTitle'))->first();

        $employee->employeeID = $user->id;
        $employee->jobID = $job->jobID;
        $employee->employeeWorkHours = '0';
        $employee->isAdmin = '0';
        $employee->save();

        $employeeUser= User::latest()->first();
        return view('admin.editEmployee.show', compact('employeeUser'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($employeeid)
    {
        $employeeUser= \App\User::find($employeeid);
        return view('admin.editEmployee.show', compact('employeeUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employeeid, Employee $employees)
    {
        $job = DB::table('jobs')->select('jobID')->where('jobTitle', $request->get('jobTitle'))->get()->first();

        if($request->get('choice') == 'update'){
            $result = User::where('id', $employeeid)->update(array(
                'firstName'=> $request->get('firstName'),
                'lastName'=> $request->get('lastName'),
                'email'=> $request->get('email'),
                'address'=> $request->get('address'),
                'city'=> $request->get('city'),
                'state'=> $request->get('state'),
                'phone'=> $request->get('phoneNumber')));

            $result = Employee::where('employeeID', $employeeid)->update(array('jobID'=> $job-> jobID));

            $employeeUser= \App\User::find($employeeid);
            return view('admin.editEmployee.show', compact('employeeUser'));

        }elseif($request->get('choice') == 'delete'){
            DB::delete('delete from employees where employeeID = ?',[$employeeid]);

            $employees = $employees->all();
            return view('admin.editEmployee.index', compact('employees'));
        }       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
