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

@$matricula = $_GET['matricula'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM funcionario WHERE matricula = '$matricula'");

while ($dados = mysqli_fetch_array($sql)) {

    $matricula = $dados['matricula'];
    $nomefunc = $dados['nomefunc'];

    echo "
    <br>
    Confirma a exclusão dos dados do funcionário <b>$nomefunc</b> / matrícula <b>$matricula</b>? <br>
    <a href='deletarfunc.php?matricula=".$dados['matricula']."'>Sim, excluir dados.</a> | 
    <a href='visaogeralfunc.php'>Não, voltar ao Quadro de Funcionários</a> 
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