@extends("Layauts.layaut")
@section("title","Agregar Formato")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("formatos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("formatos")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("formatos")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="descripcion_f">Formato</label>
                    <input type="text" id="descripcion_f" name="descripcion_f" class="form-control"  placeholder="descripcion">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
