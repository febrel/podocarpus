<?php
  include('../adm_header.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/estilosServicios.css">
<title>Nuevos Servicios</title>
<script src="ckeditor/ckeditor.js"></script>

</head>
<body>


	<h3 class="titulo">Nuevo Lugar</h3> 
  	<div class="main-container">
	  	<form action="nuevolug2.php" method="POST" enctype="multipart/form-data">
  		
  		<input  type="hidden" id="idLugar" name="idLugar" placeholder="Id Servicio"><br>

		<label>Nombre del Lugar</label>
  		<input class="text" type="text" id="nombre" name="nombre" placeholder="Nombre del lugar"><br>

		<label>Latitud</label>
  		<input class="text" type="text" id="latitud" name="latitud" placeholder="Latitud"><br>

		<label>Longitud</label>
  		<input class="text" type="text" id="longitud" name="longitud" placeholder="Longitud"><br>

		<label>Descripcion</label>
  		<input class="text" type="text" id="descrip" name="descrip" placeholder="Descripcion"><br>

  		<label>Sector</label>
  		<input class="text" type="text" id="sector" name="sector"  placeholder="Sector"><br>

		<label for="">Foto</label>

		<input type="file" class="form-control" accept="image/*" name="foto" id="foto">

		<br>

  		<input class="submi" type="submit" value="Guardar">

     </form>

  	</div>


  <br>

  <?php
  include('../adm_footer.php');
  ?>

<script >

	CKEDITOR.replace('descripcion');
</script>


</body>
</html>
