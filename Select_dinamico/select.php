<?php
$tecnologias = ['PHP', 'HTML', 'CSS', 'JavaScript', 'Python'];

$opcoesValidas = ['PHP', 'JavaScript', 'Python'];

$erro = null;
$sucesso = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $option = $_POST['options'];

    if (count($option) == 2) {
       echo $option;
    } else {
        $erro = 'Selecione duas tecnologias';
        echo $erro;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linguagens de Programação</title>
</head>

<body>
    <h1>Selecionar Linguagem</h1>
    <form method="POST">
        <select name="options[]" multiple>
            <option value="PHP">PHP</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <input type="submit">
        </select>

    </form>
</body>

</html>