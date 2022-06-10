<?php

include('conexaobanco.php');

$matricula = $_POST['matricula'];
$nomefunc = $_POST['nomefunc'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];
$escala = $_POST['escala'];
$funcao = $_POST['turno'];

$sql = mysqli_query($conexaobanco, "UPDATE funcionario SET nomefunc = '$nomefunc' WHERE matricula = '$matricula'");
$sql1 = mysqli_query($conexaobanco, "UPDATE funcionario SET cpf = '$cpf' WHERE matricula = '$matricula'");
$sql2 = mysqli_query($conexaobanco, "UPDATE funcionario SET funcao = '$funcao' WHERE matricula = '$matricula'");
$sql3 = mysqli_query($conexaobanco, "UPDATE funcionario SET escala = '$escala' WHERE matricula = '$matricula'");
$sql4 = mysqli_query($conexaobanco, "UPDATE funcionario SET turno = '$turno' WHERE matricula = '$matricula'");

    if ($sql) {
        echo "Os dados do(a) funcionário(a) ".$nomefunc." foram alterados com sucesso!";
    } else {
        echo "Ocorreu um erro ao alterar os dados do(a) funcionário(a)."
    }


?>