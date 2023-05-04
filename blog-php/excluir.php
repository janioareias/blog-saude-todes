<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "saudetodes";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if (!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM postagens";

    if (mysqli_query($conexao, $sql)) {
        header('Location: index.php');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
?>
