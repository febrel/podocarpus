<?php

extract($_GET);
include('../adm_header.php');
$miconexion->consulta("SELECT * FROM servicios WHERE id_servicios='".$no."' ");
$lista=$miconexion->consulta_lista();

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/estilosServicios.css">
<script src="ckeditor/ckeditor.js"></script>
<title>Modificar Servicio</title>

</head>
<body>

  <h3 class="titulo">Modificar Servicios</h3> 
  <div class="main-container">
	  <form action="modifServicio2.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="no"  value="<?php echo $lista[0];?>" >

      <input  type="hidden" id="idServicio" name="idServicio" placeholder="Id Servicio"><br>

		<label>Nombre Servicio</label>
  		<input class="text" type="text" id="nombreServicio" name="nombreServicio" placeholder="Nombre Servicio" value="<?php echo $lista[1];?>"><br>

		<label>Inicio Temporada</label>
  		<input class="text" type="text" id="inicioTemporada" name="inicioTemporada" placeholder="Inicio Temporada" value="<?php echo $lista[2];?>"><br>

		<label>Fin Temporada</label>
  		<input class="text" type="text" id="finTemporada" name="finTemporada" placeholder="Fin Temporada" value="<?php echo $lista[3];?>"><br>

		<label>Capacidad</label>
  		<input class="text" type="text" id="capacidad" name="capacidad" placeholder="Capacidad" value="<?php echo $lista[4];?>"><br>

  		<label>Responsable</label>
  		<input class="text" type="text" id="responsable" name="responsable"  placeholder="Responsable" value="<?php echo $lista[5];?>"><br>

  		<label>Información </label>
		<textarea class="text"  id="descripcion" style="border-radius: 10px;" rows="3" cols="50" name="descripcion" > <?php echo $lista[6];?></textarea><br>

		<label for="">Foto</label>

		<input type="file" class="form-control" accept="image/*" name="foto" id="foto" value="<?php echo $lista[7];?>">

		<br>
      <input type="submit" value="Modificar">
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
