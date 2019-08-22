<?php
	include('../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo_v.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Crud</a>
		</nav>
	</section>

	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select * from visitas");
				$miconexion->verconsulta_crud();
			?>
		</section>	
	</section>	
</main>

<?php
	include('../adm_footer.php');
?>