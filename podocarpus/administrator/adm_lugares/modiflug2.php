<?php

	Modificarlugar($_POST['no'], $_POST['nombre'], $_POST['latitud'], $_POST['longitud'], $_POST['descrip'], $_POST['sector'], $_FILES['foto']["name"]);

	function Modificarlugar($no, $nombre, $latitud, $longitud, $descrip, $sector,  $foto){
		
			include('../adm_header.php');

			$miconexion->consulta("UPDATE lugares SET nombre='".$nombre."', latitud='".$latitud."', longitud='".$longitud."' , descripcion='".$descrip."' , sector='".$sector."'  WHERE idLugares='".$no."' ");
		
				//Para la administracion de foto utilizo fecha para controlar poblema nombre, te agrega un nuevo nombre con fecha y si no te deja el por defecto
        $fecha = new DateTime();
        //Validar foto, sea diferente de vacios, y se concantena _ con la fecha
        //Si hay una foto real concatenas la fecha y su nombre, de lo contrario conserva el valor de foto por defecto
        $nombreArchivo = ($foto != "") ? $fecha->getTimestamp() . "_" . $_FILES["foto"]["name"] : "imagen.png";
        //Nombre que php devulve cuando se selecione
        $tmpFoto = $_FILES["foto"]["tmp_name"];

        if ($tmpFoto != "") {
            //Copia al servidor junto con el nombre del archivo
            move_uploaded_file($tmpFoto, "../../images/".$nombreArchivo);

						//Eliminar la foto
						
						$foto_db = mysqli_fetch_array($miconexion->consulta("SELECT galeria FROM lugares WHERE idLugares ='" . $no . "' "));
						$ruta_foto_db = "../../images/" . $foto_db['galeria'];

						//Si existe varibale fotografia
								if (isset($foto_db["galeria"])) {
										//Verifica que existe en la carptea imagenes
										if (file_exists($ruta_foto_db)) {
												unlink($ruta_foto_db);
										}
						}

						$miconexion->consulta("UPDATE lugares SET nombre='".$nombre."', latitud='".$latitud."', longitud='".$longitud."' , descripcion='".$descrip."' , sector='".$sector."' , galeria='".$nombreArchivo."'  WHERE id_servicios='".$no."' ");
						
        }

	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>
