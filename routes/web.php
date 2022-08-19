<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

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

// Show Edit Student
Route::get('/students/editStudent/{id}', 'App\Http\Controllers\StudentController@edit');

// Delete Student
Route::delete('/students/deleteStudent/{id}', 'App\Http\Controllers\StudentController@delete');

// Update Student
Route::put('/students/updateStudent/{id}', 'App\Http\Controllers\StudentController@update');


// Register User
Route::get('/register','App\Http\Controllers\UserController@create');

// Create New User
Route::post('/users','App\Http\Controllers\UserController@store');
