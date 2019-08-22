<?php
	extract($_GET);
	include('../adm_header.php');
	$miconexion->consulta("select * from visitas where id=$id");
	$lista_u=$miconexion->consulta_lista();
	$lista_rol[1]="Administrador";
	$lista_rol[2]="Usuario editor";
	$lista_rol[3]="Visitante";
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo_v.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Crud</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<h3>Actualizacion de Usuarios</h3>
	<form method="post" action="update.php">
		<div class="contenedor-inputs">
			<input type="text" name="nombre" placeholder="Nombres" value="<?php echo $lista_u[1];?>">
			<input type="hidden" name="id_u" value="<?php echo $lista_u[0];?>">
			<input type="text" name="apellido" placeholder="Apellidos" value="<?php echo $lista_u[2];?>">
			<input type="email" name="correo" placeholder="Correo" value="<?php echo $lista_u[3];?>">
        	<input type="text" name="celular" placeholder="Celular" value="<?php echo $lista_u[4];?>">
        	<input type="text" name="cedula" placeholder="Cedula" value="<?php echo $lista_u[5];?>">
        	<input type="text" name="nacionalidad" placeholder="Nacionalidad" value="<?php echo $lista_u[6];?>">
        	<input type="text" name="motivo" placeholder="Motivo" value="<?php echo $lista_u[7];?>">
        	<input type="text" name="fecha" placeholder="Fecha" value="<?php echo $lista_u[8];?>">
        	<input type="text" name="hora" placeholder="Hora" value="<?php echo $lista_u[9];?>">

		</div>
		<button type="submit" class="btn-submit">Actualizar</button>
	</form>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>