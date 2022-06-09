<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Quadro de Funcionários</title>
</head>

<body>

<!--MENU DA PÁGINA-->
<?php

include('menu.php')

?>


        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Quadro de Funcionários</h1>
        </header>
        <hr>
        <br>

    
    
    <!--CÓDIGO PHP - VISÃO GERAL DO ESTOQUE-->
    <?php

    include('conexaobanco.php');

    $sql = mysqli_query($conexaobanco, "SELECT * FROM funcionario");

        while ($dados = mysqli_fetch_array($sql)) {

            $matricula = $dados['matricula'];
            $nomefunc = $dados['nomefunc'];
            $cpf = $dados['cpf'];
            $funcao = $dados['funcao'];


            echo "
            <table border='1'>

            <tr>
            <td>MATRÍCULA</td>
            <td>$matricula</td>
            </tr>

            <tr>
            <td>NOME DO FUNCIONÁRIO</td>
            <td>$nomefunc</td>
            </tr>

            <tr>
            <td>CPF</td>
            <td>$cpf</td>
            </tr>

            <tr>
            <td>FUNÇÃO</td>
            <td>$funcao</td>
            </tr>

            </table>
            
            <br>            
            <a href='editarfunc.php?matricula=".$dados['matricula']."'>Editar dados</a> | 
            <a href='deletarfunc.php?matricula=".$dados['matricula']."'>Deletar dados</a> <br>

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