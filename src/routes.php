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

$router->get('/Lembretes/{id}', 'LembretesController@obterLembrete');