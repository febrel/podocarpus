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
			<h3>Nuevo Usuario</h3>
			<form method="post" action="nuevo_vv.php">
				<div class="contenedor-inputs">
					<input type="text" name="nombre" placeholder="Nombres">
					<input type="text" name="apellido" placeholder="Apellidos">
					<input type="email" name="correo" placeholder="Correo" required="required">
					<input type="text" name="celular" placeholder="Celular">
					<input type="text" name="cedula" placeholder="Cedula">
					<input type="text" name="nacionalidad" placeholder="Nacionalidad">
					<input type="text" name="motivo" placeholder="Motivo">
					<input type="text" name="fecha" placeholder="Fecha">
					<input type="text" name="hora" placeholder="Hora">
					
					
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
include('../adm_footer.php');
?>