<?php
include('menu.php');
include('conexaobanco.php');

$matricula = $_POST['matricula'];
$nomefunc = $_POST['nomefunc'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];
$senha = $_POST['senha'];

echo "<table border='3'>

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

<tr>
<td>SENHA</td>
<td>$senha</td>
</tr>

</table>

";

$adicionardados = "INSERT INTO funcionario(matricula, nomefunc, cpf, funcao, senha) VALUES('".$matricula."', '".$nomefunc."', '".$cpf."', '".$funcao."', '".$senha."')";

    $inserirdados = mysqli_query($conexaobanco, $adicionardados);

if ($inserirdados) {
    echo "<br>Os dados do funcionário ".$nomefunc." foram cadastrados com sucesso! <br>
    <a href='cadastrarfunc.php'>Cadastrar outro funcionário</a> | 
    <a href='visaogeralfunc.php'>Acessar ao Quadro de Funcionários</a>";
} else {
    echo "<br>Ocorreu um erro ao cadastrar dados
    <a href='cadastrarfunc.php'>Tentar novamente</a>";
}

?>