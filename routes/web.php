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
    return view('login');
});

Route::post('/LoginSuccess', 'App\Http\Controllers\AuthController@login');

Route::get('/Home', function () {
    return view('Home');
})->middleware('auth');

Route::get('/Regis', function () {
    return view('regis');
});

Route::post('/RegisSuccess', 'App\Http\Controllers\AuthController@regis');

Route::get('/Ajukan  ', function () {
    return view('ajukan');
})->middleware('auth');

Route::get('/Hasil  ', function () {
    return view('hasil');
})->middleware('auth');

Route::post('/AjukanSuccess', 'App\Http\Controllers\PMController@hitung')->middleware('auth');;

Route::post('/LogoutSuccess', 'App\Http\Controllers\AuthController@logout');
