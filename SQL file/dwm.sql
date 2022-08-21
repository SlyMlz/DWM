-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-08-2022 a las 20:04:58
-- Versión del servidor: 8.0.29
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dwm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `subid` int NOT NULL,
  `cshort` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `cfull` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `dat1` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `dat2` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `dat3` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `dat4` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `dt_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`subid`, `cshort`, `cfull`, `dat1`, `dat2`, `dat3`, `dat4`, `dt_created`, `update_date`) VALUES
(6, '37', 'Educación', '218036064', 'Silvia', 'Fuertes', '12346789', '2022-08-21 11:31:38', NULL),
(7, '39', 'desarrollo', '218036021', 'Felipe', 'Salazar', '1004214954', '2022-08-21 11:51:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `subid` int NOT NULL,
  `cshort` varchar(50) DEFAULT NULL,
  `cfull` varchar(250) DEFAULT NULL,
  `cal1` varchar(250) DEFAULT NULL,
  `cal2` varchar(250) DEFAULT NULL,
  `cal3` varchar(250) DEFAULT NULL,
  `cal4` varchar(250) DEFAULT NULL,
  `cal5` varchar(250) DEFAULT NULL,
  `cal6` varchar(250) DEFAULT NULL,
  `cal7` varchar(250) DEFAULT NULL,
  `cal8` varchar(250) DEFAULT NULL,
  `cal9` varchar(250) DEFAULT NULL,
  `cal10` varchar(250) DEFAULT NULL,
  `cal11` varchar(250) DEFAULT NULL,
  `dt_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`subid`, `cshort`, `cfull`, `cal1`, `cal2`, `cal3`, `cal4`, `cal5`, `cal6`, `cal7`, `cal8`, `cal9`, `cal10`, `cal11`, `dt_created`, `update_date`) VALUES
