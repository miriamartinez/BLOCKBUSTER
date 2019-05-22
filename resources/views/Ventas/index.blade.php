@extends("Layauts.layaut")
@section("title","Ventas")

@section("content")
    <br>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("ventas/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>cantidad</th>
                    <th>subtotal</th>
                    <th>id_entrada</th>
                    <th>id_entrada</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ventas as $venta)
                    <tr>
                        <td>{{$venta->id_venta}}</td>
                        <td>{{$venta->cantidad}}</td>
                        <td>{{$venta->subtotal}}</td>
                        <td>{{$venta->id_entrada}}</td>
                        <td>{{$venta->id_ticket}}</td>

                        <td>
                            <form action="{{route("ventas.destroy",$venta->id_venta)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("ventas",$venta->id_venta)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br>
@endsection
