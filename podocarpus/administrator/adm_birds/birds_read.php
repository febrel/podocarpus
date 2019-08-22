<?php
    extract($_GET);
	include('../adm_header.php');
    $res = $miconexion->consulta("select * from aves where id=$id");
    $lista_e = $miconexion->consulta_lista();
?>
<main>
    <link rel="stylesheet" href="adm_birds_css/estilos.css">
    <link rel="stylesheet" href="adm_birds_css/fontello.css">
    <div class="birds_principal">
        <h2 class="titulo_read">DATOS SELECCIONADOS</h2>
        <section class="area_trabajo1">
            <section class="contenido_mod1">
                <img src="adm_birds_dll/<?php echo $lista_e[5]; ?>" width="450px" height="250px" class="img_read">
                <h3 class='nombre_read'>Nombre</h3>
                <p class='cont_read'><?php echo $lista_e[1]; ?></p>
                <h3 class='nombrec_read'>Nombre Científico</h3>
                <p class='cont_read'><?php echo $lista_e[2]; ?></p>
                <h3 class='habitat_read'>Habitat</h3>
                <p class='cont_read'><?php echo $lista_e[4]; ?></p>
                <h3 class='desc_read'>Descripción</h3>
                <p class='cont_desc_read'><?php echo $lista_e[3]; ?></p>
            </section>
        </section>
    </div>
</main>
<?php
	include('../adm_footer.php');
?>
