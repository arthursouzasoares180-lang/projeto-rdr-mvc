<?php

require_once __DIR__ . "/../models/Personagem.php";

class PersonagemController
{
    private $model;

    public function __construct()
    {
        $this->model = new Personagem();
    }

    public function listar()
    {
        return $this->model->listar();
    }

    public function cadastrar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = trim($_POST["nome"] ?? "");
            $faccao = trim($_POST["faccao"] ?? "");
            $habilidade = trim($_POST["habilidade"] ?? "");

            if ($nome == "" || $faccao == "" || $habilidade == "") {
                return "Preencha todos os campos.";
            }

            if ($this->model->cadastrar($nome, $faccao, $habilidade)) {
                header("Location: index.php");
                exit;
            }

            return "Erro ao cadastrar personagem.";
        }

        return "";
    }
}
