<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use \App\User;

class UserController extends Controller
{
	public function index()
	{
		
		return view('personalinfo');
	}

	public function update(Request $request)
	{
		$user = User::where('id', $request->get('id'))->update(array(
			'firstName'=> $request->get('firstName'),
			'lastName'=> $request->get('lastName'),
			'email'=> $request->get('email'),
			'phone'=> $request->get('phone'),
			'address'=> $request->get('address'),
			'city'=> $request->get('city'),
			'state'=> $request->get('state'),
		));
		return view('personalinfo');
	}
}
