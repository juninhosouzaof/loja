<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Exclusão de dados de produtos do estoque</title>
</head>
<body>

<?php

include('menu.php');   

?>

<!--TÍTULO DA PÁGINA-->
<header>
<h1>Loja de Roupas - Exclusão de dados de produtos do estoque</h1>
</header>
<hr>
<br>

<?php

include('conexaobanco.php');

@$codigoprod = $_POST['codigoprod'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM estoque");

while ($dados = mysqli_fetch_array($sql)) {

    $matricula = $dados['codigoprod'];
    $descricao = $dados['descricao'];

    echo "
    <br>
    Confirma a exclusão dos dados do produto <b>$descricao</b> / código <b>$codigoprod</b>? <br>
    <a href='deletarprod.php?codigoprod=".$dados['codigoprod']."'>Sim, excluir dados.</a> | 
    <a href='visaogeralprod.php'>Não, voltar à Visão Geral do Estoque</a> 
    <br>
    <hr>
    ";

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