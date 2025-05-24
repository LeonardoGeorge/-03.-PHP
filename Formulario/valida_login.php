<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_usuario = $_POST['nome_usuario'];
    $senha = $_POST['senha'];

    $arquivo = 'C:/xampp/htdocs/%2303.%20PHP/Formulario/usuarios.json';
    if (!file_exists($arquivo)) {
        die("Nenhum usuário cadastrado. <a href='cadastro.html'>Cadastre-se</a>");
    }

    $usuarios = json_decode(file_get_contents($arquivo), true);

    foreach ($usuarios as $usuario) {
        if ($usuario['nome_usuario'] === $nome_usuario && password_verify($senha, $usuario['senha'])) {
            echo "Login bem-sucedido. Bem-vindo, " . htmlspecialchars($usuario['nome_completo']) . "!";
            exit;
        }
    }

    die("Usuário ou senha inválidos. <a href='login.html'>Tentar novamente</a>");
} else {
    header('Location: login.html');
}
