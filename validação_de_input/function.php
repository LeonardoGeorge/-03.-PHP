<?php
function verificarErro($erro) {
    if (!empty($erro) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        return true;
    } else {
        return false;
    }
}

?>