<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e5738b623.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="file.js"></script>
    <title>Saúde Todes</title>
</head>

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "saudetodes";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
$sql = "SELECT * FROM postagens ORDER BY data DESC";
$resultado = mysqli_query($conexao, $sql);


// Loop 
while ($postagem = mysqli_fetch_assoc($resultado)) {
    if (file_exists('uploads/' . $postagem['imagem'])) {
        $imagem = 'uploads/' . $postagem['imagem'];
    } else {
        $imagem = 'src/default.jpg';
    }
    echo "<figure>";
    echo "<img class='foto01' src='" . $imagem . "' alt='" . $postagem['titulo'] . "'>";

    echo "<figcaption>" . $postagem['titulo'] . " - " . date('d/m/Y H:i:s', strtotime($postagem['data'])) . "</figcaption>";
    echo "</figure>";
}



// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>

<body>

    <div class="blog">
        <h1>Blog</h1>
        <div class="blog-imgs">
            <figure>
                <img src="src/default.jpg" class="foto01">
                
                <figcaption>consultoria / jul 21, 2022<br><b>Lorem Ipsum</b></figcaption>
            </figure>
            <figure>
                <img src="src/default.jpg" class="foto02">
                <figcaption>consultoria / jul 21, 2022<br><b>Lorem Ipsum</b></figcaption>
            </figure>
            <figure>
                <img src="src/default.jpg" class="foto03">
                <figcaption>consultoria / jul 21, 2022<br><b>Lorem Ipsum</b></figcaption>
            </figure>
        </div>
    </div>
    <div class="new-post">
    <a href="formulario.php"><button>Novo post</button></a>

    <form action="excluir.php" method="POST">
    <?php
    // exibir todas as postagens do usuário com caixas de seleção
    while ($postagem = mysqli_fetch_assoc($resultado)) {
        echo '<label>';
        echo '<input type="checkbox" name="ids[]" value="' . $postagem['id'] . '">'; 
        echo $postagem['titulo'];
        echo '</label>';
    }
    ?>
    <br>
    <button type="submit">Limpar</button>
</form>



</div>


    
</body>

</html>