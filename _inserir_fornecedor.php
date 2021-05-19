<?php

include "conexao.php";

$nome_fornecedor = $_POST['nome_fornecedor'];

$sql = "INSERT INTO `curso_estoque`.`fornecedor`(`nome_fornecedor`) VALUES('$nome_fornecedor')";

$Incluir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; padding-top: 20px;">
	<center>
		<h3>Fornecedor adicionado com sucesso!</h3>
		<div style="margin-top: 20px">
			<a href="adicionar_fornecedor.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>
		</div>
	</center>
</div>