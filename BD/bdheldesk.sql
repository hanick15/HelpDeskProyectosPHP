-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2023 a las 03:29:01
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdheldesk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nom`) VALUES
(1, 'hadware'),
(2, 'Software'),
(3, 'Incidencia'),
(4, 'Petición de servicio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `tick_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `tick_titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tick_descrip` varchar(8000) COLLATE utf8_spanish_ci NOT NULL,
  `tick_estado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`tick_id`, `usu_id`, `cat_id`, `tick_titulo`, `tick_descrip`, `tick_estado`, `fech_crea`, `est`) VALUES
(1, 1, 1, 'test', 'test', 'Cerrado', '2023-05-24 14:07:42', 1),
(2, 1, 1, 'test2', '<p>test</p>', 'Cerrado', '2023-05-14 14:07:47', 1),
(3, 1, 1, 'test2', '<p>test</p>', 'Cancelado', '2023-05-06 14:07:50', 1),
(4, 1, 1, 'fdfdfdf', '<p>test</p>', 'Abierto', '2023-05-27 14:07:53', 1),
(5, 1, 1, 'test2', '<p>test</p>', 'Abierto', '2023-05-01 14:07:55', 1),
(6, 1, 1, 'fdfdfdfccc', '<p>test</p>', 'Abierto', '2023-05-30 14:07:58', 1),
(7, 1, 2, 'testuuu', '<p>test</p>', 'Abierto', '2023-05-13 14:08:03', 1),
(8, 1, 4, 'Solicitud de mouse', '<p>Hola</p>', 'Abierto', '2023-05-15 08:08:06', 1),
(9, 1, 4, 'Solicitud de mouse', '<p>Hola</p>', 'Abierto', '2023-05-20 14:08:10', 1),
(10, 1, 1, 'dsdsdds', '<p>test</p>', 'Abierto', '2023-05-01 14:08:15', 1),
(11, 1, 1, 'dsdsdds', '<p>test</p>', 'Abierto', '2023-05-09 14:08:13', 1),
(12, 1, 1, 'testeeee', '<p>test</p>', 'Abierto', '2023-05-15 14:08:17', 1),
(13, 1, 1, 'testgg', '<p>test</p>', 'Cancelado', '2023-05-20 14:08:19', 1),
(14, 1, 1, 'qwerrtfs', '<p>cvbnmkjhgfds</p><p>test</p>', 'Cerrado', '2023-05-01 14:08:21', 1),
(15, 1, 4, 'Solicitud de laptop', '<p>Solicitud de laptop por nuevo ingreso.</p>', 'Abierto', '2023-05-25 14:10:18', 1),
(16, 3, 1, 'Falla de servidor', '<p>Problema de servidor de TI</p>', 'Abierto', '2023-05-25 20:28:13', 1),
(17, 1, 1, 'Falla de servidor', '<p>test</p>', 'Abierto', '2023-05-26 08:56:55', 1),
(18, 1, 1, 'Falla de servidor', '<p>test</p>', 'Abierto', '2023-05-26 08:58:18', 1),
(19, 1, 1, 'problema con mouse', '<p>He desconectado y vuelto a conectar el mouse asimismo, lo probe con otras entradas</p>', 'Abierto', '2023-05-27 12:50:02', 1),
(20, 1, 1, 'Error con la red', '<p>No tengo acceso a internet</p>', 'Abierto', '2023-05-28 13:32:39', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketdetalle`
--

CREATE TABLE `ticketdetalle` (
  `tickd_id` int(11) NOT NULL,
  `tick_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `tickd_descrip` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ticketdetalle`
--

INSERT INTO `ticketdetalle` (`tickd_id`, `tick_id`, `usu_id`, `tickd_descrip`, `fech_crea`, `est`) VALUES
(1, 1, 1, 'Revisando el caso', '2023-05-25 21:21:06', 1),
(2, 1, 3, 'El caso se asigno, revisare tu caso', '2023-05-25 21:22:18', 1),
(3, 1, 3, 'El caso ha sido resuelto.', '2023-05-25 21:23:20', 1),
(4, 5, 3, 'test', '2023-05-26 08:29:41', 1),
(5, 1, 2, '<p>test</p>', '2023-05-26 08:42:18', 1),
(6, 1, 2, '<p>test</p>', '2023-05-26 08:42:20', 1),
(7, 1, 2, '<p>test</p>', '2023-05-26 08:42:20', 1),
(8, 1, 2, '<p>test</p>', '2023-05-26 08:42:20', 1),
(9, 1, 2, '<p>test</p>', '2023-05-26 08:42:53', 1),
(10, 7, 2, '<p>test</p>', '2023-05-26 08:45:14', 1),
(11, 7, 2, '<p>test</p>', '2023-05-26 08:45:22', 1),
(12, 7, 2, '<p>test</p>', '2023-05-26 08:46:34', 1),
(13, 7, 2, '<p>test</p>', '2023-05-26 08:46:46', 1),
(14, 7, 2, '<p>test</p>', '2023-05-26 08:46:54', 1),
(15, 7, 2, '<p>test</p>', '2023-05-26 08:47:12', 1),
(16, 10, 2, '<p>test</p>', '2023-05-26 08:47:25', 1),
(17, 8, 2, '<p>test</p>', '2023-05-26 08:48:12', 1),
(18, 8, 2, '<p>prueba</p>', '2023-05-26 08:53:09', 1),
(19, 2, 1, '<p>test</p>', '2023-05-26 09:07:03', 1),
(20, 20, 1, '<p>Estamos revisando</p>', '2023-05-28 13:33:48', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nom` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_ape` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_pass` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `fech_crear` datetime DEFAULT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla mantenedor de usuario';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nom`, `usu_ape`, `usu_correo`, `usu_pass`, `rol_id`, `fech_crear`, `fech_modi`, `fech_elim`, `estatus`) VALUES
(1, 'harold', 'Ferruzo', 'hferruzo@hotmail.com', '123456', 1, '2023-05-24 14:52:29', NULL, NULL, 1),
(2, 'Nick', 'Ferruzo', 'harnickf@gmail.com', '123456', 2, '2023-05-24 14:52:29', NULL, NULL, 1),
(3, 'Henry', 'Urteaga', 'hurteaga@outlook.com', '123456', 1, '2023-05-25 20:26:30', NULL, NULL, 1),
(5, 'Demo', 'Demo', 'Demo@gmail.com', '123456', 1, '2023-05-26 12:44:19', NULL, '2023-05-26 12:49:13', 0),
(6, 'henryy', 'Urteaga', 'hurteaga@gmail.com', '123456', 2, '2023-05-26 12:44:19', NULL, NULL, 1),
(7, 'test', 'test', 'test@gmail.com', '123456', 1, '2023-05-26 16:51:08', NULL, '2023-05-28 13:37:01', 0),
(8, 'ysabel', 'Poma Carhuallanqui', 'yscarmin@gmail.com', '123456', 2, '2023-05-28 13:36:35', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tick_id`);

--
-- Indices de la tabla `ticketdetalle`
--
ALTER TABLE `ticketdetalle`
  ADD PRIMARY KEY (`tickd_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tick_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ticketdetalle`
--
ALTER TABLE `ticketdetalle`
  MODIFY `tickd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
