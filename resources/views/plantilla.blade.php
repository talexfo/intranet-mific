{{-- {{ dd(auth()->user()->roles) }} --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MIFIC</title>
<link rel="stylesheet" href="/css/all.css">

<style>


</style>

</head>
<body>
    <header>

    {{-- <h1>{{  request()->url() }}</h1> --}}


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">MIFIC</a>
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
        

            @if(auth()->user()->hasRoles(['superadmin']))
            <li class="{{ request()->is('register') ? 'active': '' }}">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                      <a class="dropdown-item" href="/usuarios">Listar</a>
                      <a class="dropdown-item" href="/register">Registrar Usuario</a>
                    </div>
                  </li>
            </li>  
            @endif  

            @endif

            
           
          </ul>
          <ul class="nav navbar-nav ml-auto">

                

                @if(auth()->guest())
                <li class="{{ request()->is('login') ? 'active': '' }}">
                    <a class="nav-link"  href="/login">Login</a>
                </li>
                                
            @endif
                
            @if(auth()->check())

            <li class="nav-item dropdown {{ auth()->check() ? 'active': '' }}">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->email }}
                    </a>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                            <a class="dropdown-item" href="/passords/reset">Cambiar Contraseña</a>
                        <a class="dropdown-item" href="/logout">Cerrar Sesión</a>
                      
                    </div>
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