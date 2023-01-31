@extends('layouts.app')

@section('content')
    @if (Auth::check() && Auth::user()->isAdmin)
        <div>
            <button class="btn btn-primary">
                <a href="{{ route('register') }}">
                    <div class="text-warning">REGISTER A NEW STUDENT</div>
                </a>
            </button>
        </div>

        @foreach($users as $user)
        <div> <a href="{{route('showUser',$user->id)}}"> {{ $user->name }} </a> </div>
        <form class=formActionsHome action="{{ route('deleteUser', ['id'=>$user->id]) }}" method="POST">                   
            @method('delete')                
                @csrf 
                <a href="{{route('editUser',['id'=>$user->id])}}"> Edit </a>
                <button type="submit"
                class="bt-adm m-1 d-flex justify-content-center align-items-center"
                onclick="return confirm('¿Estas seguro de querer eliminar este evento? {{ $user->name }} - ID {{ $user->id }}')">Eliminar
                </button>
        </form>
        @endforeach
    @endif
@endsection
