@extends('layouts.app')

@section('content')

    <!-- <div class="homeContainer">
        <div class="buttonCotainer">
            <button class="addStudentButton btn btn-primary">
                <a class="aAddButton" href="{{ route('register') }}">
                    <div class="textAddButton">AÑADIR ALUMNO</div>
                </a>
            </button>
        </div>
    </div> -->

    <div>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <td rowspan="2">Nombre estudiantes</td>
                    <td colspan="4">Lengua</td>
                    <td colspan="4">Inglés</td>
                    <td colspan="4">Mates</td>
                    <td colspan="4">Historia</td>
                    <td colspan="4">Geografía</td>
                </tr>
                <tr>
                    <td>1T</td>
                    <td>2T</td>
                    <td>3T</td>
                    <td>F</td>
                </tr>
            </thead>
            @foreach ($users as $user)
            <h3>RESULTADO FOREACH ALUMNO</h3>
            <div>
                <h5>{{ $user->name }}</h5>
            </div>
            <div>
                @foreach ($grades as $grade)
                    <p>RESULTADO FOREACH NOTA</p>
                    <div>
                        <h5>{{ $grade->subject }}</h5>
                        <h5>{{ $grade->grade }}</h5>
                        <h5>{{ $grade->trimester }}</h5>
                    </div>
                @endforeach
            </div>
            @endforeach
        </table>
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
