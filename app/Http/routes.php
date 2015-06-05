<?php

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('scada-monitoring', 'ProjectsController@scada');
Route::get('dispatching', 'ProjectsController@dispatching');
Route::get('room-readiness', 'ProjectsController@readiness');
Route::get('compsforkids', 'ProjectsController@compsforkids');

Route::get('contact', function() {
    return view('contact');
});

Route::post('contact/submit', 'ContactController@send');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);