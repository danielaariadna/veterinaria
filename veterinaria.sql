-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2023 a las 15:45:45
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
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amo-mascota`
--

CREATE TABLE `amo-mascota` (
  `id` int(11) NOT NULL,
  `id_amo` int(11) NOT NULL,
  `id_mascota` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `motivo` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `amo-mascota`
--

INSERT INTO `amo-mascota` (`id`, `id_amo`, `id_mascota`, `fecha_inicio`, `fecha_fin`, `motivo`) VALUES
(3, 18, 18, '2023-05-30', '2023-05-25', 'venta'),
(4, 18, 19, '2023-05-30', '2023-05-31', 'fallecimiento'),
(5, 19, 22, '2023-05-06', '2023-05-31', 'fallecimiento'),
(6, 18, 22, '2023-06-26', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amos`
--

CREATE TABLE `amos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_alta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `amos`
--

INSERT INTO `amos` (`id`, `nombre`, `apellido`, `dni`, `direccion`, `telefono`, `fecha_alta`) VALUES
(18, 'Daniela', 'Morales', 42749763, 'La Punta, mod9, m22, c12', '2664338927', '2023-05-30'),
(19, 'Santiago', 'Oyola', 43234432, 'Barrio Ampare, m12, c2', '2664897654', '2023-05-20'),
(20, 'Francisco', 'Sayago', 42786543, 'Suyuque', '2664300983', '2023-05-13'),
(21, 'Alejandro', 'Bueno', 40987899, 'La Punta, mod3, m2, c2', '2664354534', '2023-05-30'),
(22, 'Jimena', 'Muñoz', 40987789, 'Barrio 500° viv, m2, c2', '2664876364', '2023-05-30'),
(28, 'Valentina', 'Ochoa', 42567765, 'la punta', '2664389876', '2023-06-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `raza` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `especie` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nro_registro` int(20) NOT NULL,
  `edad` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_defuncion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `raza`, `especie`, `sexo`, `nro_registro`, `edad`, `fecha_alta`, `fecha_defuncion`) VALUES
(18, 'Kitty', 'Gato', 'Mamífero', 'hembra', 11111, '3 meses', '2023-05-30', '0000-00-00'),
(19, 'Toto', 'Perro, caniche', 'Mamífero', 'macho', 11112, '3 años', '2023-05-01', '2023-05-31'),
(20, 'Lola', 'Perro, Beagle', 'Mamífero', 'hembra', 11113, '10 años', '2023-04-19', '0000-00-00'),
(21, 'Mimi', 'Dragon de Komodo', 'Reptil', 'hembra', 11114, '2 años', '2023-05-08', '0000-00-00'),
(22, 'Michi', 'Gato', 'Mamífero', 'macho', 11115, '1 mes', '2023-05-10', '2023-05-31'),
(23, 'Roco', 'Pez payaso', 'Pez', 'macho', 11116, '5 meses', '2023-05-31', '0000-00-00'),
(24, 'Pipi', 'Perro', 'Mamífero', 'macho', 11117, '1 mes', '2023-06-26', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinarios`
--

CREATE TABLE `veterinarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `especialidad` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `veterinarios`
--

INSERT INTO `veterinarios` (`id`, `nombre`, `apellido`, `dni`, `especialidad`, `telefono`, `fecha_ingreso`, `fecha_egreso`) VALUES
(6, 'Juan', 'Perez', 43567765, 'Cirugía', '2664338927', '2023-05-19', '2023-06-29'),
(7, 'Paula', 'Attar', 21038472, 'Rehabilitación', '2664338929', '2023-06-10', '2023-05-30'),
(10, 'Gabriel', 'Gomez', 21048478, 'Diagnóstico por imagen', '2664535343', '2023-06-26', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amo-mascota`
--
ALTER TABLE `amo-mascota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_amo` (`id_amo`),
  ADD KEY `id_mascota` (`id_mascota`);

--
-- Indices de la tabla `amos`
--
ALTER TABLE `amos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `veterinarios`
--
ALTER TABLE `veterinarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amo-mascota`
--
ALTER TABLE `amo-mascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `amos`
--
ALTER TABLE `amos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `veterinarios`
--
ALTER TABLE `veterinarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `amo-mascota`
--
ALTER TABLE `amo-mascota`
  ADD CONSTRAINT `amo-mascota_ibfk_1` FOREIGN KEY (`id_amo`) REFERENCES `amos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `amo-mascota_ibfk_2` FOREIGN KEY (`id_mascota`) REFERENCES `mascotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
