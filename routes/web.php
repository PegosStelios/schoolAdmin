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

Route::get('/', function () {
    return view('main');
});

// Every Student
Route::get('/students/students', 'App\Http\Controllers\StudentController@index');

// Single Student
Route::get('/students/student/{id}', 'App\Http\Controllers\StudentController@show');

// Create Student
Route::get('/students/createStudent', 'App\Http\Controllers\StudentController@create');

// Create Student
Route::post('/students/storeStudent', 'App\Http\Controllers\StudentController@store');

// Edit Student
Route::get('/students/editStudent/{id}', 'App\Http\Controllers\StudentController@edit');
