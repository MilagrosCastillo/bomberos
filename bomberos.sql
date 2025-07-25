-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2025 a las 17:54:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bomberos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dlaboral`
--

CREATE TABLE `dlaboral` (
  `cedula` int(20) NOT NULL,
  `nivel_academico` varchar(30) NOT NULL,
  `tipo_personal` varchar(30) NOT NULL,
  `jerarquia` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `estatus` varchar(30) NOT NULL,
  `estacion_servicio` varchar(30) NOT NULL,
  `seccion` varchar(30) NOT NULL,
  `rif` varchar(30) NOT NULL,
  `serial_carnet` varchar(30) NOT NULL,
  `codigo_carnet` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dlaboral`
--

INSERT INTO `dlaboral` (`cedula`, `nivel_academico`, `tipo_personal`, `jerarquia`, `cargo`, `estatus`, `estacion_servicio`, `seccion`, `rif`, `serial_carnet`, `codigo_carnet`) VALUES
(31040100, 'NIVEL_ACADEMICO', 'UNIFORMADO_OPERATIVO', 'MAYOR', 'ASESOR_JURIDICO', 'ACTIVO', 'ESTACION', 'SECCION', 'J31040100', '21254844', '21565648'),
(30272820, 'NIVEL_ACADEMICO', 'UNIFORMADO_ADMINISTRATIVO', 'MAYOR', 'MAQUINISTA', 'JUBILADO', 'ESTACION', 'SECCION', 'J30272820', '00483684226', '00486259966'),
(11200300, 'NIVEL_ACADEMICO', 'UNIFORMADO_ADMINISTRATIVO', 'SARGENTO 1ERO', 'ASESOR_JURIDICO', 'ACTIVO', 'ESTACION', 'SECCION', 'J11200300', '0012131566', '00055663333'),
(22100300, 'NIVEL_ACADEMICO', 'UNIFORMADO_OPERATIVO', '1ER. TENIENTE', 'MEDICO', 'ACTIVO', 'ESTACION', 'SECCION', 'J22100300', '002256', '655654225');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dsalud`
--

CREATE TABLE `dsalud` (
  `id` int(11) NOT NULL,
  `fireguard` int(11) NOT NULL,
  `sangre` varchar(20) NOT NULL,
  `disca` varchar(20) NOT NULL,
  `info1` varchar(20) NOT NULL,
  `enfermedad` varchar(20) NOT NULL,
  `info2` varchar(20) NOT NULL,
  `tallap` varchar(20) NOT NULL,
  `tallac` varchar(20) NOT NULL,
  `tallaz` varchar(20) NOT NULL,
  `tallag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dsalud`
--

INSERT INTO `dsalud` (`id`, `fireguard`, `sangre`, `disca`, `info1`, `enfermedad`, `info2`, `tallap`, `tallac`, `tallaz`, `tallag`) VALUES
(1, 31040100, 'B+', 'NO', '', 'NO', '', 'M', 'M', '38', '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `famila`
--

CREATE TABLE `famila` (
  `id` int(12) NOT NULL,
  `uni_cedula` varchar(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `nacimiento` date NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `sangre` varchar(5) NOT NULL,
  `enfermedad` varchar(5) NOT NULL,
  `especi_enf` varchar(30) NOT NULL,
  `disca` varchar(5) NOT NULL,
  `esp_disca` varchar(30) NOT NULL,
  `pariente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `famila`
--

