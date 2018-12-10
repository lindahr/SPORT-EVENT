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

Route::get('/cont','ContactController@newContact');




// route to process the form
Route::post('Acceuil', array(
	'uses' => 'InscreptionController@doLogin'
));
Route::get('logout', array(
	'uses' => 'InscreptionController@doLogout'
));
Route::get('/Acceuil',
function ()
	{
	return view('info');
	});








/*///////////////////////////////////////test////////////////////*/

Route::get('/Acceuil', function () {
    return view('Acceuil');
});

Route::get('Contact', function () {
    return view('Contact');
});

Route::get('Creation Evenment', function () {
    return view('Creation Evenment');
});

Route::get('info', function () {
    return view('info');
});

Route::get('Liste de salle', function () {
    return view('Liste de salle');
});

Route::get('Liste des evenments', function () {
    return view('Liste des evenments');
});

Route::get('inscrie', function () {
    return view('inscrie');
});





Route::get('/inscri','InscreptionController@index');
Route::get('/create','InscreptionController@create');
Route::post('/inscrie','InscreptionController@store');
Route::get('/{id}/edit','InscreptionController@edit');
Route::put('/{id}','InscreptionController@update');
Route::delete('/{id}','InscreptionController@destory');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
