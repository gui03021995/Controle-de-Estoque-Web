<?php 
include 'conexao.php';

$id = $_GET['id'];

$sql="DELETE FROM `curso_estoque`.`estoque` WHERE id_estoque=$id";

$Deletar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; padding-top: 20px;">
	<center>
		<h3>Deletado com sucesso!</h3>
		<div style="margin-top: 20px">
			<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>
		</div>
	</center>
</div>