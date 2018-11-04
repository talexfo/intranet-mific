@extends('plantilla')

@section('contenido')



    <h1 class="text-center">Directorio</h1>

   


<form action="directorio" method="GET"> 
    

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Buscar por</label>
        <div class="col-md-2">
            <select name="criterio" id="criterio" class="form-control">
                <option value="nombre">Nombre</option>
                <option value="email">email</option>
                <option value="oficina">Oficina</option>
                <option value="extension">Extensión</option>
            </select>
            
        </div>
        <div class="col-md-4">
<input class="form-control" type="text" name="buscar" >   
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </div>


</form>

<br><br>
<hr>



<table class="table table-hover">
    <thead>
<tr>
<th>Nombre</th>
<th>Email</th>  
<th>oficina</th>
<th>Extensión</th>

@if (auth()->check())
<th>Condición</th>
<th>Opciones</th>
@endif


</tr>
    </thead>
    <tbody>
        @foreach ($lista as $item)
            <tr>
            <td>{{ $item->nombre }}</td>
            <td>{{ $item->email }}</td>
            <td>{{$item->oficina}}</td>
            <td>{{$item->extension}}</td>
            
            @if (auth()->check())
            <td>
                @if ($item->condicion == 1)

                <span class="badge badge-success">Activo</span>
               
                    
                @else
                <span class="badge badge-danger">Inactivo</span>
                
                @endif






            <td>
            <a class="btn btn-warning btn-xs" href="{{ route('directorio.edit', $item->id )}}" >
                <i class="fa fa-pencil-square" aria-hidden="true"></i> Editar
            </a>
                

            @if($item->condicion == 0)
            <a class="btn btn-success btn-xs" href="directorio/activar/{{$item->id}}" >
                <i class="fa fa-check-circle" aria-hidden="true"></i> Activar</a>
            @else
            <a class="btn btn-danger btn-xs" href="directorio/desactivar/{{$item->id}}" >
                <i class="fa fa-minus-circle" aria-hidden="true"></i> Desactivar</a>
            @endif

            
            
            </td>
            @endif
            
            </tr>
        @endforeach

        {!! $lista->links() !!}



    </tbody>
</table>







<br><br>

@endsection