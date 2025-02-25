<?php
namespace src\models;
use \core\Model;

class Lembrete extends Model {
    public int $id;
    public string $titulo;
    public string $corpo;
}