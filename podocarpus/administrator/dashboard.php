<?php
include("security/security.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<meta charset="utf-8">
	<meta name="description" content="Visualización de aves del Ecuador">
	<meta name="keywords" charset="aves, ecuador, turismo, loja, bird">
	<meta name="author" content="UTPL by @rlramirez">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
</head>
<body>
	<header>
		<h1><i class="fas fa-seedling"></i> DASHBOARD ADMINSITRATOR</h1>
		<nav class="top-menu">
			<div class="nameperfil"> <i class="fas fa-male"></i> <?php echo utf8_encode($_SESSION['nombre']);?></div>
			<a href=""><i class="fas fa-user-alt"></i> Perfir</a>
			<a href="security/exit.php?salir=true"><i class="fas fa-power-off"></i> Salir</a>
		</nav>
	</header>
	<nav class="mainmenu">
		<a href="dashboard.php">Dashboard</a>
		<a href="./adm_birds/index.php">Aves</a>
		<a href="../administrator/adm_notices/index.php">Noticias</a>
		<a href="../administrator/adm_services/index.php">Servicios</a>
		<a href="./adm_lugares/index.php">Lugares</a>
		<a href="./adm_staff/index.php">Personal</a>
		<a href="./adm_visitas/index.php">Visitas</a>
		<a href="">Sensores</a>
		<a href="./adm_activities/index.php">Actividades</a>


	</nav>
	<main>
		<section class="box-dashboard c1">
			<h3>Aves</h3>
			<p>+ 230 aves</p>
		</section>
		<section class="box-dashboard c2">
			<h3>Noticias</h3>
			<p>+ 2 Noticias</p>
		</section>
		<section class="box-dashboard c3">
			<h3>Servicios</h3>
			<p>+ 3 Servicios</p>
		</section>
		<section class="box-dashboard c4">
			<h3>Lugares</h3>
			<p>+ 21 Lugares</p>
		</section>
		<section class="box-dashboard c5">
			<h3>Personal</h3>
			<p>+ 11 Personal</p>
		</section>
		<section class="box-dashboard c6">
			<h3>Visitas</h3>
			<p>+ 21212 Visitas</p>
		</section>
		<section class="box-dashboard c7">
			<h3>Sensores</h3>
			<p>+ 300 Sensores</p>
		</section>
		<section class="box-dashboard c8">
			<h3>Actividades</h3>
			<p>+ 30 Actividaes</p>
		</section>
	</main>
	
	<footer>
		<h6>Derechos Reservados UTPL 2019</h6>
	</footer>
</body>
</html>