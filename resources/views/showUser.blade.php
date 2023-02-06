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
    
    @if(Auth::check() && Auth::user()->isAdmin)
        <button type="button"><a class="bt-adm m-1 d-flex justify-content-center align-items-center" 
            href="{{ route('editUser', ['id' => $user->id]) }}">Edit</a>
        </button>
    @endif

    @if(Auth::check() && Auth::user()->isAdmin)
        <button type="button"><a href="{{route ('home') }}" >Back to home</a></button>

        <form class=formActionsHome action="{{ route('deleteUser', ['id'=>$user->id]) }}" method="POST">                   
        @method('delete')                
            @csrf  
            <button type="submit"
            class="bt-adm m-1 d-flex justify-content-center align-items-center"
            onclick="return confirm('¿Estas seguro de querer eliminar este evento? {{ $user->name }} - ID {{ $user->id }}')">Eliminar
            </button>
        </form>

    @endif

@endsection