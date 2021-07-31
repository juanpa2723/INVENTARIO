-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2021 a las 03:21:22
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `producto`, `precio`, `cantidad`) VALUES
(10, '8523', 'televisor lg', '85.00', 9),
(11, '963', 'laptop hp', '56.00', 9),
(18, '7897685', 'nuevo', '896.00', 6),
(19, '75545', 'probando', '96344.00', 8),
(20, '78799', 'impresora epson', '45.00', 4),
(23, 'qwe', 'qwewt', '345.00', 777);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_usuarios`
--

CREATE TABLE `tabla_usuarios` (
  `id` int(11) NOT NULL COMMENT 'Llave primaria de tabla_productos',
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Código del usuario',
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Visualización de registro del usuario',
  `correo electrónico` varchar(150) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Visualización del registro de E-mail del usuario',
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Visualiza el numero de teléfono del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tabla_usuarios`
--

INSERT INTO `tabla_usuarios` (`id`, `codigo`, `usuario`, `correo electrónico`, `telefono`) VALUES
(22, '8523', 'karen yuliwth', 'karen@gmail.com', '0'),
(23, '554', 'jose damian', 'josean3207@gmail.com', '0'),
(24, '543', 'juan pablo ', 'juanpaacos364@gmail.com', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL COMMENT 'Llave primaria de usuario',
  `nombre` varchar(50) NOT NULL COMMENT 'Registro del usuario',
  `email` varchar(60) NOT NULL COMMENT 'Registro de email del usuario',
  `contraseña` varchar(50) NOT NULL COMMENT 'Registro de contraseña nueva del usuario',
  `fecha_reg` varchar(15) NOT NULL COMMENT 'Registro de fecha del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `contraseña`, `fecha_reg`) VALUES
(33, 'juanpablo acosta', 'juanpaacos13@gmail.com', '12345', '11/02/21'),
(34, 'jose damian', 'josean3207@gmail.com', '12345', '27/02/21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de tabla_productos', AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de usuario', AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
