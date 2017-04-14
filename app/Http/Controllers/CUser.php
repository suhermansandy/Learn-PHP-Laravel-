<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class CUser extends Controller
{
    public function store(Request $request)
    {
    	$user = new User();

    	$user->name = $request->get('name');
    	$user->email = $request->get('email');
    	$user->password = $request->get('password');

    	if(!$user)
    	{
    		return 
    		[
    			'status_code' => 500,
    			'message' => 'User Tidak Boleh Kosong'
    		];
    	}

    	$user->save();
    	return 
    	[
    		'status_code' => 200,
    		'message' => 'User Berhasil di Upload',
            'value' => $user
    	];
    }

    public function index()
    {
        $user = User::all();
        return $user;
    }
}
