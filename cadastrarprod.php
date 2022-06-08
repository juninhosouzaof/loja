<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja de Roupas - Cadastro de Produtos</title>
</head>

<?php

include('menu.php')

?>
    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Loja de Roupas - Cadastro de Produtos</h1>
    </header>
    <hr>
    <br>
    <!--FORMULÁRIO DE CADASTRO DE PRODUTOS-->
    <form action="cadastroprod2.php" method="post">

        <label>Código do produto: </label><input type="text" name="codigoprod"><br><br>
        <label>Descrição: </label><input type="text" name="descricao"><br><br>
        <label>Fornecedor: </label><input type="text" name="fornecedor"><br><br>
        <label>Preço unitário: </label><input type="text" name="precounitario"><br><br>
        <label>Quantidade (entrantes): </label><input type="text" name="quantentrada"><br><br>
        <label>Quantidade (saídos): </label><input type="text" name="quantsaida"><br><br>
        <label>Valor total (entrantes): R$ </label><input type="text" name="valorentrada"><br><br>
        <label>Valor total (saídos): R$ </label><input type="text" name="valorsaida"><br><br>

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