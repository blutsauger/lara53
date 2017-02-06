<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function index(){
    	$users	=	[
    		'0'	=> [
				'firstname'	=>	'Chris',
				'lastname'	=>	'Evans',
				'location'	=>	'Texas'
			],
			'1'	=> [
				'firstname'	=>	'Robert',
				'lastname'	=>	'Downey',
				'location'	=>	'Kentucky'
			]
		];
		//return $users;
		return view('admin.users.index', compact('users'));
    }
    
    public function create(){
    	return view('admin.users.create');
    }

    public function store(Request $requst){
    	User::create($requst->all());
    	return 'success';
    	//return $requst->all();

    }
}
