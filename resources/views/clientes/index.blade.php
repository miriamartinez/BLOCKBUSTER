
@extends('Layauts.layaut')

@section("content")
    <br><br>
    <h1 class="bg-primary text-white text-center">Info Clientes</h1>
    <div class="row">
        <div class="col"><a href="{{url("clientes")}}"></a></div>
    </div>
    <table class="table table-light table-hover" >
        <thead class="thead-light">
        <tr >
            <th>Indice</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Genero</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$cliente->id_cliente}}</td>
                <td>{{$cliente->nom}}</td>
                <td>{{$cliente->ap}}</td>
                <td>{{$cliente->am}}</td>
                <td>{{isset($cliente->getSexo[0])?$cliente->getSexo[0]->sexo:""}}</td>

                <td>
                    <a href="{{route("clientes.edit",$cliente->id_cliente)}}" class="btn btn-outline-primary" name="actualizar"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{url("clientes")."/".$cliente->id_cliente}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-minus-circle"></i></button>
                    </form>
                </td>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>


    @endsection