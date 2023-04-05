<?php require "../bootstrap.php"; ?>
<h1>Register</h1>

<form action="../pages/forms/register.php" method="POST" role="form">

	<div class="form-group">
		<label for="">Nome</label>
		<input type="text" class="form-control" name="name" placeholder="Digite seu nome completo">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" name="email" placeholder="Digite seu email">
	</div>

	<div class="form-group">
		<label for="">Senha</label>
		<input type="text" class="form-control" name="password" placeholder="Digite sua senha">
	</div>

	

	<button style="margin-top: 10px;" type="submit" class="btn btn-primary">Registrar-se</button>
</form>