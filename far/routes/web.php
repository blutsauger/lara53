<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
	return realpath(base_path('resources/views'));
    return view('welcome');
});*/

Route::get('/', 'PagesController@index');

Route::get('profile', 'PagesController@profile');
Route::get('settings', 'PagesController@settings');
Route::get('blade', 'PagesController@blade');

/*Route::get('users', function(){
	//echo "string";
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
	return $users;
});*/

Route::get('users', ['uses'=>'UsersController@index']);
Route::get('users/create', ['uses'=>'UsersController@create']);
Route::post('users', ['uses'=>'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index');
