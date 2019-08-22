<?php
	include('../adm_header.php');
?>

<main>
	<link rel="stylesheet" type="text/css" href="estilos/estilos2.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Include CKEditor library -->
	<script src="ckeditor/ckeditor.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<?php
		
		$id=$_GET['variable_id'];
		$miconexion->consulta("SELECT * from noticia where idNoticia='". $id ."' ");
	?>

	<section class="content">
		<div class="crear">
			<h3 class="title">Modificar Noticia - Parque Nacional Podocarpus</h3>
			<a href="crear_noticia.php" class="administrar">Nueva Noticia</a>
			<a href="index.php" class="administrar">Administrar Noticias</a>
			

		</div>
		<?php
			$miconexion->modificar_noticia();
		?>

			<?php
			error_reporting(E_ALL ^ E_NOTICE);
			$Titulo2=$_POST['titulo2'];
			$Fecha2=$_POST['fecha2'];
			$Autor2=$_POST['autor2'];
			//Imagen
			$nom_Imagen2=$_FILES['imagen2']['name'];
			if(empty($_FILES['imagen2']['name'])){
				$Imagen2=$_POST['imagen22'];
			}
			else{
				$Imagen2="imagenes/".$nom_Imagen2;
			}
			$Entradilla2=$_POST['entradilla2'];
			$Contenido2=$_POST['contenido2'];
			$idCategoria2=$_POST['id_categoria2'];

			if ($Titulo2==null) {

			}else{
				
				$resultado_edicion = $miconexion->consulta("Update noticia Set titulo='$Titulo2', fecha='$Fecha2', autor='$Autor2', imagen='$Imagen2', descripcion='$Entradilla2', contenido='$Contenido2', idCategoria=$idCategoria2 Where idNoticia=$id");
				
				if ($resultado_edicion == 0) {
					echo ' <script language="javascript">alert("Error: no se pudo modificar noticia");</script> ';
				}
				else{
					echo ' <script language="javascript">alert("Noticia Modificada con Éxito");</script> ';
					echo ' <script language="javascript">location.href="index.php";</script> '; 
				}

			}
			?>

		</section>

	<script>
    // Replace the <textarea> with a CKEditor
    	CKEDITOR.replace('contenido2');
	</script>
</main>
<?php
include('../adm_footer.php');
?>