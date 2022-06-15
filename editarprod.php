<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Edição de dados de produtos do estoque</title>
</head>
<body>

<!--MENU DO SITE-->
<?php
include('menu.php');

?>

<!--TÍTULO DA PÁGINA-->
<header>
    <h1>Loja de Roupas - Edição de dados de produtos do estoque</h1>
</header>
<hr>
<br>

<!--FORMULÁRIO DE EDIÇÃO DE DADOS-->
<?php

include('conexaobanco.php');



$codigoprod = $_GET['codigoprod'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM estoque WHERE codigoprod = '$codigoprod'");

$dado = mysqli_fetch_array($sql);

    if ($dado) {

        echo "

        <form action='editarprod2.php' method='post'>

    <table>
        <tr>
            <form>

                <table>

                    <tr>
                        <td>
                            <label>CÓDIGO DO PRODUTO</label>
                        </td>
                        <td>
                            <input type='text' name='codigoprod' value='".$dado['codigoprod']."'>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>DESCRIÇÃO</label>
                        </td>
                        <td>
                            <input type='text' name='descricao' value=".$dado['descricao'].">
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>FORNECEDOR</label>
                        </td>
                        <td>
                            <input type='text' name='fornecedor' value=".$dado['fornecedor'].">
                        </td>

                        <tr>
                            <td>
                                <label>PREÇO UNITÁRIO</label>
                            </td>
                            <td>
                                <input type='text' name='precounitario' value=".$dado['precounitario'].">
                            </td>
                        </tr>

                        <tr>
                        <td>
                            <label>ITENS ENTRANTES (QTD)</label>
                        </td>
                        <td>
                            <input type='text' name='quantentrada' value=".$dado['quantentrada'].">
                        </td>

                        </tr>

                        <tr>
                        <td>
                            <label>ITENS SAÍDOS (QTD)</label>
                        </td>
                        <td>
                            <input type='text' name='quantsaida' value=".$dado['quantsaida'].">
                        </td>
                        </tr>

                        <tr>
                        <td>
                            <label>ITENS ENTRANTES (R$)</label>
                        </td>
                        <td>
                            <input type='text' name='valorentrada' value=".$dado['valorentrada'].">
                        </td>
                        </tr>

                        <tr>
                        <td>
                            <label>ITENS SAÍDOS (R$)</label>
                        </td>
                        <td>
                            <input type='text' name='valorsaida' value=".$dado['valorsaida'].">
                        </td>
                        </tr>

                        <td><input type='submit' href='editarfunc2.php' value='Editar'></button>

                        </td>

                </table>

            </form>
        ";

    } else {

        echo "Dados não localizados.";

    }

?>

                <!--RODAPÉ-->
                <br>
                <hr>
                <footer>
                    <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
                </footer>
        
</body>
</html>