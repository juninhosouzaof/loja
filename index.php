<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja de Roupas</title>
</head>

<body>

<?php
include('menu.php');
?>

        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Início</h1>
        </header>
        <hr>
        <br>


        <!--CONTEÚDO DA PÁGINA - TABELA DE OPÇÕES-->

        <table border='1'>

            <tr>
                <legend>Estoque</legend>
                <td><a href="cadastrarprod.php">Cadastro de produtos</a></td>
                <td><a href="visaogeralprod.php">Visão geral do estoque</a></td>
                <td><a href="buscaprod.php">Pesquisa refinada de produtos</a></td>
            </tr>
        </table>

        <br>

        <table border='1'>
            <legend>
                Funcionários
            </legend>
            <tr>
                <td><a href="cadastrarfunc.php">Cadastro de funcionários</a></td>
                <td><a href="visaogeralfunc.php">Quadro de funcionários</a></td>
                <td><a href="buscafunc.php">Pesquisa refinada de funcionários</a></td>
            </tr>

        </table>


        <!--RODAPÉ-->
        <br>
        <hr>
        <footer>
            <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
        </footer>
</body>

</html>