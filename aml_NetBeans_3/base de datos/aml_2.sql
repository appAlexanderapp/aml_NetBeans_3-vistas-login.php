-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2015 a las 06:54:02
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aml_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_administrador`
--

CREATE TABLE IF NOT EXISTS `registro_administrador` (
`id` int(15) NOT NULL,
  `nombre` varchar(45) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(45) CHARACTER SET latin1 NOT NULL,
  `usuario` varchar(45) CHARACTER SET latin1 NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registro_administrador`
--

INSERT INTO `registro_administrador` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(10, 'e', 'e', 'bekem', '123'),
(11, 'ddd', 'rrr', 'a', '1'),
(12, 'e', 'r', 'f', 'f'),
(13, 'eeeeee', 'eeeeeeeeeeeee', 'e', 'e'),
(14, 'we', 'we', 'we', '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE IF NOT EXISTS `registro_usuario` (
`id` int(15) NOT NULL,
  `num_documento` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_doc` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `genero` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `primer_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `segundo_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `primer_apellido` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `segundo_apellido` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fch_nacimiento` date NOT NULL,
  `edad` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `lugar_nacimiento` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado_civil` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion_domicilio` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `barrio` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel_domicilio` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cel_domicilio` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `eps` varchar(55) COLLATE utf8mb4_spanish_ci NOT NULL,
  `arl` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fondo_pensiones` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `caja_compensacion` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nom_cntcto_fmliar` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `parentesco` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel_fmliar` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cel_fmliar` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_empresa` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `oficio_habitual` varchar(54) COLLATE utf8mb4_spanish_ci NOT NULL,
  `deporte_practicar` varchar(54) COLLATE utf8mb4_spanish_ci NOT NULL,
  `evaluador` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nivel_academico_actual` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estudiando` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `profesion` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `timp_exp_profesional` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cargo_aspra_actl` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tiemp_en_cargo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_cargo` varchar(90) COLLATE utf8mb4_spanish_ci NOT NULL,
  `centro_al_que_pertene` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dependencia` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `jornada_de_trabajo` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `extra` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `manip_alimtos` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `traba_altras` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `desc_car_mot_const_enfer_actu` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `enti_donde_a_trabj` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cargo_que_desempena_o_desempeno` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tiempo_laborado_amos` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tiempo_laborado_meses` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `wisher_id` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registro_usuario`
--

INSERT INTO `registro_usuario` (`id`, `num_documento`, `tipo_doc`, `fecha`, `genero`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fch_nacimiento`, `edad`, `lugar_nacimiento`, `estado_civil`, `direccion_domicilio`, `barrio`, `tel_domicilio`, `cel_domicilio`, `eps`, `arl`, `fondo_pensiones`, `caja_compensacion`, `nom_cntcto_fmliar`, `parentesco`, `tel_fmliar`, `cel_fmliar`, `nombre_empresa`, `telefono`, `oficio_habitual`, `deporte_practicar`, `evaluador`, `nivel_academico_actual`, `estudiando`, `profesion`, `timp_exp_profesional`, `cargo_aspra_actl`, `tiemp_en_cargo`, `tipo_cargo`, `centro_al_que_pertene`, `dependencia`, `jornada_de_trabajo`, `extra`, `manip_alimtos`, `traba_altras`, `desc_car_mot_const_enfer_actu`, `enti_donde_a_trabj`, `cargo_que_desempena_o_desempeno`, `tiempo_laborado_amos`, `tiempo_laborado_meses`, `wisher_id`) VALUES
(23, '0000-00-00 00:00:00', 'rrrrrrrrrrrrrrrrrr', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(24, '0000-00-00 00:00:00', 'ttttttttttttttt', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(25, '0000-00-00 00:00:00', 'wwww', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(28, '0000-00-00 00:00:00', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwww', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(29, '2011-11-11 11:11:01', '111111111111111', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(30, '2015-08-11 00:00:00', 'cc', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(31, '2015-08-03 00:00:00', 'ti', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(32, '2015-08-18 00:00:00', 'ti', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(33, '2014-05-13 00:00:00', 'nuip', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(34, '2014-05-12 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(35, '2014-12-17 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(36, '2014-12-01 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(37, '2014-12-06 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(38, '2014-12-20 00:00:00', '', '1000-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(39, '2015-08-29 00:00:00', '', '2020-00-00 00:00:00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(40, '2013-10-15 00:00:00', 'ti', '2030-00-00 00:00:00', 'hombre', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(41, '2015-08-10 00:00:00', 'nuip', '0000-00-00 00:00:00', 'm', 'm', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(42, '2015-08-04 00:00:00', 'nuip', '0000-00-00 00:00:00', 'm', 'm', 'm', 'm', 'm', '2015-08-11', '45', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', 'Ã±', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(43, '2015-08-22 00:00:00', 'ti', '1111-11-11 11:11:11', 'hombre', 'Alexander', 'quen', 'pala', 'riva', '2015-08-26', '56', 'cali', 'casado', 'carrera 30000', 'diamante', '3967247', '3105355799', 'comevA', 'sura', 'porvenir', 'no tengo', 'esperanza', 'madre', '9999999', '666666', 'cali Colombia', '2222222', 'independiente', 'futblo', 'instructor', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(44, '2011-10-11 00:00:00', 'cc', '0000-00-00 00:00:00', 'hhhhhh', 'hhhhhhhh', 'hhhhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhhhhhh', '2015-08-27', '99', 'hhhhhhhhhhhh', 'hhhhhhhhh', 'hhhhhhhhhh', 'hhhhh', 'hhhhhhhhh', 'hhhhhhhh', 'hhhhhhh', 'hhhhhhhhh', 'hhhhhhhhhhhh', 'hhhhhhhhh', 'hhhhh', 'hhhhhhhhhhhhhhhh', 'hhhhhhhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhhh', 'hhhhhhhhhh', 'hhhhhhhhh', 'hhhhhhhh', 'hhhhhhhhhhhhh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(45, '2015-08-15 00:00:00', 'cc', '0000-00-00 00:00:00', 'jjjjjjjjjjjj', 'jjjjjjjjjjjjj', 'jjjjjjjjjjjjj', 'jjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjj', '2015-08-22', '88', 'jjjjjjjjjjjjj', 'jjjjjjjjjjjj', 'jjjjjjjjjjjj', 'jjjjjjjjjjj', 'jjjjjjjjjjjjjj', 'jjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(46, '2015-08-01 00:00:00', 'ce', '0000-00-00 00:00:00', 't', 't', 't', 't', 't', '2015-08-01', '100', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 13),
(47, '2015-08-03 00:00:00', 'cc', '0000-00-00 00:00:00', 'o', 'o', 'o', 'o', 'o', '2015-08-07', '89', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 13),
(48, '2015-08-20 00:00:00', 'cc', '0000-00-00 00:00:00', 'p', 'p', 'p', 'p', 'p', '2015-08-26', '78', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 13),
(49, '2015-08-11 00:00:00', 'cc', '0000-00-00 00:00:00', 'l', 'l', 'l', 'l', 'l', '2015-08-17', '765', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 13),
(50, '2014-07-17 00:00:00', 'ti', '0000-00-00 00:00:00', 'd', 'd', 'd', 'd', 'd', '2015-08-24', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 13),
(51, '2015-02-11 00:00:00', 'cc', '0000-00-00 00:00:00', 's', 's', 's', 's', 's', '2015-08-16', '76', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 13),
(52, '2015-08-02 00:00:00', 'cc', '0000-00-00 00:00:00', '000', '00', '00', '00', '00', '2015-08-30', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 13),
(53, '2015-08-03 00:00:00', 'cc', '0000-00-00 00:00:00', 'b', 'b', 'b', 'b', 'b', '2015-08-10', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14),
(54, '16928072', 'cc', '2015-09-21 00:00:00', 'm', 'm', 'm', 'm', 'm', '2015-09-15', '90', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'mm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(55, '999999', 'cc', '2015-09-30 00:00:00', 's', 's', 's', 's', 's', '2015-09-20', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(56, '8888888', 'ti', '2015-09-28 00:00:00', 'j', 'j', 'j', 'j', 'j', '2015-09-29', '87', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(57, '99999988', 'ce', '2015-09-21 00:00:00', 'p', 'p', 'p', 'p', 'p', '2015-09-14', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(58, '6', 'nuip', '0006-06-06 00:00:00', '6', '6', '6', '6', '6', '2015-09-07', '6', '6', '6', '6', '63333', '6', '6', '633', '6', '6', '633', '6', '6', '6', '', '6', '333', '6', '6', '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(59, '31851873', '111111111', '1100-00-00 00:00:00', 'qqqqqqqq', 'qqqqqqqqq', 'qqqqqqqqqqq', 'qqqqqqqqqqqq', 'RIvas', '1988-09-25', '33', 'Cali', 'casado', 'CArrera 33', 'Diamante', '32323', '232323232323', 'comeva', 'sura', 'porvenir', 'confndi', 'Esperanza', 'Madre', '333333333333', '7777777777777', 'Biblioteca', '8888888888', 'desarrollador', 'ajedrezwwww', 'Jordan Caleb Palacios Potes', 'grado 0', 'si', 'uuuu', 'uuu', 'uuu', 'uuu', 'Operativo', 'uuu', 'uuu333', 'manana----tarde--noche--rotativo', 'si', 'si', 'si', 'mi nombre es alexander palacios rivas y que xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx sdddddddddddddddddddxxxxxxxxxxxxx xxxxxxxxxxxxxx  xxxxxxxxxxxxxxxxxx     ', 'biblioteca Departamental', 'instructor', '17', '19', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_administrador`
--
ALTER TABLE `registro_administrador`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_wish_wisher` (`wisher_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_administrador`
--
ALTER TABLE `registro_administrador`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
ADD CONSTRAINT `fk_wish_wisher` FOREIGN KEY (`wisher_id`) REFERENCES `registro_administrador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
