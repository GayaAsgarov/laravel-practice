<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

// Route::get('/student', function () {
//     $name = "John";
//     $student_array = array(
//         'name' => 'David',
//         'email' => 'david@email.com'
//     );
//     return view('student', compact('name', 'student_array'));
// });

Route::get('/student', [StudentController::class, 'list']);

// Route::get('/home/{name?}', [HomeController::class, 'index']);
// Route::get('/blog', [HomeController::class, 'blog']);

Route::controller(HomeController::class)->group(function () {
    Route::get('/home/{name?}', 'index');
    Route::get('/blog', 'blog');
});