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

Route::get('/', function (){
    return view('Accueil.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Patient

Route::get('/AddPatient','PatientController@index');

Route::post('InscriptionPatient','PatientController@store');

Route::get('rendez-vous','RdvController@index');


Route::get('/test',function(){
    
   return view('test');

});

