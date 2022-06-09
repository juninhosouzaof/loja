<?php
include('menu.php');
include('conexaobanco.php');

$codigoprod = $_POST['codigoprod'];
$descricao = $_POST['descricao'];
$fornecedor = $_POST['fornecedor'];
$precounitario = $_POST['precounitario'];
$quantentrada = $_POST['quantentrada'];
$quantsaida = $_POST['quantsaida'];
$valorentrada = $_POST['valorentrada'];
$valorsaida = $_POST['valorsaida'];

echo "
<table border='1'>

<tr>
<td>NOME</td>
<td>$codigoprod</td>
</tr>

<tr>
<td>DESCRIÇÃO</td>
<td>$descricao</td>
</tr>

<tr>
<td>FORNECEDOR</td>
<td>$fornecedor</td>
</tr>

<tr>
<td>PREÇO UNITÁRIO</td>
<td>$precounitario</td>
</tr>

<tr>
<td>ENTRADA NO ESTOQUE (QTD)</td>
<td>$quantentrada</td>
</tr>

<tr>
<td>SAÍDA DO ESTOQUE (QTD)</td>
<td>$quantsaida</td>
</tr>

<tr>
<td>ENTRADA NO ESTOQUE (R$)</td>
<td>$valorentrada</td>
</tr>

<tr>
<td>SAÍDA DO ESTOQUE (R$)</td>
<td>$valorsaida</td>
</tr>

<tr>
<td></td>
<td></td>
</tr>

</table>

";

$adicionar = "INSERT INTO estoque(codigoprod, descricao, fornecedor, precounitario, quantentrada, quantsaida, valorentrada, valorsaida) VALUES('".$codigoprod."', '".$descricao."', '".$fornecedor."', '".$precounitario."', '".$quantentrada."', '".$quantsaida."', '".$valorentrada."', '".$valorsaida."')";

    $inserir = mysqli_query($conexaobanco, $adicionar);

if ($inserir) {
    echo "<br>Os dados do produto ".$descricao." foram cadastrados com sucesso!
    <a href='cadastrarprod.php'>Cadastrar outro produto</a>";
} else {
    echo "<br>Ocorreu um erro ao cadastrar dados
    <a href='cadastrarprod.php'>Tentar novamente</a>";
}

?>