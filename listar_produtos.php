<!DOCTYPE html>
<html>
<head>
	<title>Listagem de produtos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/8e864d6a50.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 40px">
		<div style="text-align: right;">
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		</div>
		<h3>Lista de Produtos</h3>
		<br>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nro. Produto</th>
					<th scope="col">Nome Produto</th>
					<th scope="col">Categoria</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "conexao.php";

				$sql = "SELECT id_estoque, nroproduto, nomeproduto, categoria, quantidade, fornecedor FROM curso_estoque.estoque";
				$busca = mysqli_query($conexao,$sql);

				while ($array = mysqli_fetch_array($busca)) {
					$id_estoque = $array['id_estoque'];
					$nroproduto = $array['nroproduto'];
					$nomeproduto = $array['nomeproduto'];
					$categoria = $array['categoria'];
					$quantidade = $array['quantidade'];
					$fornecedor = $array['fornecedor'];

					?>
					<tr>
						<td><?php echo $nroproduto; ?></td>
						<td><?php echo $nomeproduto; ?></td>
						<td><?php echo $categoria; ?></td>
						<td><?php echo $quantidade; ?></td>
						<td><?php echo $fornecedor; ?></td>
						<td>
							<a href="editar_produto.php?id=<?php echo $id_estoque ?>" class="btn btn-warning btn-sm" style="color: #ffffff" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>


							<a href="deletar_produto.php?id=<?php echo $id_estoque ?>" class="btn btn-danger btn-sm" style="color: #ffffff" role="button"><i class="far fa-trash-alt"></i></i>&nbsp;Excluir</a>


						</td>
					</tr>
					<?php 
				}
				?>
			</tbody>
		</table>
	</div>
	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>