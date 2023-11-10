-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 23:11:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pt05_eric_rubio`
--
DROP DATABASE IF EXISTS `pt05_eric_rubio`;
CREATE DATABASE IF NOT EXISTS `pt05_eric_rubio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pt05_eric_rubio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `article` varchar(50) NOT NULL,
  `id_usuari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `article`, `id_usuari`) VALUES
(1, 'Nou 3', 1),
(2, 'Hola', 1),
(3, 'Article6', 1),
(4, 'Article7', 1),
(5, 'Article8', 1),
(6, 'Article9', 1),
(7, 'Article10', 1),
(8, 'Article11', 1),
(9, 'Article12', 1),
(10, 'Article13', 1),
(11, 'Article14', 1),
(12, 'Article15', 1),
(13, 'Article16', 1),
(14, 'Article17', 1),
(15, 'Article18', 1),
(16, 'Article19', 1),
(17, 'Article20', 1),
(18, 'Article21', 1),
(19, 'Article22', 1),
(20, 'Article23', 1),
(21, 'Article24', 1),
(22, 'Article25', 1),
(23, 'Nou Article', 4),
(24, 'Hola', 1),
(25, 'Hola', 1),
(26, 'Adeu', 1),
(27, 'REs', 1),
(28, 'REs', 1),
(29, 'REs', 1),
(30, 'Bona tarda', 1),
(32, 'Bones', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `correu` varchar(50) NOT NULL,
  `contrasenya` varchar(256) NOT NULL,
  `reset_token` text NOT NULL,
  `expires` datetime DEFAULT NULL,
  `remember_me_token` text NOT NULL,
  `social_provider` enum('Twitter','Github','Google') DEFAULT NULL,
  `Administrador` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`id`, `nom`, `correu`, `contrasenya`, `reset_token`, `expires`, `remember_me_token`, `social_provider`, `Administrador`) VALUES
(1, 'eric', 'e.rubio@sapalomera.cat', '$2y$10$/jBfUiVCIZzX47QDXpO8POb1CbYfolpEa.bVfQcF5tG2ozVzE1bRm', '', NULL, '', '', 0),
(2, 'Biel', 'b.rubio@sapalomera.cat', '$2y$10$riydF4dYWN9nIAiv0GaC7.E08GJZ.T3z6MplhD7a.aVUVVq/3tQcW', '', NULL, '', '', 0),
(3, 'Pere Pi', 'p.pi@sapalomera.cat', '$2y$10$8xosBEAEz.1sQRH5dJLFxOkKFeJCmZKprhHjiesEuId0ZyoBnJNBm', '', NULL, '', '', 0),
(4, 'Marta Mas', 'm.mas@sapalomera.cat', '$2y$10$GMpMjPRafy0R0BEOIJB5JeHJQ4YuRFloabIKQIZd3IhJ1azFEA75C', '', NULL, '', '', 0),
(5, 'Dani', 'd.torres@sapalomera.cat', '$2y$10$uQs0SGSUpx6q99lDALzZE.Lyvd/MVJRTi1PsQYYjJlFs1.u/yz7zm', '', NULL, '', '', 0),
(7, 'A', '1234@gmail.com', '$2y$10$PRpKTL9WIyG8xm6yNm6GD.mqLCNoUKoa7wlr6B.EkLkWQfmUH8cMe', '', NULL, '', NULL, 0),
(8, 'Eric', 'ericrubiosanchez@gmail.com', '', '', NULL, '', 'Google', 0),
(9, 'EricRubioSanchez', 'EricRubioSanchez@sapalomera.ca', '', '', NULL, '', 'Github', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correu` (`correu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuaris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
