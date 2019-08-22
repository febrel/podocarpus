<?php

extract($_GET);
include('../adm_header.php');
$miconexion->consulta("SELECT * FROM Lugares WHERE idLugares='".$no."' ");
$lista=$miconexion->consulta_lista();

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/estilosServicios.css">
<script src="ckeditor/ckeditor.js"></script>
<title>Modificar Lugar</title>

</head>
<body>

  <h3 class="titulo">Modificar Lugares</h3> 
  <div class="main-container">
	  <form action="modiflug2.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="no"  value="<?php echo $lista[0];?>" >

      <input  type="hidden" id="idLugares" name="idLugares" placeholder="Id Lugar"><br>

		<label>Nombre Servicio</label>
  		<input class="text" type="text" id="nombre" name="nombre" placeholder="Nombre Lugar" value="<?php echo $lista[1];?>"><br>

		<label>Longitud</label>
  		<input class="text" type="text" id="latitud" name="longitud" placeholder="Longitud" value="<?php echo $lista[2];?>"><br>

		<label>Latitud</label>
  		<input class="text" type="text" id="latitud" name="latitud" placeholder="Latitud" value="<?php echo $lista[3];?>"><br>

		<label>Descripcion</label>
  		<input class="text" type="text" id="descrip" name="descrip" placeholder="Descripcion" value="<?php echo $lista[4];?>"><br>

  		<label>Sector</label>
  		<input class="text" type="text" id="sector" name="sector"  placeholder="sector" value="<?php echo $lista[5];?>"><br>

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
