@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>REGISTRAR CLIENTE</h1>
@stop

@section('content')

<form action="/clientes" method="POST">
    @csrf 
    <div class="mb-3">
        <label for="" class="form-label">Nombre Cliente</label>
        <input id="nom_cliente" name="nom_cliente" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido Paterno</label>
        <input id="Appaterno" name="Appaterno" type="text" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido Paterno</label>
        <input id="Apmaterno" name="Apmaterno" type="text" class="form-control" tabindex="3" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sexo</label>
        <select class="form-select" aria-label="Default select example" id="sexo" name="sexo" tabindex="4" required>
            <option selected>Elige una opcion</option>
            <option value="H">HOMBRE</option>
            <option value="M">MUJER</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="text" class="form-control" tabindex="5" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text"  class="form-control" tabindex="6" required>
    </div>
    <a href="/clientes" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop