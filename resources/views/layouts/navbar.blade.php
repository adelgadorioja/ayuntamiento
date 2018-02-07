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
                    <a class="nav-link" href="inicio.php">inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="debates.php">debates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chats.php">chats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="denuncias.php">denuncias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="intercambios.php">intercambios</a>
                </li>
                <!--<?php
                    /*include 'funciones.php';
                    if(estaLogueado()) {
                        require 'menuConfiguracionUsuario.php';
                    } else {
                        require 'menuLogin.php';
                    }*/
               ?>-->
                <li class="nav-item">
                    <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                            Cerrar sesión
                        </button>
                    </form>
                </li>           
            </ul>
        </div>
    </div>
</nav>


        