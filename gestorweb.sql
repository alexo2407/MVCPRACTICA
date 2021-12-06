-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2021 a las 16:06:59
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
-- Base de datos: `gestorweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `fk_categoria` int(11) DEFAULT NULL,
  `titulo_articulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contenido_articulo` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen_articulo` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `date_update_articulo` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `fk_categoria`, `titulo_articulo`, `contenido_articulo`, `imagen_articulo`, `fecha_publicacion`, `date_update_articulo`) VALUES
(6, 1, 'Nicaragua: Granada', 'Lorem ipsum dolor sit amet.\r\nOdio nemo earum nam neque.\r\nVelit, repellendus corporis. Autem, quis.\r\nOptio nobis consequatur facere fuga.\r\nQuaerat, labore corrupti? Aperiam, laborum.\r\nSunt cupiditate enim a possimus.\r\nA modi quia ratione molestiae.\r\nNumquam nesciunt corporis earum quod.\r\nDeleniti excepturi id asperiores quas.\r\nEius et accusamus illo alias?', '../views/assets/galeria/granada8742.jpg', '2021-12-05', '2021-12-05 22:48:49'),
(7, 2, 'Selección de Nicaragua', 'La playa favorita de los nicaragüenses y la que ningún turista extranjero puede evitar visitar. San Juan del Sur es un verdadero paraíso de sol y playa ubicado a tan solo 140 kilómetros de Managua, con arena blanca y toque tropical que le da al turista una estancia paradisiaca. A los alrededores se encuentran paredes de tierra que brindan la oportunidad para escalarlas y apreciar una vista panorámica desde las alturas.\r\n\r\nEsta antigua aldea de pescadores se ha transformado en uno de los destinos turísticos más importantes del país, famoso por su oferta de entretención, vida nocturna y entornos de playas paradisiacas en la costa del océano Pacífico.\r\n\r\nLas playas vecinas no se quedan atrás, son verdaderos lugares de ensueño. Playa Maderas, Marsella, Hermosa y playa El Coco, todas de arenas finas y aguas cristalinas.', '../views/assets/galeria/deporte6201.jpg', '2021-12-06', '2021-12-06 14:37:39'),
(8, 3, 'San Juan del Sur', 'La playa favorita de los nicaragüenses y la que ningún turista extranjero puede evitar visitar. San Juan del Sur es un verdadero paraíso de sol y playa ubicado a tan solo 140 kilómetros de Managua, con arena blanca y toque tropical que le da al turista una estancia paradisiaca. A los alrededores se encuentran paredes de tierra que brindan la oportunidad para escalarlas y apreciar una vista panorámica desde las alturas.\r\n\r\nEsta antigua aldea de pescadores se ha transformado en uno de los destinos turísticos más importantes del país, famoso por su oferta de entretención, vida nocturna y entornos de playas paradisiacas en la costa del océano Pacífico.', '../views/assets/galeria/nica9308.jpg', '2021-12-06', '2021-12-06 14:39:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_categoria` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `date_update_categoria` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `date_update_categoria`) VALUES
(1, 'Turismo', 'Turismo en Nicaragua', '2021-12-05 22:00:45'),
(2, 'Deportes', 'Deportes en Nicaragua', '2021-12-05 22:00:45'),
(3, 'Noticias', 'Noticias en Nicaragua', '2021-12-05 22:01:34'),
(4, 'Juegos', 'Juegos en Nicaragua', '2021-12-05 22:01:34'),
(5, 'Blog', 'Blog de turismo', '2021-12-05 22:19:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permiso` int(11) NOT NULL,
  `nombre_permiso` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_permiso` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `date_update_permiso` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `fk_permiso` int(11) DEFAULT NULL,
  `nick_user` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_usuario` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_usuario` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password_usuario` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen_usuario` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_usuario` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `fk_permiso`, `nick_user`, `nombre_usuario`, `email_usuario`, `descripcion`, `password_usuario`, `imagen_usuario`, `telefono_usuario`) VALUES
(1, NULL, 'admin', 'Alberto Calero', 'alexo@gmail.com', NULL, 'admin', 'views/dist/img/avatar.png', '75354338');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `fk_categoria` (`fk_categoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_permiso` (`fk_permiso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
