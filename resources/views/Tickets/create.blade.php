@extends("Layauts.layaut")
@section("title","Agregar pelicula")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("tickets")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("tickets")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("tickets")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" class="form-control"  placeholder="fecha">
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" id="total" name="total" class="form-control"  placeholder="total">
                </div>
                <div class="form-group">
                    <label for="id_cliente">Cliente</label>
                    <select name="id_cliente" id="id_cliente">
                        <option value="">Selecciona uno</option>
                        @foreach($clientes as $cliente)
                            <option value="{{$cliente->id_cliente}}" >{{$cliente->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
