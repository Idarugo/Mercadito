-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2022 a las 15:40:50
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mercadito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billing`
--

CREATE TABLE `billing` (
  `id` int(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `commune` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(12) NOT NULL,
  `imagen` longblob NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book_time`
--

CREATE TABLE `book_time` (
  `id` int(12) NOT NULL,
  `date` date DEFAULT NULL,
  `hour` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carshop`
--

CREATE TABLE `carshop` (
  `id` int(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `subtotal` varchar(30) NOT NULL,
  `users` int(12) NOT NULL,
  `delivery` int(12) NOT NULL,
  `billing` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(12) NOT NULL,
  `image_category` longblob NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delivery`
--

CREATE TABLE `delivery` (
  `id` int(12) NOT NULL,
  `send` int(12) NOT NULL,
  `withdrawal` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_plants`
--

CREATE TABLE `image_plants` (
  `id` int(12) NOT NULL,
  `plants` int(12) NOT NULL,
  `image_1` longblob NOT NULL,
  `image_2` longblob NOT NULL,
  `image_3` longblob NOT NULL,
  `image_4` longblob NOT NULL,
  `image_5` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plants`
--

CREATE TABLE `plants` (
  `id` int(12) NOT NULL,
  `title` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `category` int(12) NOT NULL,
  `image` longblob NOT NULL,
  `cant` int(12) NOT NULL,
  `about` varchar(30) NOT NULL,
  `tips` varchar(30) NOT NULL,
  `health_benefit` varchar(30) NOT NULL,
  `primary_care` varchar(30) NOT NULL,
  `also_known_as` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `send`
--

CREATE TABLE `send` (
  `id` int(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `commune` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `imagen` longblob NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `rol` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(12) NOT NULL,
  `retreat_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `book_time`
--
ALTER TABLE `book_time`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carshop`
--
ALTER TABLE `carshop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `delivery` (`delivery`),
  ADD UNIQUE KEY `billing` (`billing`),
  ADD KEY `carshop_ibfk_1` (`users`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `send` (`send`),
  ADD UNIQUE KEY `withdrawal` (`withdrawal`);

--
-- Indices de la tabla `image_plants`
--
ALTER TABLE `image_plants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plants` (`plants`) USING BTREE;

--
-- Indices de la tabla `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indices de la tabla `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `book_time`
--
ALTER TABLE `book_time`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carshop`
--
ALTER TABLE `carshop`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `image_plants`
--
ALTER TABLE `image_plants`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `send`
--
ALTER TABLE `send`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carshop`
--
ALTER TABLE `carshop`
  ADD CONSTRAINT `carshop_ibfk_1` FOREIGN KEY (`users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carshop_ibfk_2` FOREIGN KEY (`delivery`) REFERENCES `delivery` (`id`),
  ADD CONSTRAINT `carshop_ibfk_3` FOREIGN KEY (`billing`) REFERENCES `billing` (`id`);

--
-- Filtros para la tabla `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`send`) REFERENCES `send` (`id`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`withdrawal`) REFERENCES `withdrawal` (`id`);

--
-- Filtros para la tabla `image_plants`
--
ALTER TABLE `image_plants`
  ADD CONSTRAINT `image_plants_ibfk_1` FOREIGN KEY (`plants`) REFERENCES `plants` (`id`);

--
-- Filtros para la tabla `plants`
--
ALTER TABLE `plants`
  ADD CONSTRAINT `plants_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
