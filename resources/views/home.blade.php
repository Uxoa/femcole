@extends('layouts.app')

@section('content')

    @foreach($users as $user)
    <div> {{ $user->name }} </div>
    <form class=formActionsHome action="{{ route('deleteUser', ['id'=>$user->id]) }}" method="POST">                   
        @method('delete')                
            @csrf  
            <button type="submit"
            class="bt-adm m-1 d-flex justify-content-center align-items-center"
            onclick="return confirm('¿Estas seguro de querer eliminar este evento? {{ $user->name }} - ID {{ $user->id }}')">Eliminar
            </button>
    </form>
    @endforeach

@endsection
