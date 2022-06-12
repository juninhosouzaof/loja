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
        <h1>Loja de Roupas - Cadastrar Novos Funcionários</h1>
    </header>
    <hr>
    <br>
    <!--FORMULÁRIO DE CADASTRO DE PRODUTOS-->
    <form action="cadastrarfunc2.php" method="post">

        <label>Matrícula: </label><input type="text" name="matricula" required="required"><br><br>
        <label>Nome do funcionário: </label><input type="text" name="nomefunc" required="required"><br><br>
        <label>CPF: </label><input type="text" name="cpf" required="required"><br><br>
        <label>Função: </label><input type="text" name="funcao" required="required"><br><br>
        <label>Nova senha: </label><input type="password" name="senha" required="required"><br><br>

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