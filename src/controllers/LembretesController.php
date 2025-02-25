<?php

namespace src\controllers;

use \core\Controller;
use src\models\Lembrete;

class LembretesController extends Controller
{

    public function Mensagem()
    {
        echo "Esta é a página de lembretes!";
    }
    public function page()
    {
        $this->render('lembretes');
    }
    public function model()
    {
        $lembrete = new Lembrete();
        $lembrete->id = 1;
        $lembrete->titulo = "Pagar Conta";
        $lembrete->corpo = "Pagar aluguel todo dia 10";
        var_dump($lembrete);
    }
    public function obterLembrete($params)
    {
        $user = "Juquinha";
        $perfil = "Colaborador";

        echo "Você chegou na página indivual dos lembretes e selecionou o lembrete de número " . $params['id'];

        $lembretes = [["id" => 1, "titulo" => "Pagar Conta", "corpo" => "Pagar aluguel todo dia 10"], ["id" => 2, "titulo" => "Estudar", "corpo" => "Lição de casa de matemática"], ["id" => 3, "titulo" => "Encontro", "corpo" => "Encontro do grupinho maravilha no Botequim"]];

        $this->render('lembretes', ["user" => $user, "perfil" => $perfil, "lembretes" => $lembretes]);
    }
}
