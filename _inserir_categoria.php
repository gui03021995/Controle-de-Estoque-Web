<?php

include "conexao.php";

$descricao = $_POST['descricao'];

$sql = "INSERT INTO `curso_estoque`.`categoria`(`descricao`) VALUES('$descricao')";

$Incluir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; padding-top: 20px;">
	<center>
		<h3>Categoria adicionada com sucesso!</h3>
		<div style="margin-top: 20px">
			<a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>
		</div>
	</center>
</div>