INSERT INTO `famila` (`id`, `uni_cedula`, `nombre`, `nacimiento`, `cedula`, `sexo`, `sangre`, `enfermedad`, `especi_enf`, `disca`, `esp_disca`, `pariente`) VALUES
(1, '31040100', 'KATHERIN ALEJANDRA CARRILLO DI', '2004-01-10', '31040100', 'FEMENINO', 'B+', 'NO', '', 'NO', '', 'SELECIONAR'),
(2, '31040100', 'MILAGROS CASTILLO', '2008-02-15', '35588528', 'FEMENINO', 'A+', 'NO', '', 'NO', '', 'HIJO'),
(3, '31040100', 'JUAN PEREZ', '2018-09-25', '25369845', 'MASCULINO', 'O+', 'SI', 'CANCER', 'SI', 'AUTISMO ', 'ESPOSO'),
(4, '31040100', 'ROBARTO', '1980-02-11', '14511422', 'OTRO', 'O+', 'NO', '', 'SI', 'AMPUTACION MIEMBRO INFERIOR DE', 'PADRE'),
(5, '31040100', 'MARIA HERNANDEZ', '1987-06-16', '45461236', 'FEMENINO', 'AB-', 'NO', '', 'NO', '', 'MADRE'),
(6, '31040100', 'ANTONIA JOSEFINA CASTILLO', '2017-08-18', '20300200', 'FEMENINO', 'AB+', 'SI', 'VISUAL', 'NO', '', 'HIJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fireguard_dates`
--

CREATE TABLE `fireguard_dates` (
  `cedula` int(11) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) DEFAULT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `telefono_fijo` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fireguard_dates`
--

INSERT INTO `fireguard_dates` (`cedula`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `sexo`, `estado_civil`, `nacionalidad`, `telefono`, `telefono_fijo`, `email`, `direccion`) VALUES
(11200300, 'ROBERTO', 'ANDRES', 'UZCATEGUI', 'RODRIGUEZ', '1998-06-17', 'S', 'ESTADO_CIVIL', 'VENEZOLANO', '04122071023', '', 'ROBERTO01@GMAIL.COM', 'SABANA DE MENDOZA'),
(22100300, 'LUIS', 'ANTONIO', 'RODRIGUEZ', 'CARRILLO', '2012-08-08', 'S', 'ESTADO_CIVIL', 'VENEZOLANO', '04123006564', '', 'LUIS04@GMAIL.COM', 'DIVIDIVE MUNICIPIO MIRANDA'),
(30272820, 'MARIANT', 'NATHALY', 'GONZALEZ', 'CASTELLANOS', '2003-05-10', 'S', 'ESTADO_CIVIL', 'VENEZOLANO', '04122075023', '', 'MARIANTG1005@GMAIL.COM', 'DIVIDIVE'),
(31040100, 'KATHERIN', 'ALEJANDRA ', 'CARRILLO', 'DIAZ', '2004-01-18', 'S', 'ESTADO_CIVIL', 'VENEZOLANO', '04269564970', '', 'DIAZKATHERIN_754@GMAIL.COM', 'MIRANDA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersadmin`
--

CREATE TABLE `usersadmin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usersadmin`
--

INSERT INTO `usersadmin` (`id`, `nombre`, `apellido`, `cedula`, `usuario`, `pass`, `cargo`) VALUES
(1, 'mila', 'castillo', '12345678', 'MILA@GMAIL.COM', '1234', 'ADMIN'),
(4, 'KATHERIN', 'CARRILLO', '31040100', 'DIAZKATHERIN_754@GMAIL.COM', '1234', 'PERSONAL'),
(5, 'MARIANT', 'GONZALEZ', '30272820', 'MARIANTG1005@GMAIL.COM', '1234', 'PREVENCION'),
(6, 'ROBERTO', 'UZCATEGUI', '11200300', 'ROBERTO01@GMAIL.COM', '11200300', 'PERSONAL'),
(7, 'LUIS', 'RODRIGUEZ', '22100300', 'LUIS04@GMAIL.COM', '22100300', 'PREVENCION');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dsalud`
--
ALTER TABLE `dsalud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `famila`
--
ALTER TABLE `famila`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fireguard_dates`
--
ALTER TABLE `fireguard_dates`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `usersadmin`
--
ALTER TABLE `usersadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dsalud`
--
ALTER TABLE `dsalud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `famila`
--
ALTER TABLE `famila`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usersadmin`
--
ALTER TABLE `usersadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
