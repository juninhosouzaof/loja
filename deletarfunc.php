<?php

include('menu.php');   
include('conexaobanco.php');

$matricula = $_GET['matricula'];

$query = "DELETE FROM funcionario WHERE matricula = '$matricula'";

    $exclusao = $conexaobanco -> query($query);

if ($exclusao) {
    echo "Dados excluídos com sucesso. <br>
    <a href='visaogeralfunc.php'>Voltar ao Quadro de Funcionários";
} else {
    echo "Erro ao excluir dados.
    <a href='deletarfunc.php'>Tentar novamente | 
    <a href='visaogeralfunc.php'>Voltar ao Quadro de Funcionários";
}


?>