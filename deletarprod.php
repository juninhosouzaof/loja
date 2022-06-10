<?php

include('menu.php');   
include('conexaobanco.php');

$codigoprod = $_GET['codigoprod'];

$query = "DELETE FROM estoque WHERE codigoprod = '$codigoprod'";

    $exclusao = $conexaobanco -> query($query);

if ($exclusao) {
    echo "Dados excluídos com sucesso. <br>
    <a href='visaogeralprod.php'>Voltar à Visão Geral do Estoque";
} else {
    echo "Erro ao excluir dados.
    <a href='deletarprod.php'>Tentar novamente | 
    <a href='visaogeralprod.php'>Voltar à Visão Geral do Estoque";
}


?>