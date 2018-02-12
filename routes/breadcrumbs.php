<?php

// Home
Breadcrumbs::register('inicio', function ($breadcrumbs) {
    $breadcrumbs->push('Inicio', route('inicio'));
});

// Inicio / Noticias
Breadcrumbs::register('noticias', function ($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->push('Noticias', route('mostrarNoticias'));
});

// Inicio / Chats
Breadcrumbs::register('chats', function ($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->push('Chats', route('mostrarChats'));
});

// Inicio / Crear denuncia
Breadcrumbs::register('denuncias', function ($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->push('Crear denuncia', route('crearDenuncia'));
});

// Inicio / Mostrar denuncias realizadas
Breadcrumbs::register('mostrarDenunciasUsuario', function ($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->push('Denuncias realizadas', route('mostrarDenunciasUsuario'));
});

// Inicio / Mostrar denuncias
Breadcrumbs::register('mostrarDenuncias', function ($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->push('Mostrar denuncias', route('mostrarDenuncias'));
});

?>