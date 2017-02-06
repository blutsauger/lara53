<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class PagesController extends Controller
{
    //
    public function index(){
    	if(View::exists('pages.index'))
    		return view('pages.index')
    	->with('text', '<b>LARAVEL 5.3</b>')
    	->with('name', 'Nocturne')
    	->with(['location'=>'Asia', 'planet'=>'Earth']);
    		//return view('pages.index', ['text' => '<b>LARAVEL 5.3</b>']);
    	else
    		return 'No View Available';
    }

    public function profile(){
        return view('pages.profile');
    }

    public function settings(){
        return view('pages.settings');
    }

    public function blade(){
        $gender = "a";
        $text = "hello";
        return view('blade.bladetest', compact('gender','text'));
    }


}
