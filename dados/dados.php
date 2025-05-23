<?php
// Simulação de idetificação de redimencionamento.
// Simulação de enlace da campanha 3
// $_GET
// isset() - verifica se a variável existe, mas não verifica se está vazia
// !empty() - verifica se a variável existe e se está vazia
if (!empty($_GET['campanha'])){
    $numero_campanha = $_GET['campanha'];
    echo "<h1>Você veio da campanha $numero_campanha</h1>";
    echo "Bem-vindo a nossa página de dados!
      Aqui você encontrará informações detalhadas sobre nossas campanhas.";
} else {
    echo 'Variavel não definada ou vazia';    

}
?>