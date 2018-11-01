@extends('plantilla')
@section('contenido')
    
<h1 class="text-center">Actualizar Registro</h1>
<br>
<hr>

<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">Desactivar Registro</h3>
      </div>
      <div class="panel-body">
           
<form method="POST" action="{{ route('directorio.update', $directorio->id) }}" disabled >

    {!!method_field('PUT')!!}
    {!!csrf_field()!!}

        <div class="form-group">
            <label for="nombre" class="col-md-2">Nombre</label>
            <div class="col-md-10">
                <input class="form-control" type="text" name="nombre" value="{{ $directorio->nombre }}" disabled>
            </div>
        </div>
<br><br>
        <div class="form-group">
            <label for="email" class="col-md-2">Email</label>
            <div class="col-md-10">
                <input class="form-control" type="text" name="email" id="email" value="{{$directorio->email}}" disabled>
            </div>
        </div>
<br><br>

<div class="group">
    <label for="nombre" class="col-md-2">Oficina</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="area" value="{{$directorio->oficina}}" disabled >
    </div>
    <label for="email" class="col-md-2">Extensión</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="extension" value="{{$directorio->extension}}" disabled>
    </div>
</div>
        







<input type="submit" value="Desactivar" class="btn btn-danger">
<a href="/" class="btn btn-default">Cancelar</a>
</form>
      </div>
</div>


@stop