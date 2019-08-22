<?php
	include('../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<a href="">+ Servicios</a><br>
		<a href="">Crud</a>
	</section>
	<section class="area_trabajo">
	<?php
		$miconexion->consulta("select id, nombre,apellido,correo,rol,user from usuarios");
		$miconexion->verconsulta_crud();
	?>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>