<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');



$router->get('/fimdi', 'HomeController@fimdi');
$router->get('/Msg', 'LembretesController@Mensagem');
$router->get('/Lembretes', 'LembretesController@page');
$router->get('/Lembretes/modelo', 'LembretesController@model');



$router->get('/lembretes/novo', 'LembretesController@add');
$router->post('/lembretes/novo', 'LembretesController@addAction');

$router->get('/lembretes/{id}', 'LembretesController@obterLembrete');