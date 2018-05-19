-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2018 a las 04:55:18
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ps`
--
CREATE DATABASE IF NOT EXISTS `ps` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ps`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejo`
--

CREATE TABLE `consejo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dep_sec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consejo`
--

INSERT INTO `consejo` (`id`, `nombre`, `dep_sec`) VALUES
(2, 'Ing Marco Vinicio Calderon Castellanos', 'Agronomia'),
(3, 'Lcda Lisseth Nohemy Saleh Blanco', 'Mercadeo Internacional'),
(4, 'Lcda Dinora Rosales Hernandez', 'Admon de Empresas'),
(5, 'Lic. Jose Leonidas Morales', 'Contaduria Publica'),
(6, 'Lic. Luis Alonso Colato Salamanca', 'Biologia'),
(7, 'Lcda Karla Maria Mejia', 'Matematica'),
(8, 'Lic. Oscar Armando Calderon Castellanos', 'Fisica'),
(9, 'Ing Rigoberto Lopez', 'Ingenieria y Arquitectura'),
(10, 'Lic. Silverio Enrique Berrios Polio', 'Sociologia'),
(11, 'Lcda Marleny del Carmen Guevara de Sorto', 'Educacion'),
(12, 'Lic. Raul Orlando Romero Lopez', 'Ingles'),
(13, 'Lic. Rafael Sol Samayoa', 'Letras'),
(14, 'Lic. Jose Milton Dominguez Vargas', 'Psicologia'),
(15, 'Dr. Ramon Narciso Granados Zelaya', 'Derecho'),
(16, 'Lcda. Maria del Carmen De Heski', 'Post-Grado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(3, 'Admon de Empresas'),
(1, 'Agronomia'),
(5, 'Biologia'),
(4, 'Contaduria Publica'),
(14, 'Derecho'),
(10, 'Educacion'),
(7, 'Fisica'),
(8, 'Ingenieria y Arquitectura'),
(11, 'Ingles'),
(12, 'Letras'),
(6, 'Matematica'),
(2, 'Mercadeo Internacional'),
(15, 'Post-Grado'),
(13, 'Psicologia'),
(9, 'Sociologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `registro` text NOT NULL,
  `dep_sec` int(11) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `anio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` char(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `tipo` varchar(25) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `nombre`, `password`, `fecha`, `tipo`) VALUES
('admin', 'Santiago Ulloa', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2018-05-15', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consejo`
--
ALTER TABLE `consejo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dep_sec` (`dep_sec`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dep_sec` (`dep_sec`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consejo`
--
ALTER TABLE `consejo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consejo`
--
ALTER TABLE `consejo`
  ADD CONSTRAINT `consejo_ibfk_1` FOREIGN KEY (`dep_sec`) REFERENCES `departamentos` (`nombre`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `dep_fk` FOREIGN KEY (`dep_sec`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
