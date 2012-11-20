-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2012 a las 17:03:34
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_informaticos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores`
--

CREATE TABLE IF NOT EXISTS `colaboradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proyectos_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_has_proyectos_usuarios1` (`usuarios_id`),
  KEY `fk_usuarios_has_proyectos_proyectos1` (`proyectos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text,
  `fecha` datetime DEFAULT NULL,
  `publicaciones_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `proyectos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comentarios_publicaciones1` (`publicaciones_id`),
  KEY `fk_comentarios_usuarios1` (`usuarios_id`),
  KEY `fk_comentarios_proyectos1` (`proyectos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) DEFAULT NULL,
  `asunto` text,
  `fecha` datetime DEFAULT NULL,
  `emisor_id` int(11) NOT NULL,
  `destinatario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_has_usuarios_usuarios1` (`emisor_id`),
  KEY `fk_usuarios_has_usuarios_usuarios2` (`destinatario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pais` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `fecha` datetime DEFAULT NULL,
  `imagen` varchar(120) DEFAULT NULL,
  `usuarios_id` int(11) NOT NULL,
  `pagina_web` varchar(120) DEFAULT NULL,
  `url_video` varchar(120) DEFAULT NULL,
  `categorias_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_proyectos_usuarios1` (`usuarios_id`),
  KEY `fk_proyectos_categorias1` (`categorias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `fecha` datetime DEFAULT NULL,
  `categorias_id` int(11) NOT NULL,
  `url_video` varchar(120) DEFAULT NULL,
  `usuarios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_publicaciones_categorias1` (`categorias_id`),
  KEY `fk_publicaciones_usuarios1` (`usuarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuarios`
--

CREATE TABLE IF NOT EXISTS `tipousuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_nombre` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `twitter` varchar(80) DEFAULT NULL,
  `facebook` varchar(80) DEFAULT NULL,
  `usuario` varchar(60) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `imagen` varchar(120) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `paises_id` int(11) NOT NULL,
  `tipousuarios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_online_paises1` (`paises_id`),
  KEY `fk_usuarios_tipousuarios1` (`tipousuarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD CONSTRAINT `fk_usuarios_has_proyectos_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_proyectos_proyectos1` FOREIGN KEY (`proyectos_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_publicaciones1` FOREIGN KEY (`publicaciones_id`) REFERENCES `publicaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentarios_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentarios_proyectos1` FOREIGN KEY (`proyectos_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `fk_usuarios_has_usuarios_usuarios1` FOREIGN KEY (`emisor_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_usuarios_usuarios2` FOREIGN KEY (`destinatario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk_proyectos_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyectos_categorias1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `fk_publicaciones_categorias1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_publicaciones_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_online_paises1` FOREIGN KEY (`paises_id`) REFERENCES `paises` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_tipousuarios1` FOREIGN KEY (`tipousuarios_id`) REFERENCES `tipousuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
