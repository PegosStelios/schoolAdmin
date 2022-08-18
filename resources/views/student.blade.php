@extends('layout')

@section('content')

<ul>
    Name: {{ $student->name }} <br>
    Last Name: {{ $student->lastName }} <br>
    Age: {{ $student->age }} <br>
    Email: {{ $student->email }} <br>
    Telephone: {{ $student->telephone }} <br>
    Address: {{ $student->address }}, {{ $student->city }}, {{ $student->zip }} <br>
    Father: {{ $student->fatherName }} {{ $student->fatherLastName }} <br>
    Current Semester: {{ $student->semester }} <br>
    Exam Status: {{ $student->examResult }} <br>
    Abcenses: {{ $student->absence }} <br>
    GPA: {{ $student->gpa }} <br>
    Subject: {{ $student->subject }} <br>
</ul>

@endsection
