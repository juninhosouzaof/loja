<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Edição de dados do funcionário</title>
</head>
<body>

<!--MENU DA PÁGINA-->
<?php
include('menu.php');
?>

<!--TÍTULO DA PÁGINA-->
<header>
    <h1>Loja de Roupas - Edição de dados do funcionário</h1>
</header>
<hr>
<br>

<!--FORMULÁRIO DE EDIÇÃO DE DADOS-->
<?php

include('conexaobanco.php');


$matricula = $_GET['matricula'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM funcionario WHERE matricula = '$matricula'");

$dado = mysqli_fetch_array($sql);

    if ($dado) {

        echo "

            <form action='editarfunc2.php' method='post'>
            
                <table>

                    <tr>
                        <td>
                            <label>MATRÍCULA</label>
                        </td>
                        <td>
                            <input type='text' name='matricula' value='".$dado['matricula']."'>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>NOME</label>
                        </td>
                        <td>
                            <input type='text' name='nomefunc' value=".$dado['nomefunc'].">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>CPF</label>
                        </td>
                        <td>
                            <input type='text' name='cpf' value=".$dado['cpf'].">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>FUNÇÃO</label>
                        </td>
                        <td>
                            <input type='text' name='funcao' value=".$dado['funcao'].">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>ESCALA</label>
                        </td>
                        <td>
                            <input type='text' name='escala' value=".$dado['escala'].">
                        </td>
                        </tr>

                    <tr>
                        <td>
                            <label>TURNO</label>
                        </td>
                        <td>
                            <input type='text' name='turno' value=".$dado['turno'].">
                        </td>
                        </tr>

                    <tr>
                        <td>
                            <label>SENHA</label>
                        </td>
                        <td>
                            <input type='password' name='senha' value=".$dado['senha'].">
                        </td>
                    </tr>

                    
                    <tr>
                        <td><input type='submit' href='editarfunc2.php' value='Editar'></button></td>
                    </tr>

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