-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2013 a las 02:06:35
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `autoventa`
--
CREATE DATABASE IF NOT EXISTS `autoventa` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `autoventa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivelAcceso` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ci` varchar(15) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `estado` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nivelAcceso`, `nombre`, `ci`, `telefono`, `celular`, `email`, `direccion`, `usuario`, `password`, `estado`) VALUES
(7, '0', 'victor', '345345', '23234', '234234', 'victor@hotmail.com', 'asdasd', 'victor', '123', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `Id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `modelo` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `marca` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`Id_vehiculo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`Id_vehiculo`, `placa`, `modelo`, `marca`, `precio`) VALUES
(1, 'w', 'w', 'w', 345345),
(2, 'yqtwer1234', '2012', 'toyota', 45000),
(3, 'iouhb123', '2010', 'nissan', 67688),
(20, 'asdasd', 'asdasd', 'asdasd', 32423423),
(21, '234234', 'asdasd pripf sdfjsdklf', 'asdasd', 2147483647),
(22, '234234', 'asdasd pripf sdfjsdklf', 'asdasd', 2147483647),
(23, 'aqwadas', 'asdasdasd', 'sadasdqasd', 2147483647),
(24, 'leoplaca', 'modeloplaca', 'marcaplaca', 12341234),
(25, 'denis', 'denis', 'denis', 34565),
(28, 'leo', 'leo', 'leo', 67),
(29, '5756', '567', '567', 567),
(30, '764', '567', '4567', 5467),
(31, 'pri', 'pri', 'pri', 545),
(32, 'nueo', 'qwre', 'enculurparito', 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
