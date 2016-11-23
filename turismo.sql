-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2016 a las 04:38:51
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `IdCup` int(11) NOT NULL,
  `CodCup` float NOT NULL,
  `InfCup` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`IdCup`, `CodCup`, `InfCup`) VALUES
(13, 9071860000, 'Ten un 20% de descuento en la entrada de la cola de caballo'),
(14, 1840520000, 'Ten un 15% de descuento en una noche en el Holiday Inn Monterrey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dev`
--

CREATE TABLE `dev` (
  `IdVis` int(11) NOT NULL,
  `IdEven` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dev`
--

INSERT INTO `dev` (`IdVis`, `IdEven`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `IdEven` int(11) NOT NULL,
  `NomEven` varchar(50) NOT NULL,
  `TipoEven` varchar(50) NOT NULL,
  `LugarEven` varchar(50) NOT NULL,
  `FechaEven` date NOT NULL,
  `HoraEven` time NOT NULL,
  `DescriEven` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`IdEven`, `NomEven`, `TipoEven`, `LugarEven`, `FechaEven`, `HoraEven`, `DescriEven`, `imagen`) VALUES
(18, 'Rock', 'Concierto', 'Parque Fundidora', '2016-05-28', '12:00:00', 'Estaran las bandas de rock', ''),
(20, 'Conoce', 'Tour', 'Parque Fundidora', '2016-05-19', '14:01:00', 'Se vera el parque fundidora, despuÃ©s irÃ¡n a la cola de caballo ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitante`
--

CREATE TABLE `visitante` (
  `IdVis` int(11) NOT NULL,
  `NomVis` varchar(50) NOT NULL,
  `ContraVis` varchar(50) NOT NULL,
  `Privilegio` int(11) NOT NULL DEFAULT '1',
  `CorreoVis` varchar(50) NOT NULL,
  `LugarVis` varchar(50) NOT NULL,
  `EdadVis` int(11) NOT NULL,
  `FechaVis` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visitante`
--

INSERT INTO `visitante` (`IdVis`, `NomVis`, `ContraVis`, `Privilegio`, `CorreoVis`, `LugarVis`, `EdadVis`, `FechaVis`) VALUES
(12, 'jairo', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'jairo@hotmail.com', 'monterrey', 20, '2016-05-05 16:00:37'),
(25, 'admin', 'c81e728d9d4c2f636f067f89cc14862c', 2, 'admin@hotmail.com', 'monterrey', 25, '2016-05-09 13:31:05'),
(26, 'ghjghj', '7d3f84fc633db0d67bb081a6d1785c3e', 1, 'ghjghj', 'ghjghj', 45, '2016-05-09 18:13:58'),
(27, 'rtyrty', '7f00d74b31a4308f96601b40048c4e1f', 1, 'sddf@dhdhdfg', 'dfgdfg', 34, '2016-05-09 18:14:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`IdCup`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`IdEven`);

--
-- Indices de la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`IdVis`),
  ADD UNIQUE KEY `CorreoVis` (`CorreoVis`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `IdCup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `IdEven` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `visitante`
--
ALTER TABLE `visitante`
  MODIFY `IdVis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
