<!DOCTYPE html>
<html>
<head>
	<title>VIsualizacion de datos de aves</title>
	<meta charset="utf-8">
	<meta name="description" content="Visualización de aves del Ecuador">
	<meta name="keywords" charset="aves, ecuador, turismo, loja, bird">
	<meta name="author" content="UTPL by @rlramirez">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />

</head>
<body>
	<header>
		<section class="top-menu"><button  onclick="myFunction()">REGISTER</button> | <button class="btn-abrir-popup" id="btnpopup">LOGIN</button></section>
		<h1>Bird Visualizations <span class="slogan">with HTML5 and CSS3</span></h1>
		<nav>
			<a href="" class="menuinicio">Home</a>
			<a href="#databases">Aves</a>
			<a href="#Notices">Noticias</a>
			<a href="#service">Servicios</a>
			<a href="#type">Lugares del parque</a>
			<a href="#contacts" >Personal encargado</a>
			<a href="#contacts" >Visitas</a>
			<a href="#contacts" >Sensores</a>
			<a href="#contacts" class="menufin">Actividades</a>
		</nav>
	</header>
	<div class="overlay" id="overlay">
		<div class="popup" id="popup">
			<a href="" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			<h3>LOGIN TO ADMIN</h3>
			<h4>To admin de data</h4>
			<form method="post" action="dll/validar.php">
				<div class="contenedor-inputs">
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="userpass" placeholder="Password">
				</div>
				<input type="submit" class="btn-submit" value="Login">
			</form>
		</div>
	</div>
<main>
	<section class="servicios">
		<a name="service"></a>
		<?php
		//LLamo sentencias
		include("dll/config.php");
		include("dll/class_mysqli.php");
		$miconexion = new clase_mysqli;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

		$miconexion->consulta("SELECT * FROM servicios ORDER BY id_servicios ASC  LIMIT 3");
		$listaServicios=$miconexion->consulta3Servicios();
		  
		?>

		<br><br>
			<h3><a href="servicios.php">Mas información</a></h3>
	</section>
	
	<section class="database">
		<a name="databases"></a>
		<h2>Database</h2>
	</section>
	<section class="tipos">
		<a name="type"></a>
		<h2>Type of Birds</h2>
		<section class="tipodetalle">
			<img src="images/service3.jpg">
			<h3>Recoleccion de datos</h3>
		</section>
		<section class="tipodetalle">
			<img src="images/service2.jpg">
			<h3>Recoleccion de datos</h3>
		</section>
		<section class="tipodetalle">
			<img src="images/service1.jpg">
			<h3>Recoleccion de datos</h3>
		</section>
	</section>
	<section class="contactos">
		<a name="contacts"></a>
		<h2>Contacts</h2>
	</section>
</main>
<footer>
	<h6>Creative Commons by @Ingeniería Web</h6>
</footer>
<script src="js/anime.js"></script>
</body>
</html>