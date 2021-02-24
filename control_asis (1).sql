-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 19:56:55
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_asis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_pers_juridico`
--

CREATE TABLE `reg_pers_juridico` (
  `nombre` varchar(30) DEFAULT NULL,
  `cedula` int(10) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reg_pers_juridico`
--

INSERT INTO `reg_pers_juridico` (`nombre`, `cedula`, `telefono`, `correo`) VALUES
('OSWALDO GABRIEL', 2356783, '0414', 'jaimitoeee@gmail.com'),
('Violeta', 29536276, '0312341', 'violetamartinezgmail'),
('Violeta', 29536276, '0312341', 'violetamartinezgmail'),
('Violeta', 29536276, '0312341', 'violetamartinezgmail'),
('Violeta', 29536276, '0312341', 'violetamartinezgmail');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_pers_naturales`
--

CREATE TABLE `reg_pers_naturales` (
  `nombre` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `cedula` int(16) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reg_pers_naturales`
--

INSERT INTO `reg_pers_naturales` (`nombre`, `correo`, `cedula`, `telefono`) VALUES
('armando', 'gonzaloarmando@hotma', 2877999, '04493828'),
('ernesto martin', 'ernestomartin33@hotm', 11298778, '041473726374789253'),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('ulobierto', 'oswaldo', 3434, '22'),
('Giomara mendoza', 'giomara65@gmail.com', 6901045, '042467284734984');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
