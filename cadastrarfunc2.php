<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja de Roupas - Cadastro de Funcionários</title>
</head>

<body>

<!--MENU DO SITE-->
<?php
include('menu.php');

?>


        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Cadastrar Novos Funcionários</h1>
        </header>
        <hr>


<!--CÓDIGO PHP - RETORNO DE DADOS CADASTRADOS-->
<?php

include('conexaobanco.php');

$matricula = $_POST['matricula'];
$nomefunc = $_POST['nomefunc'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];
$escala = $_POST['escala'];
$turno = $_POST['turno'];
$senha = $_POST['senha'];

echo "

    <h3>Dados cadastrados:</h3>

    <table border='3'>
        <tr>
        <td>MATRÍCULA</td>
        <td><b>$matricula</b></td>
        </tr>

        <tr>
        <td>NOME DO FUNCIONÁRIO</td>
        <td><b>$nomefunc</b></td>
        </tr>

        <tr>
        <td>CPF</td>
        <td><b>$cpf</b></td>
        </tr>

        <tr>
        <td>FUNÇÃO</td>
        <td><b>$funcao</b></td>
        </tr>

        <tr>
        <td>ESCALA</td>
        <td><b>$escala</b></td>
        </tr>

        <tr>
        <td>TURNO</td>
        <td><b>$turno</b></td>
        </tr>

        <tr>
        <td>SENHA</td>
        <td><b>$senha</b></td>
        </tr>
    </table>

";

$adicionardados = "INSERT INTO funcionario(matricula, nomefunc, cpf, funcao, escala, turno, senha) VALUES('".$matricula."', '".$nomefunc."', '".$cpf."', '".$funcao."', '".$escala."', '".$turno."', '".$senha."')";

    $inserirdados = mysqli_query($conexaobanco, $adicionardados);

if ($inserirdados) {
    echo "<br><b>Os dados do funcionário ".$nomefunc." foram cadastrados com sucesso!</b> <br>
    <a href='cadastrarfunc.php'>Cadastrar outro funcionário</a> | 
    <a href='visaogeralfunc.php'>Acessar ao Quadro de Funcionários</a>";
} else {
    echo "<br><b>Ocorreu um erro ao cadastrar dados</b> <br>
    <button><a href='cadastrarfunc.php'>Tentar novamente</a></button>";
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