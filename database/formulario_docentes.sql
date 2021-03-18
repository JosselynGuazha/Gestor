-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2021 a las 18:37:10
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario_docentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `fecha` datetime NOT NULL,
  `nombre_docente` varchar(255) NOT NULL,
  `materia` varchar(255) NOT NULL,
  `evento` varchar(1) NOT NULL,
  `syllabu` varchar(500) NOT NULL,
  `guia` varchar(500) NOT NULL,
  `plan` varchar(500) NOT NULL,
  `id_f` int(11) NOT NULL,
  `nota` varchar(500) NOT NULL,
  `asistencia` varchar(500) NOT NULL,
  `ciclo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`fecha`, `nombre_docente`, `materia`, `evento`, `syllabu`, `guia`, `plan`, `id_f`, `nota`, `asistencia`, `ciclo`) VALUES
('2021-03-02 10:48:28', 'dfgsdg', 'dgsdggsdfg', '3', 'syllabu.dgsdggsdfg.3dfgsdg.2021-03-02.H.10-48-28.pdf', 'guia.dgsdggsdfg.3.dfgsdg.2021-03-02.H.10-48-28.xlsx', 'plan.dgsdggsdfg.3.dfgsdg.2021-03-02.H.10-48-28.pdf', 76, 'nota.dgsdggsdfg.3.dfgsdg.2021-03-02.H.10-48-28.xlsx', 'asistencia.dgsdggsdfg.3.dfgsdg.2021-03-02.H.10-48-28.pdf', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_f`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
