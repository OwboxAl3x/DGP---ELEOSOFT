-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2018 a las 16:38:14
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Eleosoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Aparece`
--

CREATE TABLE `Aparece` (
  `IDruta` int(5) NOT NULL,
  `IDlugar` int(5) NOT NULL,
  `posicion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Coordenada`
--

CREATE TABLE `Coordenada` (
  `IDcoord` int(5) NOT NULL,
  `IDsugeruta` int(5) NOT NULL,
  `latitud` float NOT NULL,
  `longitud` float NOT NULL,
  `orden` int(2) NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1' COMMENT '0=inactivo, 1=activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Lugar`
--

CREATE TABLE `Lugar` (
  `IDlugar` int(5) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `puntuacion` float NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1' COMMENT '0=inactivo, 1=activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Realiza`
--

CREATE TABLE `Realiza` (
  `IDusuario` int(5) NOT NULL,
  `IDruta` int(5) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'dd-mm-yyyy',
  `puntuacion` float NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Recurso`
--

CREATE TABLE `Recurso` (
  `IDrecurso` int(5) NOT NULL,
  `IDlugar` int(5) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL COMMENT '1=video, 2=audio, 3=imagen',
  `url` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1' COMMENT '0=inactivo, 1=activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ruta`
--

CREATE TABLE `Ruta` (
  `IDruta` int(5) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `puntuacion` float NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1' COMMENT '0=inactivo, 1=activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SugerenciaLugar`
--

CREATE TABLE `SugerenciaLugar` (
  `IDsugelugar` int(5) NOT NULL,
  `IDusuario` int(5) DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1' COMMENT '1=pendiente, 2=aceptada, 3=rechazada',
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'dd-mm-yyyy',
  `latitud` float NOT NULL,
  `longitud` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SugerenciaRuta`
--

CREATE TABLE `SugerenciaRuta` (
  `IDsugeruta` int(5) NOT NULL,
  `IDusuario` int(5) DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL COMMENT '1=pendiente, 2=aceptada, 3=rechazada',
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'dd-mm-yyyy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `IDusuario` int(5) NOT NULL,
  `login` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(1) NOT NULL DEFAULT '1' COMMENT '1=normal, 2=admin',
  `activo` int(1) NOT NULL DEFAULT '1' COMMENT '1=activo, 0=inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Visita`
--

CREATE TABLE `Visita` (
  `IDusuario` int(5) NOT NULL,
  `IDlugar` int(5) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'dd-mm-yyyy',
  `puntuacion` float NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Aparece`
--
ALTER TABLE `Aparece`
  ADD PRIMARY KEY (`IDruta`,`IDlugar`),
  ADD KEY `lugarAparece` (`IDlugar`);

--
-- Indices de la tabla `Coordenada`
--
ALTER TABLE `Coordenada`
  ADD PRIMARY KEY (`IDcoord`),
  ADD KEY `IDsugeruta` (`IDsugeruta`);

--
-- Indices de la tabla `Lugar`
--
ALTER TABLE `Lugar`
  ADD PRIMARY KEY (`IDlugar`);

--
-- Indices de la tabla `Realiza`
--
ALTER TABLE `Realiza`
  ADD PRIMARY KEY (`IDusuario`,`IDruta`),
  ADD KEY `rutaRealiza` (`IDruta`);

--
-- Indices de la tabla `Recurso`
--
ALTER TABLE `Recurso`
  ADD PRIMARY KEY (`IDrecurso`),
  ADD KEY `IDlugar` (`IDlugar`);

--
-- Indices de la tabla `Ruta`
--
ALTER TABLE `Ruta`
  ADD PRIMARY KEY (`IDruta`);

--
-- Indices de la tabla `SugerenciaLugar`
--
ALTER TABLE `SugerenciaLugar`
  ADD PRIMARY KEY (`IDsugelugar`),
  ADD KEY `IDusuario` (`IDusuario`);

--
-- Indices de la tabla `SugerenciaRuta`
--
ALTER TABLE `SugerenciaRuta`
  ADD PRIMARY KEY (`IDsugeruta`),
  ADD KEY `IDusuario` (`IDusuario`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`IDusuario`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indices de la tabla `Visita`
--
ALTER TABLE `Visita`
  ADD PRIMARY KEY (`IDusuario`,`IDlugar`),
  ADD KEY `lugarVisita` (`IDlugar`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Coordenada`
--
ALTER TABLE `Coordenada`
  MODIFY `IDcoord` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Lugar`
--
ALTER TABLE `Lugar`
  MODIFY `IDlugar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Recurso`
--
ALTER TABLE `Recurso`
  MODIFY `IDrecurso` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Ruta`
--
ALTER TABLE `Ruta`
  MODIFY `IDruta` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `SugerenciaLugar`
--
ALTER TABLE `SugerenciaLugar`
  MODIFY `IDsugelugar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `SugerenciaRuta`
--
ALTER TABLE `SugerenciaRuta`
  MODIFY `IDsugeruta` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `IDusuario` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Aparece`
--
ALTER TABLE `Aparece`
  ADD CONSTRAINT `lugarAparece` FOREIGN KEY (`IDlugar`) REFERENCES `Lugar` (`IDlugar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rutaAparece` FOREIGN KEY (`IDruta`) REFERENCES `Ruta` (`IDruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Coordenada`
--
ALTER TABLE `Coordenada`
  ADD CONSTRAINT `sugerutaCoord` FOREIGN KEY (`IDsugeruta`) REFERENCES `SugerenciaRuta` (`IDsugeruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Realiza`
--
ALTER TABLE `Realiza`
  ADD CONSTRAINT `rutaRealiza` FOREIGN KEY (`IDruta`) REFERENCES `Ruta` (`IDruta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarioRealiza` FOREIGN KEY (`IDusuario`) REFERENCES `Usuario` (`IDusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Recurso`
--
ALTER TABLE `Recurso`
  ADD CONSTRAINT `lugarRecurso` FOREIGN KEY (`IDlugar`) REFERENCES `Lugar` (`IDlugar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `SugerenciaLugar`
--
ALTER TABLE `SugerenciaLugar`
  ADD CONSTRAINT `usuarioLugar` FOREIGN KEY (`IDusuario`) REFERENCES `Usuario` (`IDusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `SugerenciaRuta`
--
ALTER TABLE `SugerenciaRuta`
  ADD CONSTRAINT `usuarioRuta` FOREIGN KEY (`IDusuario`) REFERENCES `Usuario` (`IDusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Visita`
--
ALTER TABLE `Visita`
  ADD CONSTRAINT `lugarVisita` FOREIGN KEY (`IDlugar`) REFERENCES `Lugar` (`IDlugar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarioVisita` FOREIGN KEY (`IDusuario`) REFERENCES `Usuario` (`IDusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
