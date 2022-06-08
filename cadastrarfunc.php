<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja de Roupas - Cadastro de Funcionários</title>
</head>

<?php

include('menu.php')

?>
    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Loja de Roupas - Cadastro de Funcionários</h1>
    </header>
    <hr>
    <br>
    <!--FORMULÁRIO DE CADASTRO DE PRODUTOS-->
    <form action="cadastrofunc2.php" method="post">

        <label>Matrícula: </label><input type="text" name="matricula"><br><br>
        <label>Nome do funcionário: </label><input type="text" name="nomefunc"><br><br>
        <label>CPF: </label><input type="text" name="cpf"><br><br>
        <label>Função: </label><input type="text" name="funcao"><br><br>

        <input type="submit" value="Cadastrar">

    </form>


    <!--RODAPÉ-->
    <br>
    <hr>
    <footer>
        <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
    </footer>

    </body>

</html>