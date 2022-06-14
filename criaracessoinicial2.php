<?php

include('conexaobanco.php');

    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    echo " Acesse ao sistema utilizando as credenciais abaixo: 
        
             <br>

                <table border='3'>

                        <tr>
                        <td>MATRÍCULA PARA ACESSO</td>
                        <td><b>$matricula</b></td>
                        </tr>

                        <tr>
                        <td>SENHA</td>
                        <td><b>$senha</b></td>
                        </tr>

                </table>

            <br>

            OBS: É importante alterar a senha e atualizar os dados no caminho <b>MENU > FUNCIONÁRIOS > QUADRO DE FUNCIONÁRIOS > EDITAR DADOS</b> no campo correspondente às credenciais listadas acima. 
    ";

$adicionardados = "INSERT INTO funcionario(matricula, senha) VALUES('".$matricula."', '".$senha."')";

    $inserirdados = mysqli_query($conexaobanco, $adicionardados);

if ($inserirdados) {
    echo "<br>As credenciais de acesso para a matrícula ".$matricula." foram cadastradas com sucesso! <br>
    <a href='index.php'>Clique aqui para entrar no sistema</a>";
} else {
    echo "<br>Ocorreu um erro ao cadastrar dados. <br>
    <a href='criaracessoinicial.php'>Tentar novamente</a>";
}

?>