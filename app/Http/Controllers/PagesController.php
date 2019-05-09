<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

    	return view('welcome', [
    		'foo' => 'bar'
    	]);
	}

	public function about(){

		return view('about');
	}
	public function contact(){

		return view('contact');

	}
	public function login(){

		return view('login');

	}
	public function register(){

		return view('register');

	}

}
