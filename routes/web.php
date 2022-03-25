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
    $data = [
                "messaggio"=>'QUESTA E\' LA HOME PAGE'
            ];
    return view('home', $data);
});

Route::get('/chiSiamo', function () {
    return view('chiSiamo');
});

