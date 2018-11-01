<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTRANET</title>
<link rel="stylesheet" href="/css/all.css">
<style>


</style>

</head>
<body>
    <header>

    {{-- <h1>{{  request()->url() }}</h1> --}}

    
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">INTRANET</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
             {{-- <li class="{{ request()->is('/') ? 'active': '' }}"><a  href="/">Inicio</a></li> --}}
            <li class="
            
            {{ request()->is('directorio') || request()->is('/') ? 'active': '' }}"><a  href="{{ route('directorio.index')}}">Directorio</a></li>
            
            @if (auth()->check())
            <li class="{{ request()->is('directorio/create')  ? 'active': '' }}"><a  href="{{ route('directorio.create')}}">Registrar Numero</a></li>
            <li><a class="{{ request()->is('register') ? 'active': '' }}" href="/register">Registrar Usuario</a></li>  
                
                @endif

           
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(auth()->guest())
                        <li><a class="{{ request()->is('login') ? 'active': '' }}" href="/login">Login</a></li>
                                        
                    @endif
                        
                    @if(auth()->check())
                    <li class="pull-right"><a href="/logout">Cerrar Sesión de {{ auth()->user()->email }}</a></li>
              
                    @endif
               
            </ul>


            
            
        </div><!-- /.navbar-collapse -->
    </nav>
    
     

       
    </header>


    
    <div class="container">
        
    @yield('contenido')
    {{-- <footer class="text-center"> {{date('Y')}}</footer> --}}
    </div>
    


</body>
</html>