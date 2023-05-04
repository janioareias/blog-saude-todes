<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "saudetodes";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se a conexão foi bem sucedida
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Prepara as variáveis para inserção no banco de dados
$titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
$texto = mysqli_real_escape_string($conexao, $_POST['texto']);
$imagem = $_FILES['imagem']['name'];
$data = date("Y-m-d H:i:s");


$diretorio = "uploads/";
if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $imagem)) {

   
    $sql = "INSERT INTO postagens (titulo, texto, imagem, data) VALUES ('$titulo', '$texto', '$imagem', '$data')";
    if (mysqli_query($conexao, $sql)) {
        echo "Postagem criada com sucesso!";
        $foto_num = 1; 
        ${"foto_class".$foto_num} = "foto".$foto_num; //+
        $foto_num++;//+


    } else {
        echo "Erro ao criar postagem: " . mysqli_error($conexao);
    }
} else {
    echo "Erro ao fazer upload da imagem.";
}

mysqli_close($conexao);
header("Location: index.php");
exit();

?>

