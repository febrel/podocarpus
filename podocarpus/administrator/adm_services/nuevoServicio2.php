<?php
   
	NuevoProducto($_POST['idServicio'], $_POST['nombreServicio'], $_POST['inicioTemporada'], $_POST['finTemporada'], $_POST['capacidad'], $_POST['responsable'], $_POST['descripcion'], $_FILES['foto']["name"]);

	function NuevoProducto($idServicio, $nomServicio, $inicioTemporada, $finTemporada, $capacidad, $responsable, $descrip, $foto){

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
        $miconexion->consulta("INSERT INTO servicios (id_servicios, nom_servicio, fecha_ini_tem, fecha_fin_tem, capacidad, responsable, informacion, galeria) VALUES ('".$idServicio."' ,'".$nomServicio."' ,'".$inicioTemporada."' ,'".$finTemporada."' ,'".$capacidad."' ,'".$responsable."', '".$descrip."','".$nombreArchivo."') ");
        
        //$conexion->query($miconexion) or die ("Error al ingresar los datos".mysqli_error($conexion));
      
	}
	
?>

<script type="text/javascript">
	alert("Servicio Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>
