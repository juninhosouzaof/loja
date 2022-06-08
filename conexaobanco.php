<?php

$conexaobanco = new mysqli('localhost', 'root', '', 'loja');

    if (!$conexaobanco) {
        die("Não foi possível conectar ao banco de dados.".mysqli_error()." <br>");
    }

?>