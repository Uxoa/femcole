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

        <div class="tableContainer">
            <div class="listStudents">LISTADO DE ALUMNOS</div>
            <table class="table tableHome table-striped text-center">
                <thead class="tableHead">
                    <tr>
                        <td rowspan="2" class="align-middle">Nombre alumnos</td>
                        <td colspan="4">Lengua</td>
                        <td colspan="4">Inglés</td>
                        <td colspan="4">Matemáticas</td>
                        <td colspan="4">Historia</td>
                        <td colspan="4">Geografía</td>
                    </tr>
                    <tr class="tableTrimesters">
                        <td>1T</td>
                        <td>2T</td>
                        <td>3T</td>
                        <td>F</td>

                        <td>1T</td>
                        <td>2T</td>
                        <td>3T</td>
                        <td>F</td>

                        <td>1T</td>
                        <td>2T</td>
                        <td>3T</td>
                        <td>F</td>

                        <td>1T</td>
                        <td>2T</td>
                        <td>3T</td>
                        <td>F</td>

                        <td>1T</td>
                        <td>2T</td>
                        <td>3T</td>
                        <td>F</td>
                    </tr>
                </thead>
                <tbody class="tableBody">
                    @foreach($users as $user)
                    <tr>
                        <td><div> <a href="{{route('showUser',$user->id)}}"> {{ $user->name }} </a> </div></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>F</td>

                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>F</td>

                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>F</td>

                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>F</td>
                        
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>F</td>
                    </tr>    
                    <!-- <tr>
                        <td>{{ $user->name }}</td>    
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>f</td>
                    </tr> -->
                    @endforeach
                    <!-- <tr>
                        <td>Año 2015</td>
                        <td >341</td>
                        <td>561</td>
                        <td>234</td>
                        <td>129</td>
                        <td>340</td>
                        <td>261</td>
                    </tr>
                    <tr>
                        <td>Año 2016</td>
                        <td >341</td>
                        <td>561</td>
                        <td>234</td>
                        <td>129</td>
                        <td>340</td>
                        <td>261</td>
                    </tr>
                    <tr>
                        <td>Año 2017</td>
                        <td>741</td>
                        <td>263</td>
                        <td>721</td>
                        <td>841</td>
                        <td>590</td>
                        <td>251</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td>1082</td>
                        <td>824</td>
                        <td>955</td>
                        <td>970</td>
                        <td>930</td>
                        <td>512</td>
                    </tr>
                </tfoot> -->
            </table>
        </div>
            <!-- <table class="table table-striped">
                <thead>
                    <tr>
                        <th rowspan="2" scope="col">Student names</th>
                        <th colspan="4" scope="col">Language</th>
                        <th colspan="4" scope="col">English</th>
                        <th colspan="4" scope="col">Maths</th>
                        <th colspan="4" scope="col">History</th>
                        <th colspan="4" scope="col">Geography</th>
                    </tr>
                    <tr>
                        <th scope="col">1T</th>
                        <th scope="col">2T</th>
                        <th scope="col">3T</th>
                        <th scope="col">F</th>
                    </tr>
                </thead>
                @foreach($users as $user)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $user->name }}</th>
                            <td>NOTA 1</td>
                            <td>NOTA 2</td>
                            <td>NOTA 3</td>
                            <td>NOTA FINAL</td>
                        </tr>
                    </tbody>
                @endforeach
            </table> -->
    </div>


    <!-- <form class=formActionsHome action="{{ route('deleteUser', ['id'=>$user->id]) }}" method="POST">                   
        @method('delete')                
            @csrf  
            <button type="submit"
            class="bt-adm m-1 d-flex justify-content-center align-items-center"
            onclick="return confirm('¿Estas seguro de querer eliminar este evento? {{ $user->name }} - ID {{ $user->id }}')">Eliminar
            </button>
    </form> -->

@endsection
