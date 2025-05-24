<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_completo = $_POST['nome_completo'];
    $nome_usuario = $_POST['nome_usuario'];
    $senha = $_POST['senha'];
    $senha_repetir = $_POST['senha_repetir'];
    $data_nascimento = $_POST['data_nascimento'];

    if ($senha != $senha_repetir) {
        die ("As senhas não coincidem. <a href='cadastro.html</a>'");
    }

    $dados = [
        'nome_completo' => $nome_completo,
        'nome_usuario' => $nome_usuario,
        'senha' => password_hash($senha, PASSWORD_DEFAULT),
        'data_nascimento' => $data_nascimento
    ];

    $arquivo = 'C:/xampp/htdocs/%2303.%20PHP/Formulario/usuarios.json';
    if (file_exists($arquivo)) {
        $usuarios = json_decode(file_get_contents($arquivo), true);
    } else {
        $usuario = [];
    }

    $$usuarios[] = $dados;

    echo "Cadastro realizado com sucesso. <a href='login.html'>Ir para o login</a>";
} else {
    header('Location: cadastro.html');
}
?>