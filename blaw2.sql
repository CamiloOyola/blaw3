-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 22:50:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blaw2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `idAcceso` int(11) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`idAcceso`, `usuario`, `pass`) VALUES
(1, 'Andrew2', 'Colombia2023&'),
(2, 'Liebesgott', 'Colombia2023#'),
(3, 'Maximo', 'Colombia2023-'),
(4, 'Simona', 'Colombia2023+'),
(5, 'Lupita', 'Colombia2023*');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

CREATE TABLE `colaborador` (
  `idColaborador` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `documento` varchar(80) NOT NULL,
  `tipoDocumento` enum('TI','Pasaporte','CI','') NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `cargo` enum('Director','Sub-Dir','Coordinador','Calidad','Supervisor','Operario') NOT NULL,
  `area` enum('Dueño','Administrativo','Legal','RRHH','Tecnologia','Segurirdad') NOT NULL,
  `rol` enum('Administrador','Usuario') NOT NULL,
  `accesoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `colaborador`
--

INSERT INTO `colaborador` (`idColaborador`, `nombre`, `apellido`, `documento`, `tipoDocumento`, `email`, `celular`, `cargo`, `area`, `rol`, `accesoId`) VALUES
(3, 'Haz', 'Montoy', '345678', 'Pasaporte', 'notiene@gmail.co', '31025', 'Director', 'Legal', 'Usuario', 3),
(18, 'camilo', 'perez', '123', 'TI', 'joseoster21@gmail.com', '123324', 'Director', 'Administrativo', 'Administrador', 1),
(19, 'camilo', 'perez', '123', 'TI', 'joseoster21@gmail.com', '123324', 'Director', 'Administrativo', 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallo`
--

CREATE TABLE `fallo` (
  `idFallo` int(11) NOT NULL,
  `respuesta` enum('Procede','No Procede') DEFAULT NULL,
  `sancion` varchar(45) NOT NULL,
  `fechaEjecucion` date NOT NULL,
  `fechaNotificacion` date NOT NULL,
  `observacionesF` varchar(500) NOT NULL,
  `falloId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `idProceso` int(11) NOT NULL,
  `tipoProceso` enum('Negativa','Positiva','Radicacion') DEFAULT NULL,
  `categoria` enum('Leve','Moderada','Grave') DEFAULT NULL,
  `fechaHechos` date NOT NULL,
  `evidencia` varbinary(30000) NOT NULL,
  `observacionP` varchar(500) NOT NULL,
  `colaborador_idColaborador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`idProceso`, `tipoProceso`, `categoria`, `fechaHechos`, `evidencia`, `observacionP`, `colaborador_idColaborador`) VALUES
(1, 'Negativa', 'Leve', '2023-04-28', 0x20, 'sorry', 0),
(2, 'Positiva', 'Moderada', '2023-04-28', 0x20, 'felicidades', 0),
(3, 'Negativa', 'Moderada', '2023-04-28', 0x20, 'sorry', 0),
(4, 'Positiva', 'Moderada', '2023-04-28', 0x20, 'felicidades', 0),
(5, 'Positiva', 'Moderada', '2023-04-28', 0x20, 'felicidades', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`idAcceso`);

--
-- Indices de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`idColaborador`),
  ADD KEY `FKcolaboradoracceso` (`accesoId`);

--
-- Indices de la tabla `fallo`
--
ALTER TABLE `fallo`
  ADD PRIMARY KEY (`idFallo`),
  ADD KEY `FKfalloproceso` (`falloId`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`idProceso`),
  ADD KEY `fk_proceso_colaborador1_idx` (`colaborador_idColaborador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `idAcceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `idColaborador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `fallo`
--
ALTER TABLE `fallo`
  MODIFY `idFallo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `idProceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colaborador`
--
ALTER TABLE `colaborador`
  ADD CONSTRAINT `FKcolaboradoracceso` FOREIGN KEY (`accesoId`) REFERENCES `acceso` (`idAcceso`);

--
-- Filtros para la tabla `fallo`
--
ALTER TABLE `fallo`
  ADD CONSTRAINT `FKfalloproceso` FOREIGN KEY (`falloId`) REFERENCES `proceso` (`idProceso`);

--
-- Filtros para la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD CONSTRAINT `fk_proceso_colaborador1` FOREIGN KEY (`colaborador_idColaborador`) REFERENCES `colaborador` (`idColaborador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
