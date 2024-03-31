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

// Route::get('/users', function () {
//     return "This is users page";
// });

Route::get('/users/{name?}', function ($name = NULL) {
    return "This is " . $name;
});

Route::get('/student/{name?}', function ($name = NULL) {
    return "This is " . $name;
});

Route::match(['get', 'post'], '/match', function () {
    return "This is match route";
});