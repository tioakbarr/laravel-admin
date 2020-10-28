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
    return view('welcome');
});

Route::get('/Awal', function() {
    return view('awal');
});

Route::get('/Sepatu', function() {
    return view('sepatu');
});

Route::get('/Hoddie', function(){
	return view('hoddie');
});

Route::get('/Celana', function(){
	return view('celana');
});

Route::get('/Tsirt', function(){
	return view('tsirt');
});

Route::get('/Jaket', function(){
	return view('jaket');
});

Route::get('/Login', function(){
	return view('login');
});