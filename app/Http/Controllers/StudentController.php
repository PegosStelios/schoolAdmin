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

    public function show($id) {
        return view('students.student', [
            'student' => Student::find($id)
        ]);
    }

    public function edit($id) {
        return view('students.edit', [
            'student' => Student::find($id)
        ]);
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        // all are required
        $formFields = $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'age' => 'required',
            'dob' => 'required',
            'email' => ['required', 'email'],
            'telephone' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address' => 'required',
            'fatherName' => 'required',
            'fatherLastName' => 'required',
            'semester' => 'required',
            'examResult' => 'required',
            'absence' => 'required',
            'gpa' => 'required',
            'subject' => 'required',
        ]);

        Student::create($formFields);

        return redirect('/students/students')->with('message', 'Student created successfully');
    }

    public function update(Request $request, Student $student, $id) {
        // all are required
        $formFields = $request->validate([
            //'id' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'age' => 'required',
            'dob' => 'required',
            'email' => ['required', 'email'],
            'telephone' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address' => 'required',
            'fatherName' => 'required',
            'fatherLastName' => 'required',
            'semester' => 'required',
            'examResult' => 'required',
            'absence' => 'required',
            'gpa' => 'required',
            'subject' => 'required',
        ]);
        //ddd($formFields);
        $student = Student::findOrFail($id);
        $student->update($formFields);
        return redirect('/students/students')->with('message', 'Student updated successfully');
    }

    public function delete(Student $student, $id) {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/students/students')->with('message', 'Student deleted successfully');
    }
}
