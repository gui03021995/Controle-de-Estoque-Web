<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

	<div class="container" id="tamanhoContainer">
		<div style="text-align: right;">
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		</div>
		<h4>Formulário de cadastro</h4>
		<form action="_inserir_produtos.php" method="post" style="margin-top: 20px">
			<div class="form-group">
				<label >Nro. Produto</label>
				<input type="number" class="form-control" name="nroproduto" placeholder="insira o número do produto" required autocomplete="off">
			</div>
			<div class="form-group">
				<label >Nome Produto</label>
				<input type="text" class="form-control" name="nomeproduto" placeholder="insira o nome do produto" required autocomplete="off">
			</div>
			<div class="form-group">
				<label >Categoria</label>
				<select class="form-control" name="categoria">
					<?php

						include "conexao.php";
						$sql = "select * from categoria order by descricao asc";
						$buscar = mysqli_query($conexao,$sql);

						while ($array = mysqli_fetch_array($buscar)) {

							$id_categoria = $array['id_categoria'];
							$nome_categoria = $array['descricao'];
					?>

					<option><?php echo $nome_categoria; ?></option>

					<?php
						}
					?>

				</select>
			</div>
			<div class="form-group">
				<label >Quantidade</label>
				<input type="number" class="form-control" name="quantidade" placeholder="insira a quantidade do produto" required autocomplete="off">
			</div>
			<div class="form-group">
				<label >Fornecedor</label>
				<select class="form-control" name="fornecedor">
					<?php

						include "conexao.php";
						$sql2 = "select * from fornecedor order by nome_fornecedor asc";
						$buscar2 = mysqli_query($conexao,$sql2);

						while ($array2 = mysqli_fetch_array($buscar2)) {

							$id_fornecedor = $array2['id_fornecedor'];
							$nome_fornecedor = $array2['nome_fornecedor'];
					?>
					<option><?php echo $nome_fornecedor; ?></option>

					<?php
						}
					?>
				</select>
			</div>
			<div style="text-align: right;">
				<button id="botao" type="submit" class="btn btn-sm">Cadastrar</button>
			</div>
		</form>
	</div>
	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>