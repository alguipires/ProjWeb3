<?php

$rotas = [
    '/' => [
        'GET' => '\Controlador\RaizControlador#index',
    ],

    '/dashboard' => [
        'GET' => '\Controlador\RaizControlador#dashboard',
    ],

    '/login' => [
        'GET' => '\Controlador\LoginControlador#login',
        /*
        'POST' => '\Controlador\LoginControlador#armazenar',
        'DELETE' => '\Controlador\LoginControlador#destruir',*/
    ],

    '/usuarios' => [
        'GET' => '\Controlador\UsuariosControlador#buscar',
    ],

    '/usuarios/criar' => [
        'GET' => '\Controlador\UsuariosControlador#criar',
    ],
    
    /*verificar  *//*
    '/usuarios/usuariosMeusComentarios' => [
        'GET' => '\Controlador\UsuariosControlador#usuariosMeusComentarios',
    ],

    */




    // REST
    '/contatos' => [
        'GET' => '\Controlador\ContatoControlador#index',
        'POST' => '\Controlador\ContatoControlador#armazenar',
    ],
    // REST
    '/contatos/?' => [
        'GET' => '\Controlador\ContatoControlador#mostrar',
        'PATCH' => '\Controlador\ContatoControlador#atualizar',
        'DELETE' => '\Controlador\ContatoControlador#destruir',
    ],
    // NÃO INCLUSO NO REST
    '/contatos/criar' => [
        'GET' => '\Controlador\ContatoControlador#criar',
    ],
    // NÃO INCLUSO NO REST
    '/contatos/?/editar' => [
        'GET' => '\Controlador\ContatoControlador#editar',
    ],

];
