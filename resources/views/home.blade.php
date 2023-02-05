@extends('layouts.app')

@section('content')
    <div class="homeContainer">
        <div class="buttonCotainer">
            <button class="addStudentButton btn btn-primary">
                <a class="aAddButton" href="{{ route('register') }}">
                    <div class="textAddButton">AÑADIR ALUMNO</div>
                </a>
            </button>
        </div>

    </div>


    <form action="{{ route('deleteGrade', ['id'=> $grade->id]) }}" method="post">
        @method('delete')
        @csrf 
            <button type="submit"
                class="bt-adm m-1 d-flex justify-content-center align-items-center"
                onclick="return confirm('¿Estas seguro de querer eliminar esta nota? {{ $grade->name }} - ID {{ $grade->id }}')">Eliminar Nota 
            </button>
    </form>


@endsection
