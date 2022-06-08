<?php

include('menu.php');

$matricula = $_POST['matricula'];

$sql = new mysqli_query($conexaobanco, "SELECT * FROM funcionario WHERE matricula = '$matricula'");


        while ($dados = mysqli_fetch_array($sql)) {
            $matricula = $dados['matricula'];
            $nomefunc = $dados['nomefunc'];
            $cpf = $dados['cpf'];
            $funcao = $dados['funcao'];
        }


?>