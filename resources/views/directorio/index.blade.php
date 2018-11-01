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
                    <option value="oficina">Oficina</option>
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
                <span class="label label-success">Activo</span> 
               
                    
                @else
                <span class="label label-danger">Inactivo</span> 
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

<script>

var desactivar = function (id) {
    //  alert(id);
    $.ajax({
						type:'post',
						url: 'directorio/desactivar',
						data:{
							
							'id':id,
						},
						success:function(data){
                            alert( data );
							// window.location.reload();
						},
					});

}
</script>

    </tbody>
</table>







<br><br>

@endsection