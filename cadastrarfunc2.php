<?php
include('menu.php');
include('conexaobanco.php');

$matricula = $_POST['matricula'];
$nomefunc = $_POST['nomefunc'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];
$escala = $_POST['escala'];
$turno = $_POST['turno'];


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
<td>ESCALA</td>
<td>$escala</td>
</tr>

<tr>
<td>TURNO</td>
<td>$turno</td>
</tr>

</table>

";

$adicionar = "INSERT INTO funcionario(matricula, nomefunc, cpf, funcao, escala, turno) VALUES('".$matricula."', '".$nomefunc."', '".$cpf."', '".$funcao."', '".$escala."', '".$turno."')";

    $inserir = mysqli_query($conexaobanco, $adicionar);

if ($inserir) {
    echo "<br>Os dados do funcionário ".$nomefunc." foram cadastrados com sucesso! <br>
    <a href='cadastrarfunc.php'>Cadastrar outro funcionário</a><br>
    <a href='visaogeralfunc.php'>Conferir o Quadro de Funcionários</a>";
} else {
    echo "<br>Ocorreu um erro ao cadastrar dados. <br>
    <a href='cadastrarfunc.php'>Tentar novamente</a><br>
    <a href='visaogeralfunc.php'>Conferir o Quadro de Funcionários</a>";
}

?>