/*
O ataque "Homem do Meio" (Man-in-the-Middle, ou MITM) é quando um atacante intercepta a
comunicação entre duas partes sem que elas saibam.

Para se defender contra esse tipo de ataque em PHP, uma estratégia importante é usar 
HTTPS para criptografar a comunicação. Isso garante que os dados trocados entre o 
cliente e o servidor sejam protegidos.
*/

<?php
// Verifica se a conexão é HTTPS
if ($_SERVER['HTTPS'] != 'on') {

    //Redireciona para a versão HTTPS do site
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: ");
}

?>