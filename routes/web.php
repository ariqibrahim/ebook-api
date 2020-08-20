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
    return ['NIS' => '3103118091',
    'Nama' => 'Mohammad Ariq Maulana Ibrahim',
    'Gender' => 'Laki-Laki',
    'Phone' => '082136315004',
    'Class' => 'XII RPL 3'];
});

Route::get('auth','AuthController@me');
