@extends('layouts.app')
@section('content')
    <div>
        <h1>{{$user->name}}</h1>
        <h2>{{$user->surname1}}</h2>
        <h2>{{$user->surname2}}</h2>
        <h2>{{$user->email}}</h2>
        <h2>{{$user->password}}</h2>
        <h2>{{$user->password_confirmation}}</h2>
        <h2>{{$user->image}}</h2>
    </div>
    <button type="button" ><a href="{{route ('home', $user->id)}}" >Back to home</a></button>
@endsection