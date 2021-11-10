-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-06-2021 a las 05:55:24
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdproyec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `Idcitas` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) NOT NULL,
  `Telefono` varchar(25) NOT NULL,
  `Fecha` varchar(25) NOT NULL,
  `Hora` varchar(25) NOT NULL,
  `Tipotrabajo` varchar(20) NOT NULL,
  PRIMARY KEY (`Idcitas`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`Idcitas`, `Nombre`, `Telefono`, `Fecha`, `Hora`, `Tipotrabajo`) VALUES
(0, 'andreaa', '9851245578', '2021-06-07', '20:37', 'olaa'),
(2, 'nadie', '92872', '02/06/2021', '10:22pm', 'maquina'),
(3, 'andre', '9851245578', '2021-06-16', '00:08', 'ffff');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

DROP TABLE IF EXISTS `facturacion`;
CREATE TABLE IF NOT EXISTS `facturacion` (
  `Idfacturacion` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) NOT NULL,
  `Numero` varchar(25) NOT NULL,
  `Codigo` varchar(25) NOT NULL,
  `Descripcion` varchar(25) NOT NULL,
  `Cantidad` varchar(25) NOT NULL,
  `Precio` varchar(25) NOT NULL,
  PRIMARY KEY (`Idfacturacion`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `facturacion`
--

INSERT INTO `facturacion` (`Idfacturacion`, `Nombre`, `Numero`, `Codigo`, `Descripcion`, `Cantidad`, `Precio`) VALUES
(4, 'andre', '32', '21', '21', '23', ''),
(2, 'Tonta', '9292', '333', 'es tonta', '8', '89'),
(3, 'andre', '32', '21', '21', '23', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `Idregistro` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Usuario` varchar(25) NOT NULL,
  `Contraseña` varchar(25) NOT NULL,
  PRIMARY KEY (`Idregistro`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Idregistro`, `Nombre`, `Correo`, `Usuario`, `Contraseña`) VALUES
(0, 'dddfg', 'd', 'd', 'd'),
(4, 'andre', 'bbb', 'SOYOMAR', 'nnn'),
(5, 'andre', 'bbb', 'SOYOMAR', 'nnn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Idusuario` int NOT NULL AUTO_INCREMENT,
  `Correo` varchar(25) NOT NULL,
  `Contraseña` varchar(25) NOT NULL,
  PRIMARY KEY (`Idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Idusuario`, `Correo`, `Contraseña`) VALUES
(1, 'josue@gmail.com', 'soyyo'),
(2, 'josue@gmail.com', 'soyyo'),
(3, 'bbb', 'aom'),
(4, 'bbb', 'nnn'),
(5, 'bbb', 'nnn'),
(6, 'bbb', 'aom');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
