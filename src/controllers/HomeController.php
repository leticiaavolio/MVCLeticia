<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['mensagem' => 'Hello World!!!']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        var_dump($args);
    }

    public function fimdi()
    {
        //aparecer imagem
        //echo "Graças a Deus, é Sexta-feira!!!!!!";
        $this->render('fimdi');
    }

}