-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2022 a las 20:31:33
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_clae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postimg`
--

CREATE TABLE `postimg` (
  `id_post` int(11) NOT NULL,
  `name_cli` varchar(30) NOT NULL,
  `fav_pornstar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `postimg`
--

INSERT INTO `postimg` (`id_post`, `name_cli`, `fav_pornstar`) VALUES
(1, 'David Stiven Mendieta', 'Lena Paul'),
(2, 'Rafael Guillermo Santos', 'Lana Rhoades'),
(3, 'Carlos Ruiz  ', 'Abella Danger'),
(4, 'Kevin Comenares', 'El negro del whatsapp '),
(5, 'Juan Sebastian Martinez', 'Esperanza Gomez'),
(6, 'Daniel Santiago Fuentes', 'Riley Reid  '),
(7, 'Josue Daniel Chirinos', 'Purple Bitch ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postimg`
--
ALTER TABLE `postimg`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postimg`
--
ALTER TABLE `postimg`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
