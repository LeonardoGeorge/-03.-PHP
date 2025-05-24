<?php
session_start();

if (empty($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

if (!empty($_COOKIE['tema'])) {
    $tema = $_COOKIE['tema'];

    if ($tema == 'escuro') {
        $cor = '#444';
    } else {
        $cor = '#fff';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Secreta</title>

</head>

<body style="background-color:<?php $cor; ?>">

    <?php
    echo 'Bem-vindo ' . $_SESSION['usuario'];
    echo '<br>';
    echo '<a href="logout.php">Sair</a>';
    ?>

</body>

</html>