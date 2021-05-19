<?php

include 'conexao.php';
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style type="text/css">
		
		#tamanhoContainer
		{
			width: 500px;
			margin-top: 40px;
		}
		#botao{
			background-color: #FF1168; /* cor de fundo */
			color: #ffffff; /* cor da letra */
		}
	</style>

</head>
<body>

	<div class="container" id="tamanhoContainer">
		<h4>Formulário de cadastro</h4>
		<form action="_atualizar_produtos.php" method="post" style="margin-top: 20px">
			<?php 
			$sql = "SELECT id_estoque, nroproduto, nomeproduto, categoria, quantidade, fornecedor FROM curso_estoque.estoque WHERE id_estoque = $id";
			$buscar = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($buscar)) {
				$id_estoque = $array['id_estoque'];
				$nroproduto = $array['nroproduto'];
				$nomeproduto = $array['nomeproduto'];
				$categoria = $array['categoria'];
				$quantidade = $array['quantidade'];
				$fornecedor = $array['fornecedor'];

				?>


				<div class="form-group">
					<label >Nro. Produto</label>
					<input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" readonly>
					<input type="number" class="form-control" name="id" value="<?php echo $id_estoque ?>" style="display: none;">
				</div>
				<div class="form-group">
					<label >Nome Produto</label>
					<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
				</div>
				<div class="form-group">
					<label >Categoria</label>
					<select class="form-control" name="categoria" value="<?php echo $$categoria ?>">
						<option>Periféricos</option>
						<option>Hardwares</option>
						<option>Software</option>
						<option>Celulares</option>
					</select>
				</div>
				<div class="form-group">
					<label >Quantidade</label>
					<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
				</div>
				<div class="form-group">
					<label >Fornecedor</label>
					<select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
						<option>Fornecedor A</option>
						<option>Fornecedor B</option>
						<option>Fornecedor C</option>
					</select>
				</div>
				<div style="text-align: right;">
					<button id="botao" type="submit" class="btn btn-sm">Atualizar</button>
				</div>
				<?php
			} ?>

		</form>
	</div>
	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>