@extends('plantilla')
@section('contenido')
    
<h1>Nuevo Registro</h1>

<form method="POST" action="{{ route('directorio.store') }}" >
<label for="nombre">Nombre</label>
<input type="text" name="nombre">
<label for="email">Email</label>
<input type="text" name="email" id="email">
<label for="oficina">Area</label>
<input type="text" name="oficina" >
<label for="extension">Extension</label>
<input type="text" name="extension" >

<input type="submit" value="Registrar">
</form>

@stop