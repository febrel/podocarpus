<?php
	include('../adm_header.php');
?>
<main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos/estilos2.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<?php
		//Fecha
		error_reporting(E_ALL ^ E_NOTICE);

		date_default_timezone_set("America/Guayaquil");

		$fechaactual = getdate();
		//setlocale(LC_ALL, 'es_ES.UTF-8');
		setlocale(LC_TIME, "spanish");
		$fecha = $fechaactual[year] .".". date('m') .".". date('d');//Fecha a almacenar.
		$fecha_input = strftime("%A, %d de %B de %Y");//Fecha a mostrar.
		//
	?>
	<section class="content2">
		<div class="crear">
			<h3 class="title">Nueva noticia - Parque Nacional Podocarpus</h3>
			<span class="categoria">Nueva Categoria</span>
			<a href="index.php" class="administrar">Administrar Noticias</a>

		</div>
		<div class="noticia">
				<form method="post" enctype="multipart/form-data"  action="" id="image-form" name="form1">
					<div class="three_col">

						<select required="required" title="Categoría" name="id_categoria">

							<?php
								
								$miconexion->consulta("Select * from categoria");

								echo $miconexion->vercategoria_noticia();

						//$miconexion->desconectar(); 
							?>
						</select>
						<input type="text" name="fecha" title="Fecha" placeholder="Fecha" class="default" readonly="readonly" msg="Error for First name" value="<?php echo utf8_encode($fecha_input); ?>">
						<span class="error"></span>
						<input type="text" name="autor" placeholder="Autor (Máximo 45 caracteres)" class="default" msg="Error for Last name" required="required" maxlength="45">
						<span class="error"></span>
					</div>
					<div class="one_col email">
						<input type="text" name="titulo" placeholder="Título (Máximo 100 caracteres)" class="default" msg="Please enter a valid email" required="required" maxlength="100">
					</div>
					<div class="one_col">
						<textarea rows="2" cols="20" placeholder="Entradilla (Máximo 225 caracteres)" name="entradilla" required="required" id="entradilla" maxlength="225"></textarea>
					</div>
					<div class="one_col2">
						<textarea rows="10" cols="20" placeholder="Contenido (Máximo 5000 caracteres)" name="contenido" required="required" class="contenido" id="contenido" class="tinyEditor" maxlength="5000"></textarea>
					</div>
					<div class="one_col file-upload">
						<div id="file"><ul id="image-list"><p>Click or Drag in an image to upload</p></ul></div>
						<input type="file" class="file" name="imagen" id="images" required="required" />
						<span class="error"></span>
					</div>
					<div class="one_col">
						<input id="submit" type="submit" value="Guardar Noticia" />
					</div>
					<span class="clear"></span>
				</form>
			</div>

			<?php

				$Titulo=$_POST['titulo'];
			//fecha ya esta.
				$Autor=$_POST['autor'];
			//Imagen
				$nom_Imagen=$_FILES['imagen']['name'];
				$Imagen="imagenes/".$nom_Imagen;
        	//$ImgContenido=addslashes(file_get_contents($Imagen));
				$Entradilla=$_POST['entradilla'];
				$Contenido=$_POST['contenido'];
				$idCategoria=$_POST['id_categoria'];

			if ($Titulo==null) {

			}else{
				$resultado_noticia = $miconexion->insertar_villavicencio("Insert into noticia(idNoticia, titulo, fecha, autor, imagen, descripcion, contenido, idCategoria) VALUES (0, '$Titulo', '$fecha', '$Autor', '$Imagen', '$Entradilla', '$Contenido', $idCategoria)");
				if ($resultado_noticia == 0) {
					echo ' <script language="javascript">alert("Error: no se pudo guardar");</script> ';
				}
				else{
					echo ' <script language="javascript">alert("Noticia Registrada con Éxito");</script> ';
					echo ' <script language="javascript">location.href="index.php";</script> '; 
				}

			}
			?>

			<div id="openModal" class="modalDialog">

				<div>
					<a title="Close" class="close" onclick="javascript:CloseModal();">X</a>
					<h2 id="reg_cat">Registrar Categoria</h2>
					<form id="form2" action="" method="post">
						<div class="one_col email">
							<input type="text" name="categoria" placeholder="Categoría" class="default" required="required">
						</div>
						<div class="one_col">
							<input id="submit" type="submit" value="Registrar" />
						</div>
					</form>
				</div>
			</div>

			<?php
				error_reporting(E_ALL ^ E_NOTICE);
				$Categoria=$_POST['categoria'];

				if ($Categoria==null) {

				}else{
					$resultado = $miconexion->insertar_villavicencio("Insert into categoria(idCategoria, categoria) VALUES (0, '$Categoria')");
					if ($resultado == 0) {
						echo ' <script language="javascript">alert("Error: no se pudo guardar");</script> ';
					}
					else{
						echo ' <script language="javascript">alert("Categoría Registrada con Éxito");</script> ';
						echo ' <META HTTP-EQUIV="REFRESH" CONTENT="0;crear_noticia.php">'; 

					}

			}

			?>

		</section>
	<script>
    // Replace the <textarea> with a CKEditor
    	CKEDITOR.replace('contenido');
	</script>

<script type="text/javascript" src="js/model.js"></script>
</main>
<?php
include('../adm_footer.php');
?>