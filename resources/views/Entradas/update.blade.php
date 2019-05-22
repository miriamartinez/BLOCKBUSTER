@extends('Layauts.layaut')

@section('content')

    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("entradas")}}"><i class="fa fa-backspace"></i> Regresar</a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{route("entradas.update",$entrada->id_entrada)}}" method="post">
                @csrf
                @method("PUT")

                <div class="form-group">
                    <label for="id_pelicula">Peliculas</label>
                    <select name="id_pelicula" id="id_pelicula">
                        @foreach($peliculas as $pelicula)
                            <option value="{{$pelicula->id_pelicula}}" {{$pelicula->id_pelicula==$pelicula->id_pelicula?"selected":""}}>{{$pelicula->titulo}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_formato">Formatos</label>
                    <select name="id_formato" id="id_formato">
                        @foreach($formatos as $formato)
                            <option value="{{$formato->id_formato}}" {{$formato->id_formato==$formato->id_formato?"selected":""}}>{{$formato->descripcion_f}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_stand">Estand</label>
                    <select name="id_stand" id="id_stand">
                        @foreach($stands as $stand)
                            <option value="{{$stand->id_stand}}" {{$stand->id_stand==$formato->id_stand?"selected":""}}>{{$stand->descripcion_s}}</option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection

