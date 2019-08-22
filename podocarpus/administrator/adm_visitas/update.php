<?php
	extract($_POST);
	include('../adm_header.php');
	$miconexion->consulta("update visitas set nombre='$nombre', apellido='$apellido', correo='$correo', celular='$celular', cedula='$cedula', nacionalidad='$nacionalidad', motivo='$motivo', fecha='$fecha', hora='$hora', where id=$id_u");	
	echo "<script>location.href='index.php'</script>";
?>
