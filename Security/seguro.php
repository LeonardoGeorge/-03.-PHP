<?php
session_start();

// Detrminando número de tentativas.  
$max_requests = 3;


// Iniciando contador na sessão
if (!isset($_SESSION['login_requests'])) {
    $_SESSION['login_requests'] = 0;
}

$senha_correta = '*01071996*';

// Bloqueio
if ($_SESSION['login_requests'] >= $max_requests) {
    echo "Você excedeu o número de tentativas! <br>
    Contate seu banco.";
    exit;
}

// Simulação
if (isset($_POST['senha'])) {
    $senha = $_POST['senha'];

    if ($senha === $senha_correta) {
        //Login okay
        $_SESSION['login_requests'] = 0;
        echo "Transação efetuada com sucesso!";
    } else {
        // Senha incorreta
        $_SESSION['login_requests']++;
        $tentativas_restantes = $max_requests - $_SESSION['login_requests'];
        echo "Senha incorreta! Você tem mais $tentativas_restantes tentativa(s).";
    } 
} else {
    echo
    '<form method="POST">
            Senha: <input type="password" name="senha" />
            <button type="submit">Entrar</button>
        </form>';
}
?>