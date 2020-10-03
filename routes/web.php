<?php
use App\Game;
use App\User;

use Illuminate\Support\Facades\Input;
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


// Route::any ( '/search', function () {
//     $q = Input::get ( 'q' );
//     $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
//     if (count ( $user ) > 0)
//         return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
//     else
//         return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
// } );


Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $game = Game::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $game ) > 0)
        return view ( 'welcome' )->withDetails ( $game )->withQuery ( $q );
    else
        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::get('/search','GamesController@search');

Route::get('/', 'PagesController@home');
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');
Route::get('login', 'PagesController@login');
Route::get('register', 'PagesController@register');
Route::get('run', 'PagesController@run');
Route::get('videos', 'PagesController@videos');

Route::get('test', 'PagesController@test');

// Route::get('display', "ImageController@show");

Route::resource('users', 'UsersController');

Route::resource('games', 'GamesController');
Route::resource('posts', 'PostsController');

Route::get('file', "FileController@showUploadForm")->name('upload.file');
Route::post('file', "FileController@storeFile");


Route::group(['middleware' => 'auth'], function() {
	
	Route::resource('comments', 'CommentsController');
	// Route::get('games.create');
	// Route::get('games.edit');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');