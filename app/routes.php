<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => '/', function(){
    return View::make('home')
        ->with('title', 'The Foldagram')
        ->with('page', 'home')
        ->with('class', 'home');
}));

Route::get('/about', array('as' => 'about', function(){
    return View::make('about')
        ->with('title', 'About Foldagram')
        ->with('page', 'about')
        ->with('class', 'about');
}));

Route::resource('users', 'UsersController');
Route::get('pcredit', array('as' => 'pcredit', function() {

}));
Route::get('cart', array('as' => 'cart', function() {

}));
Route::get('contact', array('as' => 'contact', function() {

}));
Route::get('userlogin', array('as' => 'userlogin', function() {

}));
Route::get('register', array('as' => 'register', function() {

}));
Route::post('/subscribe', function () {
    $input = Input::all();
    $rules = array('email' => 'required|email');

    $validation = Validator::make($input, $rules);
    if ($validation->passes()) {
        Subscribe::create($input);
        return Redirect::to('home')->with('success', 'Thanks for signing up Foldagram.');
    }
    return Redirect::to('home')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors');
});
Route::get('home', function() {
    return View::make('home')
        ->with('title', 'Home')
        ->with('page', 'home')
        ->with('class', 'home');
});
Route::post('/create', array('as' => 'create', 'uses' => 'FoldagramsController@postCreate'));