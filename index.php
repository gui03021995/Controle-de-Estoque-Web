<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, user scalable-no" />
	<title>Tela de login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

	<div class="container" style="width: 350px;	margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;-webkit-box-shadow: 10px 10px 22px 0px rgba(161,150,161,1); -moz-box-shadow: 10px 10px 22px 0px rgba(161,150,161,1); box-shadow: 10px 10px 22px 0px rgba(161,150,161,1);">
		<div style="padding: 10px">
			<center>
				<img src="img/cadeado.png" width="125px" height="125px">
			</center>
			<form>
				<div class="form-group">
					<label>Usuário</label>
					<input type="text" name="usuario" class="form-control" placeholder="Digite o nome do usuário" autocomplete="off" required="Informe o nome do usuário!">
					<label>Senha</label>
					<input type="password" name="usuario" class="form-control" placeholder="Digite a senha" autocomplete="off" required="Informe um senha!">
				</div>
			</form>
			<div style="text-align: right;">
				<button type="submit" class="btn btn-sm btn-success">Entrar</button>
			</div>
		</div>
	</div>
<div style="margin-top: 10px">
<center>
	<small><p>Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui</a></p></small>
</center>
</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>