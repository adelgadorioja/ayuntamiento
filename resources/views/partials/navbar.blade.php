<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('imagenes/logo-01.svg')}}" height="80" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navegacion">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('home')}}">Inicio</a>
                </li>
                @if (Route::has('login')) @auth                   
                <li class="nav-item dropdown">
                     @if(Auth::user()->tipoUsuario == 1) 
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Noticias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('noticias/crear') }}">Crear Noticia</a>
                    </div>
                    @endif
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chats
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @if(Auth::user()->tipoUsuario == 1) 
                        <a class="dropdown-item" href="{{ url('chat/crear') }}">Crear ChatRoom</a>    
                    @else
                        <a class="dropdown-item" href="{{ url('chat/index') }}">Mostrar chat</a>
                    @endif
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Denuncias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @if(Auth::user()->tipoUsuario == 0) 
                        <a class="dropdown-item" href="{{ url('denuncias/crear') }}">Crear denuncia</a>
                        <a class="dropdown-item" href="{{ url('denuncias/denunciasUser') }}">Mostrar denuncias realizadas</a>
                    @else
                        <a class="dropdown-item" href="{{ url('denuncias/index') }}">Contestar denuncias</a>
                    @endif
                    </div>
                </li>
                <li class="nav-item">
                    <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                        {{ csrf_field() }}
                        <button type="submit" class="nav-link" style="display:inline;cursor:pointer">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
                @else
                 <li class="nav-item">
                    <a class="nav-link" href="{{url('noticias/index')}}">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrate</a>
                </li>
                @endauth @endif
            </ul>
        </div>


    </div>
</nav>