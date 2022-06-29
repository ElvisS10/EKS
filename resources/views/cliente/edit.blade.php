@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR CLIENTE</h1>
@stop

@section('content')
<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
        <label for="" class="form-label">Cliente</label>
        <input id="nom_cliente" name="nom_cliente" type="text" class="form-control" value="{{$cliente->nom_cliente}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido Paterno</label>
        <input id="Appaterno" name="Appaterno" type="text" class="form-control" value="{{$cliente->Appaterno}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido Paterno</label>
        <input id="Apmaterno" name="Apmaterno" type="text" class="form-control" value="{{$cliente->Apmaterno}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sexo</label>
        <select class="form-select" aria-label="Default select example" id="sexo" name="sexo" value="{{$cliente->sexo}}">
            <option selected >Elige una opcion</option>
            <option value="H" <?php if ($cliente['sexo'] == 'H')
                {
                    echo "selected";
                }?>>HOMBRE
            </option>
            <option value="M" <?php if($cliente['sexo']== 'M')
            {
                echo 'selected';
            }?>>MUJER</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="text" class="form-control" value="{{$cliente->correo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text"  class="form-control" value="{{$cliente->telefono}}">
    </div>
    <a href="/clientes" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop