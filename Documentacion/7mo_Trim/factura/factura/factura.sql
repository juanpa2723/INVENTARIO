-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2021 a las 01:29:04
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `factura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `nombre_empresa` varchar(250) CHARACTER SET utf8 NOT NULL,
  `direccion_factura` text CHARACTER SET utf8 NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `monto_impuesto` decimal(10,2) NOT NULL,
  `tasa_impuesto` varchar(250) CHARACTER SET utf8 NOT NULL,
  `total` double(10,2) NOT NULL,
  `cantidad_pagada` decimal(10,2) NOT NULL,
  `cantidad_debida` decimal(10,2) NOT NULL,
  `notas` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `user_id`, `fecha_creacion`, `nombre_empresa`, `direccion_factura`, `subtotal`, `monto_impuesto`, `tasa_impuesto`, `total`, `cantidad_pagada`, `cantidad_debida`, `notas`) VALUES
(1, 1, '2021-10-29 22:14:00', 'List balance', 'Bogota D.C', '6900.00', '1311.00', '19', 8211.00, '3000.00', '5211.00', 'sin comentarios'),
(2, 1, '2021-10-30 00:16:35', 'tu', 'bogota', '128700.00', '24453.00', '19', 153153.00, '20000.00', '133153.00', 'sin comentarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_producto`
--

CREATE TABLE `factura_producto` (
  `id_orden_producto` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `codigo_producto` varchar(250) NOT NULL,
  `producto` varchar(250) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `total_producto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura_producto`
--

INSERT INTO `factura_producto` (`id_orden_producto`, `id_factura`, `codigo_producto`, `producto`, `cantidad`, `precio`, `total_producto`) VALUES
(4, 1, '003', 'gaseosa', '3.00', '2300.00', '6900.00'),
(5, 2, '002', 'gaseosa', '3.00', '34500.00', '103500.00'),
(6, 2, '001', 'platano', '3.00', '7800.00', '23400.00'),
(7, 2, '022', 'huevos', '1.00', '1800.00', '1800.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `contraseña`, `nombre`, `apellido`, `celular`, `direccion`) VALUES
(1, 'josean3207@gmail.com', '12345', 'Jose ', 'Cuscue', 3202176003, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `factura_producto`
--
ALTER TABLE `factura_producto`
  ADD PRIMARY KEY (`id_orden_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `factura_producto`
--
ALTER TABLE `factura_producto`
  MODIFY `id_orden_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
