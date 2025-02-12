-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2025 a las 00:51:10
-- Versión del servidor: 10.1.39-MariaDB
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
-- Base de datos: `Maestros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Maestros`
--

CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Maestros`
--

INSERT INTO `Maestros` (`id`, `nombre`, `correo`, `genero`, `fecha_de_nacimiento`) VALUES
(1, 'Luis Carlos', 'luis@gmail.com', 1, '0000-00-00'),
(2, 'Jorge Ibarra', 'ibarra@gmail.com', 1, '0000-00-00'),
(3, 'Francisco Rochín ', 'rochin@gmail.com', 1, '0000-00-00'),
(4, 'María Guadalupe', 'lupita@gmail.com', 1, '0000-00-00'),
(5, 'Alfonso Aldapa', 'alfonso@gmail.com', 1, '0000-00-00'),
(6, 'Papik Heriberto', 'papik@gmail.com', 0, '0000-00-00'),
(7, 'Pedro Noe del Real', 'pedro@gmail.com', 1, '0000-00-00'),
(8, 'Flordayn', 'flor@gmail.com', 1, '0000-00-00'),
(9, 'Maru Nuñez', 'maru@gmail.com', 1, '0000-00-00'),
(10, 'Liliana Lopez', 'lili@gmail.com', 1, '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Maestros`
--
ALTER TABLE `Maestros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Maestros`
--
ALTER TABLE `Maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
