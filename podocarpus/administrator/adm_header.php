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
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/administrator/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
</head>
<body>
	<header>
		<h1><i class="fas fa-seedling"></i> DASHBOARD ADMINSITRATOR</h1>
		<nav class="top-menu">
			<div class="nameperfil"> <i class="fas fa-male"></i> <?php echo utf8_encode($_SESSION['nombre']);?></div>
			<a href=""><i class="fas fa-user-alt"></i> Perfir</a>
			<a href="<?php echo $site_url;?>/administrator/security/exit.php?salir=true"><i class="fas fa-power-off"></i> Salir</a>
		</nav>
	</header>
	<nav class="mainmenu">
		<a href="../">Dashboard</a>
		<a href="../adm_birds/index.php">Aves</a>
		<a href="../adm_notices/index.php">Noticias</a>
		<a href="../adm_services/index.php">Servicios</a>
		<a href="../adm_lugares/index.php">Lugares</a>
		<a href="../adm_staff/index.php">Personal</a>
		<a href="">Visitas</a>
		<a href="">Sensores</a>
		<a href="../adm_activities/index.php">Actividades</a>
	</nav>