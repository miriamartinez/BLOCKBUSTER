
@extends('Layauts.layaut')

@section("content")

    <div class="row justify-content-md-end">
        <div class="col">
            <a class="btn btn-outline-info" href="{{url("entradas/create")}}">Registrar Nuevo</a>
        </div>
    </div>
    <div class="row justify-content-md-end">
        <div class="col-10">
            <table class="table">
                <thead>
                <tr>
                    <th>Peliculas</th>
                    <th>Formato</th>
                    <th>Stand</th>
                    <th colspan="2">Eliminar/Modificar</th>
                </tr>
                </thead>
                @foreach($entradas as $entrada)
                    <tr>
                        <th>{{$proyecto->getPeliculas[0]->titulo}}</th>
                        <th>{{$proyecto->getFormatos[0]->descripcion}}</th>
                        <th>{{$proyecto->getStands[0]->descripcion}}</th>
                        <td>
                            <form action="{{route("entradas.destroy",$entrada->id_entrada)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("entradas",$entrada->id_entrada)}}/edit" class="btn btn-outline-success">Modificar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>

        <!---->
    </div>
    </div>

@endsection
