<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/estilosServicios.css">

	<title>Lugares</title>
</head>
<body>

	<?php
       // conectar
	extract($_GET);
	include('../adm_header.php');
	$miconexion->consulta("SELECT * FROM lugares");
	$listaServicios=$miconexion->consultaCrudlugares();

	include('../adm_footer.php');

	?>

</body>
</html>
