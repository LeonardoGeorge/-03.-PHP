<?php 
// Simulando dados do Banco de Dados (array associativa)
$usersFromDatabase = [
    ["id" => 1, "name" => "João Silva", "email" => "joao@email.com"],
    ["id" => 2, "name" => "Pedro Silva", "email" => "pedro@email.com"],
    ["id" => 3, "name" => "Paulo Silva", "email" => "paulo@email.com"],

];


// Simulando dados de uma API (array associativo)
$apiResponse = [
    ["id" => 1, "location" => "São Paulo"],
    ["id" => 2, "location" => "Rio de Janeiro"],
    ["id" => 3, "location" => "Belo Horizonte"],
];


// Função para combinar os arrays com base no ID
function mergeUserData($usersFromDatabase, $apiResponse) {
    $combinedData = [];

    foreach ($usersFromDatabase as $user) {
        // Procurar a localização
        $location = "Não informado";
        foreach($apiResponse as $apiUser) {
            if ($user["id"] === $apiUser["id"]) {
                $location = $apiUser['location'];
                break;
            }
        }

        // Adicinar a localização ao array do usuario
        $combinedData[] = array_merge($user, ["location" => $location]);
    }

    return $combinedData;
    
}

// Chamando a função
$mergedUsers = mergeUserData($usersFromDatabase, $apiResponse);

// Exibindo os resultados
echo "<pre>";
echo var_dump($mergedUsers);



?>