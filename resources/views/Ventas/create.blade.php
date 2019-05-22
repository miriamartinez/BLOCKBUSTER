@extends("Layauts.layaut")
@section("title","Agregar venta")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("ventas")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("ventas")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("ventas")}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="cantidad">cantidad</label>
                    <input type="number" id="cantidad" name="cantidad" class="form-control"  placeholder="cantidad">
                </div>

                <div class="form-group">
                    <label for="subtotal">subtotal</label>
                    <input type="number" id="subtotal" name="subtotal" class="form-control"  placeholder="subtotal">
                </div>

                <div class="form-group">
                    <label for="id_entrada">id_entrada</label>
                    <input type="number" id="id_entrada" name="id_entrada" class="form-control"  placeholder="id_entrada">
                </div>

                <div class="form-group">
                    <label for="id_ticket">id_ticket</label>
                    <input type="number" id="id_ticket" name="id_ticket" class="form-control"  placeholder="id_ticket">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
