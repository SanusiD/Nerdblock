<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class EditCustomerProfilesController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = DB::table('users')
    	->select('*')
    	->get();

    	return view('employee.editcustomer.index', compact('users'));
    }

    public function show($user)
    {
        return view('employee.editcustomer.show', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        $user = \App\User::where('id', $user_id)->update(array(
            'firstName'=> $request->get('firstName'),
            'lastName'=> $request->get('lastName'),
            'email'=> $request->get('email'),
            'phone'=> $request->get('phone'),
            'address'=> $request->get('address'),
            'city'=> $request->get('city'),
            'state'=> $request->get('state'),
        ));

        $user = $user_id;
         return view('employee.editcustomer.show', compact('user'));
    }
}
