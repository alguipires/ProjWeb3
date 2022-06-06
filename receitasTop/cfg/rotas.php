<?php

$rotas = [
    /*comum */
    '/' => [
        'GET' => '\Controlador\RaizControlador#index',
    ],

    '/dashboard' => [
        'GET' => '\Controlador\RaizControlador#dashboard',
    ],

    '/login' => [
        'GET' => '\Controlador\LoginControlador#criar', /*login \criar - mostra formulario para fazer o login */
        'POST' => '\Controlador\LoginControlador#armazenar', /*armazenar- vai fazer o login em si */
        'DELETE' => '\Controlador\LoginControlador#destruir', /* \destruir- vai deslogar o usuario */
    ],
    
    /*usuarrios */
    '/usuarios' => [
        'POST' => '\Controlador\UsuariosControlador#armazenar', /*armazenar - qunado cria o usuario */
    ],

    '/usuarios/criar' => [
        'GET' => '\Controlador\UsuariosControlador#criar',/*buscar criar- mostra formulario para fazer criação de um novo usuario*/
    ],

    '/usuarios/?' => [
        'PATCH' => '\Controlador\UsuariosControlador#atualizar', /*atualizar - busca e edita o usuario */
    ],
    
    //comentarios verififcar
    '/usuarios/?/usuariosMeusComentarios' => [
        'PATCH' => '\Controlador\UsuariosControlador#usuariosMeusComentarios', /*atualizar - busca e edita o comentario */
    ],
    
    /*receitas */
    '/receitas' => [
        'POST' => '\Controlador\ReceitasControlador#armazenar', /*armazenar - quando uma cria a receita */
    ],

    '/receitas/criar' => [
        'GET' => '\Controlador\ReceitasControlador#criar', /*criar - mostra formulario para fazer criação de uma nova receita*/
    ],

    '/receitas/?' => [
        'GET' => '\Controlador\ReceitasControlador#index', /*index- ´pagina para listagem de uma receita*/
        'PATCH' => '\Controlador\ReceitasControlador#atualizar', /*atualizar - busca e edita a receita */
        'DELETE' => '\Controlador\ReceitasControlador#destruir', /*deleta a receita */
    ],

    //talvez criar uma rota para listar as receitas criadas pelo usuario uma vitrine com as receitas somente do usuario

];
