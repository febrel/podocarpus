<?php
	include('../adm_header.php');
?>
<main>
	
	<link rel="stylesheet" type="text/css" href="estilos/estilos2.css">
	
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet"> 
	<section class="content3">
	
		<?php
			
			$id=$_GET['variable_id'];
			$miconexion->consulta("Select * from noticia n, categoria c where n.idNoticia=$id and n.idCategoria=c.idCategoria");
			$miconexion->noticia();
			$miconexion->consulta("Select * from noticia ORDER BY fecha DESC");
			$miconexion->noticias_izquierda();
		?>
		
	</section>


</main>

<?php
include('../adm_footer.php');
?>