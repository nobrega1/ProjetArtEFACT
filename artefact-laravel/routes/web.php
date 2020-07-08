<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('acceuil');
});



Route::get('/artefact/products/{no}', 'ProductController@show');


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', 'TraiteLogin@traitelogin');
Route::post('/login', 'TraiteLogin@traitelogin');

Route::get('/register', 'TraiteRegister@traiteregister');
Route::post('/register', 'TraiteRegister@traiteregister');
//Route::get('register', 'PersonController@store')->name('register');
//Route::post('register', 'PersonController@store')->name('register');