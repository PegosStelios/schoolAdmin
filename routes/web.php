<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;
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

// Every Student
Route::get('/', 'App\Http\Controllers\StudentController@index');

// Signle Student
Route::get('/student/{id}', 'App\Http\Controllers\StudentController@show');

Route::get('/createStudent', 'App\Http\Controllers\StudentController@create');

Route::get('/editStudent/{id}', 'App\Http\Controllers\StudentController@edit');
