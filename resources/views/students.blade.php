@extends('layout')

@section('content')
    @unless(count($students) == 0)
        @foreach ($students as $student)
            <h2><a href="/student/{{ $student->id }}">{{ $student->id }}</a>- {{ $student->name }}
                {{ $student->lastName }} </h2>
        @endforeach
    @else
        <p>No students</p>
    @endunless
@endsection
