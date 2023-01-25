@extends('layouts.app')

@section('content')

    @foreach($students as $student)
    <div> {{ $student->studentName }} </div>
    <form class=formActionsHome action="{{ route('deleteStudent', ['id'=>$student->id]) }}" method="POST">                   
        @method('delete')                
            @csrf  
            <button type="submit"
            class="bt-adm m-1 d-flex justify-content-center align-items-center"
            onclick="return confirm('¿Estas seguro de querer eliminar este evento? {{ $student->name }} - ID {{ $student->id }}')">Eliminar
            </button>
    </form>
    @endforeach

@endsection
