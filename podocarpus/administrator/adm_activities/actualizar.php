<?php
	extract($_GET);
	include('../adm_header.php');
	$miconexion->consulta("select * from usuarios where id=$id");
	$lista_u=$miconexion->consulta_lista();
?>
<main>
	<section class="modulo-servicios">
		<a href="">+ Servicios</a><br>
		<a href="">Crud</a>
	</section>
	<section class="area_trabajo">
	<form method="post" action="update.php">
		<input type="text" name="nombre" value="<?php echo $lista_u[1];?>"><br>
		<input type="text" name="apellido" value="<?php echo $lista_u[2];?>">
		<input type="hidden" name="id_u" value="<?php echo $lista_u[0];?>">
		<button type="submit">Actualizar</button>
	</form>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>