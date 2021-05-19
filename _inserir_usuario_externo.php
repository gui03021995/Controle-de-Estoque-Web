<?php 
include "conexao.php";
include "scripts/password.php";

$nomeUsuario = $_POST["nomeUsuario"];
$emailUsuario = $_POST["emailUsuario"];
$senhaUsuario = $_POST["senhaUsuario"];
//$nivelUsuario = $_POST["nivelUsuario"];
$status = "Inativo";

echo $sql = "INSERT INTO usuarios (nome_Usuario, email_Usuario, senha_Usuario, status) VALUES ('$nomeUsuario', '$emailUsuario', sha1('$senhaUsuario'), '$status')";

$inserir = mysqli_query($conexao,$sql);
?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; padding-top: 20px;">
	<center>
		<h3>Usuário adicionado com sucesso, esperando aprovação</h3>
		<div style="margin-top: 20px">
			<a href="cadastro_usuario_externo.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>
		</div>
	</center>
</div>