@extends('plantilla ')

@section('contenido')
    

<div class="text-center" style="margin-top:50px">
<h2>Usuarios</h2>
</div>
<br>    
<table class="table table-hover">
    <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Opciones</th>
    </thead>
    <tbody>
        @foreach ($usuarios as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>
                    @foreach ($item->roles as $role)
                    {{$role->display_name}}
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-info btn-xs" href="{{ route('usuarios.edit', $item->id) }}" >
                        Editar
                    </a>

                    
                </td>
            
            </tr>
        @endforeach
    </tbody>
</table>


@endsection