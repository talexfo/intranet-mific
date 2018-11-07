@extends('plantilla')

@section('contenido')


<div class="text-center" style="margin-top:50px">
    <h2>Actualizar  Usuario</h2>
</div>

@if (session()->has('info'))
  <div class="alert alert-success">
        {{session('info')}}
</div>
@endif

    <form method="POST" action="{{ route('usuarios.update', $user->id) }}" >

        {!!method_field('PUT')!!}
        {!!csrf_field()!!}
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                        <div class="col-md-6">
                            {{-- <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> --}}
                            <input class="form-control" type="text" name="name" value="{{ $user->name }}">   
                           {!! $errors->first('name', '<span class=error>:message</span>') !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">
                        Email
                        </label>

                        <div class="col-md-6">
                            <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}">
                            {!! $errors->first('email', '<span class=error>:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">
                            Contraseña</label>
                            <div class="col-md-6">
                                <input class="form-control" type="password" name="password" id="password" value="{{$user->password}}">
                                {!! $errors->first('password', '<span class=error>:message</span>') !!}
                            </div>
                    </div>

                    

                    

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            
                            <input type="submit" value="Actualizar" class="btn btn-warning">
                            <a href="/usuarios" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </form>
    
@endsection