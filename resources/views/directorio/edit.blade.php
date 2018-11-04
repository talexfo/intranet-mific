@extends('plantilla')
@section('contenido')


<div class="text-center" style="margin-top:50px">
    <h2>Actualizar  Directorio</h2>
</div>
    <form method="POST" action="{{ route('directorio.update', $directorio->id) }}" >

        {!!method_field('PUT')!!}
        {!!csrf_field()!!}
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                        <div class="col-md-6">
                            {{-- <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> --}}
                            <input class="form-control" type="text" name="nombre" value="{{ $directorio->nombre }}">   
                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">
                        Email
                        </label>

                        <div class="col-md-6">
                            <input class="form-control" type="text" name="email" id="email" value="{{$directorio->email}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">
                        Oficina
                        </label>

                        <div class="col-md-6">
                            <input class="form-control" type="text" name="oficina" value="{{$directorio->oficina}}" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                            Extensión
                        </label>

                        <div class="col-md-6">
                            <input class="form-control" type="text" name="extension" value="{{$directorio->extension}}" >
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            
                            <input type="submit" value="Actualizar" class="btn btn-warning">
                            <a href="/" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </form>

    



@stop