(12, '35', 'Educación', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'si', 'si', '2022-08-12 11:46:04', NULL),
(13, '37', 'Educación', '9', '9', '9', '9', '9', '8', '8', '8', '8', 'si', 'si', '2022-08-21 11:08:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `subid` int NOT NULL,
  `cshort` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `cfull` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `sub1` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `sub2` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `sub3` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `sub4` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `sub5` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `sub6` longtext CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `sub7` longtext CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `dt_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`subid`, `cshort`, `cfull`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `dt_created`, `update_date`) VALUES
(23, '37', 'Educación', 'Un proyecto es un conjunto ordenado de actividades con el fin de satisfacer ciertas necesidades o resolver problemas específicos. Un proyecto es un plan de trabajo. Por ejemplo, si pienso en crear un centro de formación para jóvenes, recién tengo una idea que debo trabajar. Una forma sencilla de transformar esa idea en un proyecto es pensar en contestar estas preguntas:', 'Luego pensaremos en la planificación desarrollando la idea para transformarla en un proyecto. Al comenzar se debe identificar el objetivo, el “para qué” se hace el proyecto. Estos deben ser: realistas, claros y medibles. Hay que tener en cuenta que se deben lograr resultados en el corto plazo y estos serán medidos cuando el proyecto llegue a su Página 4 de 12 fin. Se va desde lo general hacia lo particular, desde un objetivo general a varios objetivos específicos y resultados o metas a alcanzar por el proyecto. Para facilitar este proceso se utilizará un cuadro que da algunos ejemplos de qué significa cada uno de estos términos.', 'Promover el empoderamiento de las mujeres participantes a través de la capacitación laboral con el fin de que desarrollen planes para el desarrollo personal y el de sus familias.', 'La evaluación en el  área considera una serie de particularidades a tomarse en cuenta por ejemplo, el  carácter lúdico que la actividad físico-deportiva posee', 'Un procedimiento que parte de unas aseveraciones en calidad de  hipótesis y busca refutar o falsear tales hipótesis, deduciendo de ellas  conclusiones que deben confrontarse con los hechos', 'Las observaciones se suponen extraídas de poblaciones distribuidas  según el modelo de función de densidad de probabilidad normal. Por lo tanto, los  datos de cada grupo muestral (cada grupo de participantes del estudio) deben  ajustarse a una distribución normal” (p.290).', 'Alvarado, O. (2003). Gerencia de Marketing Educativo. Lima: Udegraf.  Arista, L. (2010). Motivación de logro en educación física y capacidades  motrices en alumnos de una institución educativa pública. Callao-Perú.  Cabrera. (s.f.). Capacidades coordinativas. Soporte digital.  Capella, S. (2007). Informática, educación física y las Webquest Tándem.  Didáctica de la educación física. Educación física y nuevas tecnologías.   Capllonch, F. (2005). Tesis doctoral Tecnologías de la información y la  comunicación en la educación física de primaria”, estudio sobre sus  posibilidades educativas. España: Universidad de Barcelona. ', '2022-08-21 11:22:56', NULL),
(24, '39', 'desarrollo', 'Se debe cumplir que aparezca un cuadro de dialogo notificando el ingreso de datos en los campos vacios.', 'Mensaje al usuario “Por favor ingrese los datos en los campos asignados”', 'Datos ingresados son de manera correcta y no se deja campos en blanco.', 'El usuario aparece registrado exitosamente creando así un usuario para ingresar al sistema. ', 'Se debe cumplir que aparezca un cuadro de dialogo notificando el ingreso de datos en los campos vacios.', 'Mensaje al usuario “Por favor ingrese los datos en los campos asignados”', 'Los datos deben ser ingresados correctamente y se genera un Id único para cada proyecto.', '2022-08-21 11:49:02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Docente'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int NOT NULL,
  `loginid` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `loginid`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proyecto`
--

CREATE TABLE `tbl_proyecto` (
  `cid` int NOT NULL,
  `cshort` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `cfull` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `cdate` varchar(50) DEFAULT NULL,
  `ruta` varchar(100) NOT NULL,
  `nombre` varchar(110) NOT NULL,
  `update_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_proyecto`
--

INSERT INTO `tbl_proyecto` (`cid`, `cshort`, `cfull`, `cdate`, `ruta`, `nombre`, `update_date`) VALUES
(37, 'INFLUENCIA DE HERRAMIENTAS WEB 2.0 EN EL APRENDIZAJE DE LA EDUCACIÓN FÍSICA DE LOS ESTUDIANTES DE LA INSTITUCIÓN EDUCATIVA GERMÁN ASTETE, LA PERLA – CALLAO, 2014', 'Educación', '21-08-2022', 'anexos/', 'Anexo_20220821173837_1.Estrategia para optimizar el uso de las Tics en la práctica docente que mejo.pdf', NULL),
(39, 'Software de proyectos de grado', 'desarrollo', '21-08-2022', 'anexos/', 'Anexo_20220821184634_RESUMEN DE TESIS.docx.pdf', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int NOT NULL,
  `codigo` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nombre1` varchar(45) NOT NULL,
  `nombre2` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `barrio` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefonono` varchar(45) NOT NULL,
  `id_rol` int NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `codigo`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `contraseña`, `direccion`, `barrio`, `correo`, `telefonono`, `id_rol`) VALUES
(3, '218036067', 'Shirley', 'Meliza', 'Gomez', 'Salcedo', '1234', 'Sibundoy-Putumayo', 'B/ Pablo VI', 'slymlz@gmail.com', '3146399015', 1),
(4, '218036064', 'Silvia', 'Rocio', 'Fuertes', 'Paspur', '12345678', 'Ipiales', 'B/FLoresta', 'silvia@hotmail.com', '312587698', 3),
(5, '218036024', 'Ivan ', 'Dario', 'Campino', 'Pantoja', '12345', 'Ipiales-Nariño', 'B/La union', 'Dario_P@gmail.com', '3174587698', 2),
(6, '218036019', 'Ingrid', 'Catheryn', 'Cabrera', 'Ruales', '123456', 'Tuquerres', 'B/ Floresta', 'cate@gmail.com', '3125874589', 3),
(7, '212121', 'Juan', 'Esteban', 'Jojoa', 'Martinez', '212121', 'cr 2 N° 8-14', 'San Felipe', 'juan@gmail.com', '3218754875', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`subid`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`subid`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`subid`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  ADD PRIMARY KEY (`cid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `subid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `subid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `subid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`idrol`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
