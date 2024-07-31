-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2024 a las 13:57:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebapractica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre`) VALUES
(1, 'María García'),
(2, 'Administrador por defecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE `comunidades` (
  `id_comunidad` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `poblacion` varchar(80) NOT NULL,
  `id_administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`id_comunidad`, `nombre`, `direccion`, `poblacion`, `id_administrador`) VALUES
(2, 'comunidad parques', 'Calle del Deporte, 23', 'Galapagar', 1),
(3, 'Comunidad de los enanitos', 'Blanca, 34', 'Nieves', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vecinos`
--

CREATE TABLE `vecinos` (
  `id_vecino` int(11) NOT NULL,
  `nombre` varchar(180) NOT NULL,
  `escalera` varchar(20) NOT NULL,
  `piso` varchar(20) NOT NULL,
  `puerta` varchar(20) NOT NULL,
  `id_comunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`id_comunidad`),
  ADD KEY `FK_ID_ADMINISTRADOR` (`id_administrador`);

--
-- Indices de la tabla `vecinos`
--
ALTER TABLE `vecinos`
  ADD PRIMARY KEY (`id_vecino`),
  ADD KEY `FK_ID_COMUNIDAD` (`id_comunidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  MODIFY `id_comunidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vecinos`
--
ALTER TABLE `vecinos`
  MODIFY `id_vecino` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comunidades`
--
ALTER TABLE `comunidades`
  ADD CONSTRAINT `FK_ID_ADMINISTRADOR` FOREIGN KEY (`id_administrador`) REFERENCES `administradores` (`id_administrador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vecinos`
--
ALTER TABLE `vecinos`
  ADD CONSTRAINT `FK_ID_COMUNIDAD` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidades` (`id_comunidad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
