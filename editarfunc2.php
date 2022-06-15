<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Edição de dados do funcionário</title>
</head>
<body>

<!--MENU DO SITE-->
<?php
include('menu.php');

?>

<!--TÍTULO DA PÁGINA-->
<header>
    <h1>Loja de Roupas - Edição de dados do funcionário</h1>
</header>
<hr>
<br>

<?php

include('conexaobanco.php');

$matricula = $_POST['matricula'];
$nomefunc = $_POST['nomefunc'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];
$escala = $_POST['escala'];
$turno = $_POST['turno'];
$senha = $_POST['senha'];

$sql = mysqli_query($conexaobanco, "UPDATE funcionario SET nomefunc = '$nomefunc' WHERE matricula = '$matricula'");

$sql2 = mysqli_query($conexaobanco, "UPDATE funcionario SET cpf = '$cpf' WHERE matricula = '$matricula'");

$sql3 = mysqli_query($conexaobanco, "UPDATE funcionario SET funcao = '$funcao' WHERE matricula = '$matricula'");

$sql4 = mysqli_query($conexaobanco, "UPDATE funcionario SET escala = '$escala' WHERE matricula = '$matricula'");

$sql5 = mysqli_query($conexaobanco, "UPDATE funcionario SET turno = '$turno' WHERE matricula = '$matricula'");

$sql6 = mysqli_query($conexaobanco, "UPDATE funcionario SET senha = '$senha' WHERE matricula = '$matricula'");

    if ($sql) {
        echo "Os dados do(a) funcionário(a) ".$nomefunc." foram alterados com sucesso! <br><a href='visaogeralfunc.php'>Voltar à Lista Geral de Colaboradores</a>";
    } else {
        echo "Ocorreu um erro ao alterar os dados do(a) funcionário(a). Tente novamente.";
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