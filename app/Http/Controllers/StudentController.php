<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {

    public static function index() {
        return view('students.students', [
            'students' => Student::all()
        ]);
    }

    public static function show($id) {
        return view('students.student', [
            'student' => Student::find($id)
        ]);
    }

    public static function edit($id) {
        return view('students.edit', [
            'student' => Student::find($id)
        ]);
    }

    public static function create() {
        return view('students.create');
    }
}
