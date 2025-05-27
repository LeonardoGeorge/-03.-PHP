<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $option = $_POST['options'];
    echo $option;
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
        <select name="options">
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