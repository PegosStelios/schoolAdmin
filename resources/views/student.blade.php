@extends('layout')

@section('content')
    <div>
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">

            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">

                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> {{ $student->name }}
                        {{ $student->lastName }}</h1>
                </div>

                <ul>
                    ID: {{ $student->id }} <br>
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
            </div>
        </div>
    </div>
@endsection
