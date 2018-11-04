<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directorio - MIFIC</title>
<link rel="stylesheet" href="/css/all.css">

<style>


</style>

</head>
<body>
    <header>

    {{-- <h1>{{  request()->url() }}</h1> --}}


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">WORKPLACE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->is('directorio') || request()->is('/') ? 'active': '' }}">
                   
                            <a class="nav-link" href="{{ route('directorio.index')}}">Directorio</a>
                        
            </li>

            @if (auth()->check())
            <li class="{{ request()->is('directorio/create')  ? 'active': '' }}">
                <a class="nav-link" href="{{ route('directorio.create')}}">Registrar Numero</a>
            </li>
        
            <li class="{{ request()->is('register') ? 'active': '' }}">
                <a class="nav-link" href="/register">Registrar Usuario</a>
            </li>  
            @endif

            
           
          </ul>
          <ul class="nav navbar-nav ml-auto">
                @if(auth()->guest())
                <li class="{{ request()->is('login') ? 'active': '' }}">
                    <a class="nav-link"  href="/login">Login</a>
                </li>
                                
            @endif
                
            @if(auth()->check())
            <li class="{{ auth()->check() ? 'active': '' }}">
                <a class="nav-link" href="/logout">Cerrar Sesión de {{ auth()->user()->email }}</a>
            </li>
      
            @endif
        </ul>
        </div>
      </nav>



       
    </header>


    
    <div class="container">
        
    @yield('contenido')
    {{-- <footer class="text-center"> {{date('Y')}}</footer> --}}
    </div>
    
    <script src="/js/all.js"></script>

</body>
</html>