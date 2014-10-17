<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
			<link  rel="stylesheet" href="<?php  echo base_url(); ?>/css/bootstrap.css"/>
		<link  rel="stylesheet" href="<?php  echo base_url(); ?>/css/css.css"/>
	</style>
</head>
<body>

	<div class="wrapper">
			<form class="form-signin">
				<div  class="bar">
					<h3>Registro al Sistema</h3>
					
				</div>

				<img width="300PX" src="<?php  echo base_url('/imgs/sidecomlogo.jpg'); ?>" alt="lOGO" class="img-rounded">
				
				
				<input type="text" class="form-control" name="username" placeholder="Ingrese su correo" required="" autofocus="" />
				<input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/>
				<br>

				<button class="btn btn-lg btn-success btn-block" type="submit">
					Entrar
				</button>
			</form>
		</div>

</body>
</html>