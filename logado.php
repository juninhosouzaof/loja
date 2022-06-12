<?php

if ((!isset($_SESSION['matricula']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);

    header('location: inicio.php');
}

$logado = $_SESSION['matricula'];

?>