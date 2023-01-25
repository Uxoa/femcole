@extends('layouts.app')

@section('content')

    @foreach($students as $student)
    <div> {{ $student->studentName }} </div>
    @endforeach

@endsection
