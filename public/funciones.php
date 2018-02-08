<?php

    function iniciarSesion($usuario, $contrasena) {
        session_destroy();
        session_start();
        $_SESSION['usuario'] = $usuario;
    }

    function cerrarSesion() {
        session_destroy();
    }

    function estaLogueado() {
        if(isset($_SESSION['usuario'])) {
            return true;
        }
        return false;
    }

?>