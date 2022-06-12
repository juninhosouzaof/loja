<?php

session_start();

$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

    include('conexaobanco.php');

        $sql = mysqli_query($conexaobanco, "SELECT * FROM funcionario WHERE matricula = '$matricula' AND senha = '$senha'");

            if (mysqli_num_rows($sql) > 0) {
                $_SESSION['matricula'] = $matricula;
                $_SESSION['senha'] = $senha;

                header('location: inicio.php');
            
            } else {

                unset($_SESSION['matricula']);
                unset($_SESSION['senha']);
    
                echo "Login ou senha inválidos.
                <br>
                <a href='index.php'>Tentar novamente</a>";
            }

?>