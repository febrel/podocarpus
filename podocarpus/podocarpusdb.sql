-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2019 a las 18:34:25
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `podocarpusdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aves`
--

CREATE TABLE `aves` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_c` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `habitat` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aves`
--

INSERT INTO `aves` (`id`, `nombre`, `nombre_c`, `descripcion`, `habitat`, `imagen`) VALUES
(1, 'Ãguila', 'Aquila chrysaetos 2', 'Posiblemente el Ã¡guila real es la mÃ¡s conocida e impresionante de todas las Ã¡guilas, siendo ademÃ¡s el ave rapÃ¡z mÃ¡s grande y poderosa de todas las existentes.', 'Zonas Ã¡ridas, semiÃ¡ridas y montaÃ±osas con bosques templados de pino-encino, conÃ­fe- ras, de encino y matorral espinoso', 'imagenes/imagen-aguilas-800x375.jpg '),
(2, 'Tortugas', 'TORTU', 'La tortuga mas grande del mundo, vive en las islas galapagos', 'PLAYA', 'imagenes/img13.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `categoria`) VALUES
(1, 'Plantas'),
(2, 'Investigación'),
(3, 'Montañas'),
(4, 'Ecología'),
(5, 'Aves'),
(6, 'Rios'),
(7, 'Especies'),
(8, 'Serpientes'),
(9, 'Lagos'),
(10, 'Vertebrados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `idLugares` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `latitud` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `galeria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`idLugares`, `nombre`, `latitud`, `longitud`, `descripcion`, `sector`, `galeria`) VALUES
(1, 'Lagunas el compadres', '-4.163348e', '333', 'Constituyen uno de los principales atractivos turÃ­sticos del parque. ', 'Parque Nacional Podocarpus', '1564422404_1558373328_por-que-observar-aves1.jpg'),
(4, 'Perro', '333', '-4.163348', 'Constituyen uno de los principales atractivos turÃ­sticos del parque. ', 'Parque Nacional Podocarpus', '1564464892_img4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idNoticia` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `contenido` varchar(5000) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `titulo`, `fecha`, `autor`, `imagen`, `descripcion`, `contenido`, `idCategoria`) VALUES
(2, 'Tortuga Gigante', '2019-07-29', 'Maria Peres', 'imagenes/img13.jpg', 'Un asonbroso Milagro', '<p>Las tortugas gigantes son reptiles que se encuentran actualmente en dos grupos remotos de islas tropicales: el atol&oacute;n de Aldabra y la isla Fregate en Seychelles y las islas Gal&aacute;pagos en Ecuador. Estas tortugas pueden pesar hasta 417 kg y pueden llegar a medir 1,3 m de largo.</p>', 1),
(3, 'Focas Marinas', '2019-07-29', 'Focas ', 'imagenes/Seehund11cele4_edit.jpg', 'Unos mamiferos Maravillosos', '<p>Los f&oacute;cidos o focas verdaderas son una familia de mam&iacute;feros pinn&iacute;pedos adaptados a vivir en medios acu&aacute;ticos la mayor parte del tiempo. El nombre com&uacute;n deriva directamente del lat&iacute;n phoca,</p>', 7),
(5, 'Condor', '2019-07-29', 'Maria Extrada', 'imagenes/rzacondormuertiocotopaxi.jpg', 'Condor Andino', '<p>El c&oacute;ndor andino, c&oacute;ndor de los Andes o simplemente c&oacute;ndor â€‹ es una especie de ave de la familia Cathartidae que habita en Sudam&eacute;rica. El orden al que pertenece su familia se encuentra en disputa.</p>', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL,
  `nom_servicio` varchar(100) NOT NULL,
  `fecha_ini_tem` varchar(100) NOT NULL,
  `fecha_fin_tem` varchar(100) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `informacion` varchar(2000) NOT NULL,
  `galeria` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `nom_servicio`, `fecha_ini_tem`, `fecha_fin_tem`, `capacidad`, `responsable`, `informacion`, `galeria`) VALUES
(1, 'CAMPING', '02/01/2019', '02/05/2019', 30, 'Carlos Macas', '<p>El camping consta de 10 hectï¿½reas de bosque de pinos para el esparcimiento a 100 metros del mar, y posee lugares diseï¿½ados para acampar, poniendo a su disponibilidad mesas, fogones para cocinar y asaderas, todo sin costo adicional. Contamos con agua potable, baï¿½os, lavaderos y duchas con agua caliente. Tambiï¿½n posee una cancha.</p>', '1564422404_1558373328_por-que-observar-aves1.jpg'),
(12, 'Cayat', '13/01/2019', '19/02/2019', 35, 'Luis Macas', '<p>El camping consta de 10 hect&aacute;reas de bosque de pinos para el esparcimiento a 100 metros del mar, y posee lugares dise&ntilde;ados para acampar, poniendo a su disponibilidad mesas, fogones para cocinar y asaderas, todo sin costo adicional. Contamos con agua potable, ba&ntilde;os, lavaderos y duchas con agua caliente. Tambi&eacute;n posee una cancha.</p>', '1564422255_1558373199_CABALLOS.jpg'),
(13, 'Campamento', '2019-07-05', '2019-07-20', 2, 'Luis Febre', '<p>El camping consta de 10 hect&aacute;reas de bosque de pinos para el esparcimiento a 100 metros del mar, y posee lugares dise&ntilde;ados para acampar, poniendo a su disponibilidad mesas, fogones para cocinar y asaderas, todo sin costo adicional. Contamos con agua potable, ba&ntilde;os, lavaderos y duchas con agua caliente. Tambi&eacute;n posee una cancha.</p>', '1564422454_1558498006_caminata.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `domicilio` varchar(300) NOT NULL,
  `nacionalidad` varchar(150) NOT NULL,
  `lugarEncargo` varchar(150) NOT NULL,
  `galeria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`id`, `nombres`, `apellidos`, `correo`, `celular`, `domicilio`, `nacionalidad`, `lugarEncargo`, `galeria`) VALUES
(7, 'estevan', 'atiencia', 'eeatiencia@utpl.edu.ec', '979690931', 'loja', 'barbudans', 'resercion', 'imagen.png'),
(9, 'Luis', '3', 'lafebre', '0982588124', 'Loja', 'argentinean', 'Macra', 'imagen.png'),
(28, 'Maria', 'Paucar', 'mari@utpl.edu.ec', '0985562347', 'Macara', 'bangladeshi', 'Catacocha', '1564503986_ff.jpg'),
(29, 'ESTEVAN ', 'ATIENCIA', 'esatiencia@utpl.edu.ec', '0899999999', 'Macara', 'barbadian', 'Ingeniero', '1564504310_10422079_535359889908056_7893623993546613633_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `rol`, `user`, `password`) VALUES
(1, 'Ramiro', 'Ramírez', '12', 1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aves`
--
ALTER TABLE `aves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`idLugares`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idNoticia`),
  ADD KEY `fk_Categoria_idx` (`idCategoria`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aves`
--
ALTER TABLE `aves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `idLugares` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fkCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
