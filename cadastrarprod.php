<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja de Roupas - Cadastro de Produtos</title>
</head>

<!--MENU DO SITE-->
<?php
include('menu.php');

?>


    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Loja de Roupas - Cadastrar Novos Produtos</h1>
    </header>
    <hr>
    <br>


    <!--FORMULÁRIO DE CADASTRO DE PRODUTOS-->
    <form action="cadastrarprod2.php" method="post">

        <label>Código do produto: </label><input type="text" name="codigoprod" required="required"><br><br>
        <label>Descrição: </label><input type="text" name="descricao" required="required"><br><br>
        <label>Fornecedor: </label><input type="text" name="fornecedor" required="required"><br><br>
        <label>Preço unitário: R$ </label><input type="text" name="precounitario" required="required"><br><br>
        <label>Quantidade (entrantes): </label><input type="text" name="quantentrada" required="required"><br><br>

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