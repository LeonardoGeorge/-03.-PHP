<?php 
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === 'Leonardo' && $password == '123456'){
        echo "Bem-vindo, $login!";
    } else {
        echo "Acesso negado!";
    }

}
  
?>