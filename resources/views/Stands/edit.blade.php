@extends("Layauts.layaut")
@section("title","Agregar Stand")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("stands")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("stands")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{route("stands.update",$stand->id_stand)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="descripcion_s">Stand</label>
                    <input type="text" id="descripcion_s" name="descripcion_s" class="form-control"  placeholder="descripcion" value="{{$stand->descripcion_s}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
