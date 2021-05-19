<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Fornecedores</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

	<div class="container" id="tamanhoContainer">
		<div style="text-align: right;">
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		</div>
		<h4>Formulário de Fornecedores</h4>
		<form action="_inserir_fornecedor.php" method="post" style="margin-top: 20px">
			<div class="form-group">
				<label >Descrição</label>
				<input type="text" class="form-control" name="nome_fornecedor" placeholder="insira o nome do fornecedor" required autocomplete="off">
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