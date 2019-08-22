<?php
	include('../adm_header.php');
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/estilosServicios.css">

	<title>Lugares</title>
</head>
<main>
	
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select * from staff");
				$miconexion->consultaCrudpersonal();
			?>
		</section>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>