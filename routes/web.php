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
        'comics' => config('comics'),
        'nav' => config('nav'),
        'displays' => config('displayer'),
        'dclist' => config('dccomicslist'),
        'shoplist' => config('shoplist'),
        'contacts' => config('contact')
    ];
    return view('home', $data);
})-> name('home');
