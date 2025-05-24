<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensagem = null;
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);

        if ($login === 'user' && $password === 'user456') {
            $mensagem = "Login realizado com sucesso!";
        } else {
            $mensagem = "Usuário ou senha inválidos!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Security</title>
</head>

<body>
    <form action="verificar_dados.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="login" placeholder="Usuário" required>
        <br>
        <input type="password" name="password" placeholder="Senha" required>
        <br>
        <input type="submit" value="Entrar">
        <br>
        <?php
        if (!empty($mensagem)) {
            echo $mensagem;
        }
        ?>
    </form>
</body>

</html>