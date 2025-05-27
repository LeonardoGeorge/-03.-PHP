<?php
// Isso serve para previnir que existam mensagem assim que o formulario é aberto;


require 'function.php';
$verificado = null;
$erro = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto']; 
    echo $texto;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de input</title>
</head>

<body>
    <h1>Formulário</h1>

    <?php if (!empty($erro)) : ?>
        <p style="color:brown">
            <?= $erro; ?>
        </p>
    <?php endif; ?>



    <?php if (!empty($verificado)) : ?>
        <p style="color:green">
            <?= $verificado ?>
        </p>
    <?php endif; ?>


    <form method="POST">
        <input type="text" name="texto" placeholder="Digite aqui">
        <input type="submit" value="Enviar" />
    </form>


</body>

</html>