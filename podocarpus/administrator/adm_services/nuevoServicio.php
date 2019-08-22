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


	<h3 class="titulo">Nuevo Servicio</h3> 
  	<div class="main-container">
	  	<form action="nuevoServicio2.php" method="POST" enctype="multipart/form-data">
  		
  		<input  type="hidden" id="idServicio" name="idServicio" placeholder="Id Servicio"><br>

		<label>Nombre Servicio</label>
  		<input class="text" type="text" id="nombreServicio" name="nombreServicio" placeholder="Nombre Servicio"><br>

		<label>Inicio Temporada</label>
  		<input class="text" type="date" id="inicioTemporada" name="inicioTemporada" placeholder="Inicio Temporada"><br>

		<label>Fin Temporada</label>
  		<input class="text" type="date" id="finTemporada" name="finTemporada" placeholder="Fin Temporada"><br>

		<label>Capacidad</label>
  		<input class="text" type="text" id="capacidad" name="capacidad" placeholder="Capacidad"><br>

  		<label>Responsable</label>
  		<input class="text" type="text" id="responsable" name="responsable"  placeholder="Responsable"><br>

  		<label>Información </label>
		<textarea class="text"  id="descripcion" style="border-radius: 10px;" rows="3" cols="50" name="descripcion" ></textarea><br>

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
