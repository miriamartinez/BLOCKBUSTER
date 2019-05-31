@extends("Layauts.layaut")


@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("peliculas/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>titulo</th>
                    <th>duracion</th>
                    <th>genero</th>
                    @if(Auth::user()->id_tipo==1 )
                        <th colspan="2">Acciones</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($peliculas as $pelicula)
                    <tr>
                        <td>{{$pelicula->id_pelicula}}</td>
                        <td>{{$pelicula->titulo}}</td>
                        <td>{{$pelicula->duracion}}</td>
                        <td>{{$pelicula->getGeneros[0]->descripcion}}</td>
                        @if(Auth::user()->id_tipo==1 )
                            <td>
                                <form action="{{route("peliculas.destroy",$pelicula->id_pelicula)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url("peliculas",$pelicula->id_pelicula)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
