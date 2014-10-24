<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Catalogo Llantas</title>
		<link  rel="stylesheet" href="<?php  echo base_url(); ?>/css/bootstrap.css"/>
	</head>
	<body>
		<?php echo NAV();?>
		<div id="categoriacatalogo">
			<h4>Categorias</h4>
			<ul>
				<li><a>Marca</a></li>
				<li><a>Modelo</a></li>
				<li><a>Rin</a></li>
			</ul>
			<br />
			<h4>Precios</h4>
			<ul>
				<li><a>$20 - $30</a></li>
				<li><a>$30 - $40</a></li>
				<li><a>$40 - $50</a></li>
			</ul>
			<br />
		</div>
		<div></div>
	</body>
	
	<footer><?php echo FOO();?></footer>	
</html>