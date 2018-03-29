-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2018 a las 04:48:26
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '-1 = Deshabilitado, 0 = Inactivo, 1 = Activo, 2 = Bloqueado',
  `carnet` char(7) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `fecha_reg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `foto` tinytext COLLATE utf8_spanish_ci,
  `sexo` enum('H','M') COLLATE utf8_spanish_ci NOT NULL COMMENT 'H = Hombre, M = Mujer',
  `pais` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_t` int(1) NOT NULL DEFAULT '3',
  `llave` char(16) COLLATE utf8_spanish_ci DEFAULT NULL,
  `universidad` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `carrera` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `intereses` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `puntos` int(4) NOT NULL DEFAULT '50',
  `votos` int(4) NOT NULL DEFAULT '0',
  `privacidad` tinyint(4) NOT NULL DEFAULT '1',
  `url_facebook` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_twitter` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_googleplus` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_youtube` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_linkedin` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario`, `clave`, `activo`, `carnet`, `correo`, `fecha_nac`, `fecha_reg`, `foto`, `sexo`, `pais`, `usuario_t`, `llave`, `universidad`, `carrera`, `intereses`, `puntos`, `votos`, `privacidad`, `url_facebook`, `url_twitter`, `url_googleplus`, `url_youtube`, `url_linkedin`) VALUES
(1, 'soporte', '855fa866d6d3f72f6a50bc213244e36d', 1, NULL, '', NULL, '2018-03-29 02:47:04', NULL, 'H', NULL, 1, NULL, NULL, NULL, NULL, 50, 0, 1, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
