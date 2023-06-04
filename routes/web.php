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
Route::get('/', function(){
    $data = [
        'home' => 'home',
        'about_us' => 'about us',
        'contacts' => 'contacts'
    ];
    return view('header',$data);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about-us', function(){
    $name = 'Sara';
    $lastname = 'Gisondi';
    return view('about-us', compact('name', 'lastname'));

});