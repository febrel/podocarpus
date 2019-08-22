<?php
EliminarServicios($_GET['no']);

function EliminarServicios($no)

{
	 include('../adm_header.php');
	
	//Elimina la foto de base de datos y de imagenes
	$foto_db = mysqli_fetch_array($miconexion->consulta("SELECT galeria FROM staff WHERE id='" . $no . "' "));
	$ruta_foto_db = "../../images/" . $foto_db['galeria'];

	//Si existe la elimina
	 if (isset($foto_db['galeria']) && ( $foto_db['galeria'] != "imagen.png")) {
		 	if (file_exists($ruta_foto_db)) {
				if ($servicio["galeria"] != "imagen.png") {
						unlink($ruta_foto_db);
				}
	 	}

	 }



	//Procede a borrar base datos
	$miconexion->consulta("DELETE FROM staff WHERE id='" . $no . "' ");
	
}
?>

<script type="text/javascript">
	alert("Eliminado!!");
	window.location.href = 'index.php';
</script>
