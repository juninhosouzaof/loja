<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Busca Refinada de Funcionários</title>
</head>


<?php

include('menu.php')

?>

    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Loja de Roupas - Busca Refinada de Funcionários</h1>
    </header>
    <hr>
    <br>

    <!--FORMULÁRIO DE BUSCA REFINADA-->

    <form action="" method="post">

        <label>Matrícula: </label><input type="text" name="matricula">

        <input type="submit" value="Buscar">

    </form>


<!--RESULTADO DA PESQUISA-->
<hr>

<?php

include('conexaobanco.php');

@$matricula = $_POST['matricula'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM funcionario WHERE matricula = '$matricula'");

    while ($dado = mysqli_fetch_array($sql)) {

        $matricula = $dado['matricula'];
        $nomefunc = $dado['nomefunc'];
        $cpf = $dado['cpf'];
        $funcao = $dado['funcao'];
        $escala = $dado['escala'];
        $turno = $dado['turno'];

        echo "<table border='3'>

        <tr>
        <td>Matrícula</td>
        <td>$matricula</td>
        </tr>
        
        <tr>
        <td>Nome</td>
        <td>$nomefunc</td>
        </tr>
        
        <tr>
        <td>CPF</td>
        <td>$cpf</td>
        </tr>
        
        <tr>
        <td>Função</td>
        <td>$funcao</td>
        </tr>
        
        <tr>
        <td>Escala</td>
        <td>$escala</td>
        </tr>

        <tr>
        <td>Turno</td>
        <td>$turno</td>
        </tr>


        </table>
        
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