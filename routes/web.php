<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'title' => 'Hello World',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aperiam, fugiat cumque reiciendis corrupti odit!'
    ];

    return view('home',$data);
});
