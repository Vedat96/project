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
	public function games(){

		return view('games');

	}
	public function comments(){
		return view('comments');

	}
	public function run(){

		return view('run');

	}
	public function test(){

		return view('test');

	}
	public function videos(){

		return view('videos');

	}
	public function posts(){
		return view('posts');
	}
	public function users(){
		return view('users');
	}

}
