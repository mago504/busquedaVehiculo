-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2023 a las 23:54:45
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
-- Base de datos: `vehiculosearch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE `base` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `matricule` varchar(200) NOT NULL,
  `depart` varchar(100) NOT NULL,
  `poste` varchar(100) NOT NULL,
  `date_emb` timestamp NOT NULL DEFAULT current_timestamp(),
  `statut` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Volcado de datos para la tabla `base`
--

INSERT INTO `base` (`id`, `nom`, `prenom`, `matricule`, `depart`, `poste`, `date_emb`, `statut`) VALUES
(2, 'Carlos', 'Hernandez', 'HB5798', 'Honda', 'Fit', '2023-04-29 12:00:00', 1),
(3, 'Pedro ', 'Ramírez ', 'GHI789', 'Ford', 'Mustang', '2020-11-10 12:00:00', 1),
(4, 'Luis', 'López', 'JKL012', 'Chevrolet', 'Camaro', '2023-04-04 12:00:00', 1),
(5, 'Ana', 'Martínez', 'MNO345', 'Nissan', 'Sentra', '2023-04-05 12:00:00', 1),
(6, 'José', 'Castillo', 'PQR678', 'BMW', 'Serie 3', '2023-04-06 12:00:00', 1),
(7, 'Carla', 'Sánchez', 'STU901', 'Mazda', 'CX-5', '2023-04-07 12:00:00', 1),
(8, 'Héctor', 'Fernández', 'VWX234', 'Mercedes-Benz', 'Clase C', '2023-04-08 12:00:00', 1),
(9, 'Laura', 'Gutiérrez', 'YZA567', 'Kia', 'Soul', '2023-04-09 12:00:00', 1),
(10, 'Jorge', 'Díaz', 'BCD890', 'Audi', 'A4', '2023-04-10 12:00:00', 1),
(11, 'Fabiola', 'Hernández', 'EFG123', 'Jeep', 'Wrangler', '2023-04-11 12:00:00', 1),
(12, 'Andrés', 'García', 'HIJ456', 'Volkswagen', 'Golf', '0000-00-00 00:00:00', 0),
(13, 'Mónica', 'Pérez', 'KLM789', 'Tesla', 'Model 3', '2023-04-13 12:00:00', 1),
(14, 'Juan', 'Pérez', 'ABC123', 'Toyota', 'Corolla', '2023-04-01 12:00:00', 1),
(15, 'Susana', 'Santos', 'QRS345', 'Subaru', 'Impreza', '2023-04-15 12:00:00', 1),
(17, 'Roberto', 'Martínez', 'NOP0123', 'Hyundai', 'Elantra', '0000-00-00 00:00:00', 1),
(21, 'María', 'González', 'DEF456', 'Honda', 'Civic', '2023-04-02 12:00:00', 1),
(22, 'Nelson', 'Gomez', 'HDP7879', 'Mitsubishi', 'Eclipse', '2023-04-06 12:00:00', 1),
(30, 'Juan', 'Perez', 'ABC-123', 'Toyota', 'Corolla', '2020-05-15 12:00:00', 1),
(31, 'Maria', 'Gomez', 'DEF-456', 'Chevrolet', 'Spark', '2018-09-10 12:00:00', 1),
(32, 'Carlos', 'Rodriguez', 'GHI-789', 'Ford', 'Fiesta', '2021-01-20 12:00:00', 1),
(33, 'Laura', 'Lopez', 'JKL-012', 'Toyota', 'Yaris', '2019-11-28 12:00:00', 1),
(34, 'Pedro', 'Garcia', 'MNO-345', 'Chevrolet', 'Camaro', '2017-08-05 12:00:00', 1),
(35, 'Ana', 'Fernandez', 'PQR-678', 'Ford', 'Mustang', '2020-07-01 12:00:00', 1),
(36, 'Jose', 'Sanchez', 'STU-901', 'Toyota', 'Hilux', '2018-03-12 12:00:00', 1),
(37, 'Julia', 'Molina', 'VWX-234', 'Chevrolet', 'Traverse', '2016-12-22 12:00:00', 1),
(38, 'Mario', 'Diaz', 'YZA-567', 'Ford', 'Escape', '2022-02-28 12:00:00', 1),
(39, 'Lucia', 'Paz', 'BCD-890', 'Toyota', 'Rav4', '2019-09-18 12:00:00', 1),
(40, 'Andres', 'Cruz', 'EFG-123', 'Chevrolet', 'Equinox', '2017-06-09 12:00:00', 1),
(41, 'Sofia', 'Gutierrez', 'HIJ-456', 'Ford', 'Explorer', '2021-04-30 12:00:00', 1),
(42, 'Roberto', 'Castro', 'KLM-789', 'Toyota', 'Camry', '2018-02-15 12:00:00', 1),
(43, 'Carla', 'Flores', 'NOP-012', 'Chevrolet', 'Silverado', '2016-11-26 12:00:00', 1),
(44, 'Antonio', 'Ruiz', 'QRS-345', 'Ford', 'F-150', '2020-06-03 12:00:00', 1),
(45, 'Isabel', 'Soto', 'TUV-678', 'Toyota', 'Tacoma', '2019-10-14 12:00:00', 1),
(46, 'Raul', 'Hernandez', 'WXY-901', 'Chevrolet', 'Suburban', '2017-07-25 12:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Carlos Hernandez', 'carls', '$2y$12$ZnFCl4Qye2MjoeIl2MeRUOqLKgPfnoycZSBzkoVhXBU174PM07yUW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `base`
--
ALTER TABLE `base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
