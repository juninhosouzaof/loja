<?php
include('menu.php');
include('conexaobanco.php');

$matricula = $_POST['matricula'];
$nomefunc = $_POST['nomefunc'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];

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

</table>

";

$adicionar = "INSERT INTO funcionario(matricula, nomefunc, cpf, funcao) VALUES('".$matricula."', '".$nomefunc."', '".$cpf."', '".$funcao."')";

    $inserir = mysqli_query($conexaobanco, $adicionar);

if ($inserir) {
    echo "<br>Os dados do funcionário ".$nomefunc." foram cadastrados com sucesso!
    <a href='cadastrarfunc.php'>Cadastrar outro funcionário</a>";
} else {
    echo "<br>Ocorreu um erro ao cadastrar dados
    <a href='cadastrarfunc.php'>Tentar novamente</a>";
}

?>