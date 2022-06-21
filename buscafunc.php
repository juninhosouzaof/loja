<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Quadro de Funcionários - Resultado da busca</title>
</head>


<body>
    <!--MENU DA PÁGINA-->
    <?php
    include('menu.php');

    ?>

        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Quadro de Funcionários</h1>
        </header>
        <hr>


<!--CÓDIGO PHP - AÇÃO DE BUSCA E RESULTADO DA BUSCA-->
<?php

include('conexaobanco.php');

$matricula = $_POST['matricula'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM funcionario WHERE matricula = '$matricula'");


    while ($dados = mysqli_fetch_array($sql)) {

        $matricula = $dados['matricula'];
        $nomefunc = $dados['nomefunc'];
        $cpf = $dados['cpf'];
        $funcao = $dados['funcao'];
        $escala = $dados['escala'];
        $turno = $dados['turno'];

        echo "


        <!--TÍTULO DA PÁGINA-->
        <header>
            <h3>Busca Refinada de Funcionários</h3>
        </header>
    
        <!--FORMULÁRIO DE BUSCA REFINADA-->
    
        <form action='buscafunc.php' method='post'>
    
            <label>Matrícula: </label><input type='text' name='matricula'>
    
            <input type='submit' value='Buscar'>
    
        </form>
        
        <br>
        <hr>


            <h3>Resultado da busca</h3>
            
                <table border='1'>

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

                </table>
            <br>";

    echo "<a href='editarfunc.php?matricula=".$matricula."'>Editar dados de ".$nomefunc."?</a>";
    echo " | ";
    echo "<a href='deletarfunc.php?matricula=".$dados['matricula']."'>Excluir dados de ".$nomefunc."?</a>";
    echo "<hr>";
    echo "<a href='visaogeralfunc.php'>Exibir o Quadro de Funcionários completo</a>";
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