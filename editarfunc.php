<?php

include('menu.php');
include('conexaobanco.php');

$matricula = $_GET['matricula'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM funcionario WHERE matricula = '$matricula'");

$dado = mysql_fetch_array($sql, $conexaobanco);

    if ($dado) {
        echo "
        <form action='editarfunc2.php' method='post'>

        <table>

            <tr>
                <td>
                    <input type='text' name='matricula' value='".$dado['matricula']."'>
                </td>
            </tr>

            <tr>
                <td>
                    <input type='text' name='nomefunc' value='".$dado['nomefunc']."'>
                </td>
            </tr>

            <tr>
                <td>
                    <input type='text' name='cpf' value='".$dado['cpf']."'>
                </td>
            </tr>


            <tr>
                <td>
                    <input type='text' name='funcao' value='".$dado['funcao']."'>
                </td>
            </tr>

            <tr>
                <td>
                    <input type='text' name='escala' value='".$dado['escala']."'>
                </td>
            </tr>
            </tr>

            <tr>
                <td>
                    <input type='text' name='turno' value='".$dado['turno']."'>
                </td>
            </tr>
            </tr>

            <td>
                <button type='submit'>Editar</button>
            </td>
            </tr>

        </table>

    </form>
        ";
    } else {
        echo "Ocorreu um erro ao localizar os dados.";
    }

?>