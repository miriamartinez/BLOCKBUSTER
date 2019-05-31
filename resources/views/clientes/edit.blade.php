@extends('Layauts.layaut')
@section("content")
    <h1 class="bg-primary text-white text-center">Modificar categoria</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("clientes")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("clientes.update",$cliente->id_cliente)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nom">Nombre cliente</label>
                    <input type="text"  value="{{$cliente->nom}}" id="nom" class="form-control" name="nom_cat" placeholder="">
                    <label for="ap">Apellido Paterno</label>
                    <input type="text"  value="{{$cliente->ap}}" id="nom" class="form-control" name="ap" placeholder="">
                    <label for="am">Apellido Materno</label>
                    <input type="text"  value="{{$cliente->am}}" id="nom" class="form-control" name="am" placeholder="">
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_sexo">Sexo</label>
                    <select name="id_sexo" id="id_sexo">
                        <option value="">Selecciona uno</option>
                        @foreach($sexos=\App\Sexos::all() as $sexo)
                            <option value="{{$sexo->id_sexo}}" >{{$sexo->sexo}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection