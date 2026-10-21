<?php

// Para rodar no XAMPP, use estes dados:
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "bd_rdr2_mvc"
);

// Para o InfinityFree, troque pelos dados do painel (MySQL Databases):
// $conn = mysqli_connect(
//     "sqlXXX.infinityfree.com",
//     "if0_XXXXXXXX",
//     "SUA_SENHA_DO_PAINEL",
//     "if0_XXXXXXXX_rdr2"
// );

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

mysqli_set_charset($conn, "utf8mb4");

?>
