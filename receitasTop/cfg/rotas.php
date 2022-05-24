<?php

$rotas = [
    '/' => [
        'GET' => '\Controlador\PaginaInicialControlador#index',
    ],

    '/dashboard' => [
        'GET' => '\Controlador\PaginaInicialControlador#dashboard',
    ],

    '/login' => [
        'GET' => '\Controlador\LoginControlador#login',
        /*
        'POST' => '\Controlador\LoginControlador#armazenar',
        'DELETE' => '\Controlador\LoginControlador#destruir',*/
    ],

    
    '/usuarios' => [
        'GET' => '\Controlador\UsuarioControlador#buscar',
    ],
    
    /*verificar  */
    '/usuarios/usuariosMeusComentarios' => [
        'GET' => '\Controlador\UsuarioControlador#usuariosMeusComentarios',
    ],
    /*
    '/usuarios/criar' => [
        'GET' => '\Controlador\UsuarioControlador#criar',
    ],
    '/reclamacoes' => [
        'GET' => '\Controlador\ReclamacaoControlador#index',
        'POST' => '\Controlador\ReclamacaoControlador#armazenar',
    ],
    '/reclamacoes/?' => [
        'PATCH' => '\Controlador\ReclamacaoControlador#atualizar',
    ],
    '/reclamacoes/criar' => [
        'GET' => '\Controlador\ReclamacaoControlador#criar',
    ],*/
];
