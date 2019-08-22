<?php
	extract($_POST);
	include('../adm_header.php');
	$pass=md5($userpass);
    $miconexion->consulta("insert into visitas values ('','$nombre','$apellido','$correo','$celular','$cedula', '$nacionalidad','$motivo', '$fecha', '$hora')");
	echo "<script>location.href='index.php'</script>";
?>
