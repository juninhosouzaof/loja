<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Busca Refinada de Funcionários</title>
</head>


<?php

include('menu.php')

?>

    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Loja de Roupas - Busca Refinada de Funcionários</h1>
    </header>
    <hr>
    <br>

    <!--FORMULÁRIO DE BUSCA REFINADA-->

    <form action="buscafunc2.php" method="post">

        <label>Matrícula: </label><input type="text" name="matricula">

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