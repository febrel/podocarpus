<?php
   
	Nuevolugar($_POST['idLugar'], $_POST['nombre'], $_POST['longitud'], $_POST['latitud'], $_POST['descrip'], $_POST['sector'], $_FILES['foto']["name"]);

	function Nuevolugar($idLugar, $nombre, $longitud, $latitud, $descrip, $sector, $foto){

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
        }

        
        include('../adm_header.php');
        $miconexion->consulta("INSERT INTO lugares (idLugares, nombre, latitud, longitud, descripcion, sector,galeria) VALUES ('".$idLugar."' ,'".$nombre."' ,'".$latitud."' ,'".$longitud."' ,'".$descrip."' ,'".$sector."','".$nombreArchivo."') ");  
	}
	
?>

<script type="text/javascript">
	alert("Servicio Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>
