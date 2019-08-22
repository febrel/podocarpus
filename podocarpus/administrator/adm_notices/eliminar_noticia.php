<?php
		include('../adm_header.php');	
?>
<main>
	<link rel="stylesheet" type="text/css" href="estilos/estilos2.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet"> 
	<section class="content">
		<div class="crear">
			<h3 class="title">¿Desea Eliminar esta noticia?</h3>
			<a href="crear_noticia.php" class="categoria">Nueva Noticia</a>
			<a href="index.php" class="administrar">Administrar Noticias</a>
		</div>

		<?php
		
			$id=$_GET['variable_id'];
			$miconexion->consulta("Select * from noticia where idNoticia=$id");
			$miconexion->eliminar_noticia();
			
		?>
		<?php
			
			error_reporting(E_ALL ^ E_NOTICE);
			$id_Noticia=$_POST['inputeliminar'];

			if ($id_Noticia==null) {

			}else{
				
				$resultado = $miconexion->consulta("DELETE FROM noticia WHERE idNoticia='". $id_Noticia ."' ");
				
				if ($resultado == 0) {
					echo ' <script language="javascript">alert("Error: no se pudo eliminar");</script> ';
				}
				else{
					echo ' <script language="javascript">alert("Noticia Eliminada con Éxito");</script> ';
					echo ' <script language="javascript">location.href="index.php";</script> '; 

				}
				$miconexion->desconectar();

			}

		?>
		
	</section>
</main>
<?php
include('../adm_footer.php');
?>