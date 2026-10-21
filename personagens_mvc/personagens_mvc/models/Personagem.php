<?php

require_once __DIR__ . "/../config/conexao.php";

class Personagem
{
    public function listar()
    {
        global $conn;

        $sql = "SELECT * FROM personagens ORDER BY nome";

        $resultado = mysqli_query($conn, $sql);

        $personagens = [];

        while ($linha = mysqli_fetch_assoc($resultado)) {
            $personagens[] = $linha;
        }

        return $personagens;
    }

    public function cadastrar($nome, $faccao, $habilidade)
    {
        global $conn;

        $sql = "INSERT INTO personagens
                (nome, faccao, habilidade)
                VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $nome,
            $faccao,
            $habilidade
        );

        return mysqli_stmt_execute($stmt);
    }
}
