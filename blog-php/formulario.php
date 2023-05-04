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
    <title>Saúde Todes</title>
</head>

<body>
    <h1>Novo Post</h1>
    <form method="post" action="processa_postagem.php" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>
        <label for="texto">Texto:</label>
        <textarea id="texto" name="texto" required></textarea><br><br>
        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem" accept="image/*" required><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>
