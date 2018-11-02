@extends('plantilla')
@section('contenido')
    
<h1 class="text-center">Actualizar Registro</h1>
<br>
<hr>

<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">Actualizar Registro</h3>
      </div>
      <div class="panel-body">
           
<form method="POST" action="{{ route('directorio.update', $directorio->id) }}" >

    {!!method_field('PUT')!!}
    {!!csrf_field()!!}

        <div class="form-group">
            <label for="nombre" class="col-md-2">Nombre</label>
            <div class="col-md-10">
                <input class="form-control" type="text" name="nombre" value="{{ $directorio->nombre }}">
            </div>
        </div>
<br><br>
        <div class="form-group">
            <label for="email" class="col-md-2">Email</label>
            <div class="col-md-10">
                <input class="form-control" type="text" name="email" id="email" value="{{$directorio->email}}">
            </div>
        </div>
<br><br>

<div class="group">
    <label for="nombre" class="col-md-2">Oficina</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="oficina" value="{{$directorio->oficina}}" >
    </div>
    <label for="email" class="col-md-2">Extensión</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="extension" value="{{$directorio->extension}}" >
    </div>
</div>
        







<input type="submit" value="Actualizar" class="btn btn-warning">
<a href="/" class="btn btn-default">Cancelar</a>
</form>
      </div>
</div>


@stop