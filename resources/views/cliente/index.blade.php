@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 9 Y BOOTSTRAP 5')

@section('content_header')
    <h1>Clientes EKS</h1>
@stop

@section('content')
<a href="clientes/create" class="btn btn-primary  mb-3">Crear</a>

<table id="clientes" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width: 100%;">
    <thead class="bg-success text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">Apellido Parterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Sexo</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nom_cliente}}</td>
                <td>{{$cliente->Appaterno}}</td>
                <td>{{$cliente->Apmaterno}}</td>
                <td>{{$cliente->sexo}}</td>
                <td>{{$cliente->correo}}</td>
                <td>{{$cliente->telefono}}</td>
                <th>
                    <form action="{{route('clientes.destroy',$cliente->id)}}" method="POST">
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"> 
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>//inicializar la vista de datatables
        $(document).ready(function () {
            $('#clientes').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [ 5, 10, 50, "All"]]
            });
        });
    </script>
@stop