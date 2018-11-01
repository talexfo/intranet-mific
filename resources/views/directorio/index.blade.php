@extends('plantilla')

@section('contenido')



    <h1 class="text-center">Directorio</h1>

<form action="directorio" method="GET"> 
    <div class="form-group">
        
            <label for="" class="col-md-1">Buscar por:</label>
            <div class="col-md-3">
            <select name="criterio" id="criterio" class="form-control">
                    <option value="nombre">Nombre</option>
                    <option value="email">email</option>
                    <option value="area">Area</option>
                    <option value="extension">Extensión</option>
                </select>
           
        </div>
            <div class="col-md-4">
                    <input type="text" name="buscar" id="buscar"  class="form-control input-sm">
                 </div>
                 <div class="col-md-4">
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
<th>Area</th>
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
            <td>{{$item->area}}</td>
            <td>{{$item->extension}}</td>
            
            @if (auth()->check())
            <td>
                @if ($item->condicion == 1)
                <span class="label label-success">Activo</span> 
               
                    
                @else
                <span class="label label-danger">Inactivo</span> 
                @endif






            <td>
            <a href="{{ route('directorio.edit', $item->id )}}" class="btn btn-warning">Editar</a>
                
            <form style="display:inline" action="{{route('directorio.destroy', $item->id)}}" method="POST">
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
            
            </td>
            @endif
            
            </tr>
        @endforeach

        {!! $lista->links() !!}
    </tbody>
</table>







<br><br>

@endsection