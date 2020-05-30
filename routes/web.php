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



Route::get('/users/create', 'usercontroller@createuser');
Route::post('/users/create', 'usercontroller@saveuser')->name('createuser');



Route::get('/users/creat', 'usercontroll@register');
Route::post('/users/creat', 'usercontroll@saveuser')->name('createuser');



Route::get('/users/Registeruser', 'register@createregister');	
Route::post('/users/creat', 'register@saveregister')->name('sendRegister');
