<?php
session_start();
$_SESSION['user'] = 'Leonardo';
$_SESSION['saldo'] = 51000;
echo 'Saldo Resetado';
?>