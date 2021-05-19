<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

	<div class="container" id="tamanhoContainer">
		<div style="text-align: right;">
			<a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
		</div>
		<h4>Cadastro de Usuários</h4>
		<form method="post" action="_inserir_usuario_externo.php">
			<div class="form-group">
				<label>Nome usuário</label>
				<input type="text" name="nomeUsuario" class="form-control" required autocomplete="off" placeholder="Nome completo">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" name="emailUsuario" class="form-control" required autocomplete="off" placeholder="Seu e-mail">
			</div>
			<div class="form-group">
				<label>Senha usuário</label>
				<input id="txtSenha" type="password" name="senhaUsuario" class="form-control" required autocomplete="off" placeholder="Sua senha">
			</div>
			<div class="form-group">
				<label>Repetir a senha</label>
				<input type="password" name="confirmaSenhaUsuario" class="form-control" required autocomplete="off" placeholder="Confirme a sua senha" oninput="validarSenha(this)">
				<small>Precisa ser igual a senha digitada acima.</small>
			</div>
			<div style="text-align: right;">
				<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function validarSenha (input)
		{
			if (input.value != document.getElementById('txtSenha').value)
			{
				input.setCustomValidity('Repita a senha corretamente');
			} else {
				input.setCustomValidity('');
			}
		}
	</script>
</body>
</html>