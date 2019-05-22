@extends("Layauts.layaut")
@section("title","Agregar entrada")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("entradas")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("entradas")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("entradas")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="id_pelicula">Pelicula</label>
                    <select name="id_pelicula" id="id_pelicula">
                        <option value="">Selecciona uno</option>
                        @foreach($peliculas as $pelicula)
                            <option value="{{$pelicula->id_pelicula}}" >{{$pelicula->titulo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_formato">Formato</label>
                    <select name="id_formato" id="id_formato">
                        <option value="">Selecciona uno</option>
                        @foreach($formatos as $formato)
                            <option value="{{$formato->id_formato}}" >{{$formato->descripcion_f}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_stand">Stands</label>
                    <select name="id_stand" id="id_stand">
                        <option value="">Selecciona uno</option>
                        @foreach($stands as $stand)
                            <option value="{{$stand->id_stand}}" >{{$stand->descripcion_s}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
