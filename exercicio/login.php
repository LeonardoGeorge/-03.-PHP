<?php
session_start();

    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
        $usuario = htmlspecialchars($_POST['usuario']);
        $senha = htmlspecialchars($_POST['password']);
        
        if ($usuario == 'Leonardo' && $senha == '2501') {
            $_SESSION['usuario'] = $usuario;
            
            if (!empty($_POST['tema'])){
                setcookie('tema', htmlspecialchars($_POST['tema']));
            }

            header('Location: welcome.php');
        } else {
            echo "Usuario ou senha invalidos";
            echo '<br>';
            echo '<a href="index.php">Tentar novamente</a>';
        }

    } else {
        echo 'Preencha todos os dados';
        echo '<br>';
        echo '<a href="index.php">Voltar</a>';
    }


?>