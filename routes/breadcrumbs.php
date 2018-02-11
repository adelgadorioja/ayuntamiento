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

// Inicio / Denuncias
Breadcrumbs::register('denuncias', function ($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->push('Denuncias', route('crearDenuncia'));
});

?>