<?php
	extract($_POST);
	include('../adm_header.php');
	$miconexion->consulta("update usuarios set nombre='$nombre', apellido='$apellido' where id=$id_u");
	echo "<script>location.href='index.php'</script>";
?>
