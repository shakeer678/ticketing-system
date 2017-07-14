<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	//$people = ['Ganesh', 'Shakeer', 'Rajesh', 'Nithees'];
	//$people = [];

    return view('welcome', compact('people'));
});

//Route::get('/about' , function() {
	//return view('pages.about');//resources/views/pages/about.blade.php
	
//});
/*
Route::get('my/page', function() {
	return 'Hello World!';
});

Route::get('first/page',function() {
	return 'first page';
});

Route::get('second/page', function() {
	return 'second page';
});

Route::get('third/page' , function() {
	return 'Potato!';
});

Route::get('/books' , function() {
	return 'Books Index';
});

Route::get('/books/{genre?}', function($genre = null) {
	if($genre != null)
	return "Books in the {$genre} category";
});
*/
Route::get('/' , 'PagesController@login');
Route::get('/home' , 'PagesController@home');
Route::get('/about' , 'PagesController@about');
Route::get('/contact' , 'TicketsController@create');
Route::post('/contact' , 'TicketsController@store');
Route::get('/tickets','TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit' , 'TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');
Route::get('/sendemail', function () {
$data = array(
'name' => "Learning Laravel",
);
Mail::send('emails.welcome', $data, function ($message) {
$message->from('shakeer@simplecrm.com.sg', 'Learning Laravel');
$message->to('shakeer@simplecrm.com.sg')->subject('Learning Laravel test email');
});
return "Your email has been sent successfully";
});