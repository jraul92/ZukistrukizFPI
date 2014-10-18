<?php
 
function NAV()
{
     $nav = '<nav class="navbar navbar-default" role="navigation">
			<!-- El logotipo y el icono que despliega el menú se agrupan
			para mostrarlos mejor en los dispositivos móviles -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-ex1-collapse">
					<span class="sr-only">Desplegar navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Logotipo</a>
			</div>

			<!-- Agrupar los enlaces de navegación, los formularios y cualquier
			otro elemento que se pueda ocultar al minimizar la barra -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Nosotros</a>
					</li>
					<li>
						<a href="#">Galeria</a>
					</li>
					<li>
						<a href="#">Carrito</a>
					</li>
					<li>
						<a href="#">compras</a>
					</li>
					<li>
						<a href="#">Reportes</a>
					</li>
					<li>
						<a href="#">Mantenimientos</a>
					</li>

				</ul>
			</div>
		</nav>
    ';
    return $nav;
}

?>