<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--Tipografia-->
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico" rel="stylesheet">
     
    <link rel="stylesheet" href="css/estilosTodos.css">
    <title>Servicios</title>
</head>
<body>

    <header>

        <!--Titulo-->

        <h1 class="logo"> <a href="index.html">Servicios Podocarpus </a></h1>

    </header>

    <main>
        <section class="hero">
            <h2 class="section-title">EL mejor parque del Ecuador</h2>
        </section>


        <section class="intro">
            <h2 class="section-title">Servicios de <span class="text-primary">aventura</span>  del <span class="text-primary">Parque Podocarpus</span>  los mejores del Ecuador</h2>
        </section>

        <section class="about-us">

                <header class="about-us-intro">
                    <h2 class="section-title-small"> <small>Mira nuestra promociones en nuestro nuevo y renovado Servicio</small> </h2>
                </header>

                <div class="about-us-body">
                    <p>
                    El Parque Nacional Podocarpus se encuentra en una zona de gran biodiversidad y endemismo en la región sur del Ecuador. Esto hace que sea un testimonio claro de la influencia de las montañas en tierras tropicales, una de las principales razones de la extraordinaria biodiversidad del Ecuador. Muchos estudios demuestran que la mayor parte de la biodiversidad del país está empacada en estas alturas intermedias, donde el frío no es tan extremo y, en cambio, abundan la humedad, los microclimas y las barreras geográficas. La zona donde se encuentra Podocarpus es considerada un sitio de importancia mundial para la conservación de la biodiversidad.
                    Por esta razón, junto a otras áreas de la zona como el Parque Nacional Yacuri y la Reserva Biológica Cerro Plateado, desde 2007 forma parte de la Reserva de Biosfera Podocarpus – El Cóndor, un reconocimiento otorgado por la UNESCO. Esta área alberga una gran superficie de páramos, bosques nublados y zonas de matorral, fundamental para la preservación y continuidad de los ecosistemas del sur del Ecuador y norte de Perú.
 
                    </p>
        
                </div>
        </section>

        <section class="orden-online">
            <header>
                <h2 class="section-title text-primary">Aspectos Culturales</h2>
            </header>

                <p>
                Antiguamente, la hoya de Loja y sus alrededores estuvo habitada por indígenas cuxibambas, zhucos, motupes y chinguilanchis, quienes tenían sus territorios delimitados y establecidos en la región. Tras la conquista española empezaron a llegar los primeros exploradores europeos, lo que llevó al descubrimiento y consecuente sobreexplotación de los célebres bosques de cinchona o cascarilla, de los cuales se producía un remedio para la malaria. Durante los primeros años de la década de 1980, el parque empezó a ser visitado y colonizado por mineros informales, principalmente en el sector de San Luis. Esta situación motivó su declaratoria como área protegida.
Actualmente, en las zonas de amortiguamiento del parque existen algunos asentamientos de grupos kichwas, saraguros, shuar y colonos provenientes de la Costa.
                </p>

                <div class="btn-group">
                    <a href="http://sociobosque.ambiente.gob.ec/" class="btn btn-primary">Socio Bosque</a>
                    <a href="http://suia.ambiente.gob.ec/" class="btn btn-primary">suida</a>
                    <a href="http://www.ambiente.gob.ec/" class="btn btn-primary">Ministerio</a>
                   
                </div>
            
        </section>

        <section class="product-showcase">
            <header>
                <h2 class="section-title text-primary">Servicios Completos</h2>

                <div class="products">


                        <?php
                        include("dll/config.php");
                        include("dll/class_mysqli.php");
                        $miconexion = new clase_mysqli;
                        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
                
                        $miconexion->consulta("SELECT * FROM servicios");
                        $listaServicios=$miconexion->consultarTodosServicios();

                        ?>
               
            </div>

            <br>  
            
            </header>

            <div class="btn-group">
                    <a href="index.php" class="btn btn-accent">Vuelve a inicio</a>
                </div>
        
        </section>

        
    </main>

    <footer>
            <ul class="footer-nav">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Contanco</a></li>
                    <li><a href="#">Correo</a></li>
            </ul>

            <ul class="footer-social">
                <li><a class="social-link" href="#"> <img class="social-icon" src="images/facebook.png" alt="facebook"> </a></li>
                <li><a class="social-link" href="#"> <img class="social-icon" src="images/twiter.png" alt="Twiter"> </a></li>
            
            </ul>

        </footer>
    
    
</body>
</html>