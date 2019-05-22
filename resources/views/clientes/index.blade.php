
@extends('Layauts.layaut')

@section("content")

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
                <td>{{$cliente->id_sexo}}</td>
                <td>

                    <a href="{{ url('/clientes/'.$cliente->id_cliente.'/edit') }}" class="btn btn-warning" >
                        Editar
                    </a>

                    <form method="post" action="{{url('/clientes/'.$cliente->id_cliente )}}" style="display:inline">
                        {{csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button  type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">Borrar</button>
                    </form>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>


    @endsection