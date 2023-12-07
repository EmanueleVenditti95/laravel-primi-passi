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

Route::get('/chi-siamo', function (){

    $data = [
        'title' => 'Chi siamo',
        'text' => 'Noi siamo Grooth'
    ];
    return view('chi-siamo', $data);
});

Route::get('/contatti', function (){

    $data = [
        'title' => 'Contatti',
        'contacts' => [
            'number' => '123456789',
            'address' => 'Via le mani dal naso 25',
            'email' => 'pippo@giggimail.com'
        ]
    ];
    return view('contatti', $data);
});

Route::get('/shop', function (){

    $data = [
        'title' => 'Shop',
        'products' => ['item1','item2','item3','item4']
    ];
    return view('shop', $data);
});