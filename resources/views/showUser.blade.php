@extends('layouts.app')

@section('content')

<div class="studentCard">
      
            <img src="{{$user->image}}" alt="adriana" class="imageStudent">
        
        <div class="infoStudent">
            <p>Nombre y Apellidos: {{$user->name}} {{$user->surname1}} {{$user->surname2}}</p>
            <p>Curso: </p>
            <p>E-mail: {{$user->email}}</p>
        </div>
</div>
    
<div class="allT">
    

        <table class="firstT box tableHome table-striped text-center">
            
            <thead class="tableHead">
                <tr>
                    <td rowspan="2" class="align-middle"></td>
                    <td colspan="4">PRIMER TRIMESTRE</td>

                </tr>
                <tr class="tableNotes"> 
                    <td>Nota 1</td>
                    <td>Nota 2</td>
                    <td>Nota 3</td>
                    <td>Final</td>

                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Lengua</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Inglés</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Matemáticas</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Historia</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Geografía</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>

            <table class="secondT box tableHome table-striped text-center">
                <thead class="tableHead">
                    <tr>
                        <td rowspan="2" class="align-middle"></td>
                        <td colspan="4">SEGUNDO TRIMESTRE</td>
                    </tr>
                    <tr class="tableNotes"> 
                        <td>Nota 1</td>
                        <td>Nota 2</td>
                        <td>Nota 3</td>
                        <td>Final</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lengua</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Inglés</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Matemáticas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Historia</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Geografía</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
    

            <table class="thirdT box tableHome table-striped text-center">
                
                <thead class="tableHead">
                    <tr>
                        <td rowspan="2" class="align-middle"></td>
                        <td colspan="4">TERCER TRIMESTRE</td>
                    </tr>
                    <tr class="tableNotes"> 
                        <td>Nota 1</td>
                        <td>Nota 2</td>
                        <td>Nota 3</td>
                        <td>Final</td>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Lengua</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Inglés</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Matemáticas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Historia</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Geografía</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>


            <table class="finalEvaluation box tableHome table-striped text-center">
                
                <thead class="tableHead">
                    <tr>
                        <td colspan="5">EVALUACIÓN FINAL</td>
                    </tr>
                    <tr class="tableNotes asignatures"> 
                        <td>Lengua</td>
                        <td>Inglés</td>
                        <td>Matemáticas</td>
                        <td>Historia</td>
                        <td>Geografía</td>
                    </tr>
                </thead>
                
                <tbody>
                    <tr class="finalNotes">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
    <div id="main-conteiner">
        @if(Auth::check() && Auth::user()->isAdmin)
            <div class="editButton">
                <a href="{{ route('editUser', ['id' => $user->id]) }}" class="btnB btn-purpleB editButton">Edit</a>
            </div>
                <form action="{{ route('deleteUser', ['id'=>$user->id]) }}" method="POST" >
                    @method('delete')                
                    @csrf 
                    <button type="submit" class="btnD btn-purpleD deleteB"
                            onclick="return confirm('¿Estas seguro de querer eliminar este evento? {{ $user->name }} - ID {{ $user->id }}')">Eliminar
                    </button>
                </form>
                
                <a href="{{route ('home') }}" class="btnA btn-purpleA backHome">Back</a>
        </div> 
        
    
    @endif



@endsection