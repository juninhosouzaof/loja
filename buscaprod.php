<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Busca Refinada de Produtos</title>
</head>


<?php

include('menu.php')

?>

    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Loja de Roupas - Busca Refinada de Produtos</h1>
    </header>
    <hr>
    <br>

    <!--FORMULÁRIO DE BUSCA REFINADA-->

    <form action="buscaprod2.php" method="post">

        <label>Código do produto: </label><input type="text" name="codigoprod">

        <input type="submit" value="Buscar">

    </form>

        <!--RODAPÉ-->
        <br>
    <hr>
    <footer>
        <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
    </footer>

    </body>

</html>