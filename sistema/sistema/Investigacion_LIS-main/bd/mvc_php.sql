-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-02-2022 a las 01:51:35
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_php`
--
CREATE DATABASE IF NOT EXISTS `mvc_php` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `mvc_php`;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `idEstudiante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idEstudiante`),
  UNIQUE KEY `dui` (`dui`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=898903 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idEstudiante`, `dui`, `nombre`, `dir`, `tel`, `fec_nac`, `correo`) VALUES
(80240, '04066158-7', 'ESTEBAN GAMEZ', 'LA LIBERTAD', '7548-4909', '1989-02-14', 'egamez@outlook.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nomprod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precioU` float NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`idProducto`),
  KEY `Producto_FKIndex1` (`nit`)
) ENGINE=InnoDB AUTO_INCREMENT=898903 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nit`, `nomprod`, `precioU`, `descrip`) VALUES
(234, '43028', 'PHP', 12, 'PHP MVC DE 0 A AVANZADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_estudiante`
--

DROP TABLE IF EXISTS `producto_estudiante`;
CREATE TABLE IF NOT EXISTS `producto_estudiante` (
  `id_Producto_estudiante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idProducto` int(10) NOT NULL,
  `idEstudiante` int(10) NOT NULL,
  `fecha_suscripcion` date NOT NULL,
  PRIMARY KEY (`id_Producto_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=898904 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto_estudiante`
--

INSERT INTO `producto_estudiante` (`id_Producto_estudiante`, `idProducto`, `idEstudiante`, `fecha_suscripcion`) VALUES
(898903, 234, 80240, '2022-02-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `razonS` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`nit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nit`, `razonS`, `dir`, `tel`) VALUES
('43028', 'Institución de educación superior', 'Soyapango', '2222-2222');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `proveedor` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
