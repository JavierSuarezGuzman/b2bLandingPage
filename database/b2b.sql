-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2023 a las 16:39:56
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `b2b`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `b2b`
--

CREATE TABLE `b2b` (
  `id` int(11) NOT NULL,
  `dateadd` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(69) NOT NULL,
  `offer` varchar(69) NOT NULL,
  `score` varchar(3) DEFAULT NULL,
  `descr` varchar(420) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `b2b`
--

INSERT INTO `b2b` (`id`, `dateadd`, `name`, `email`, `offer`, `score`, `descr`, `file_name`) VALUES
(1, '21/11/22', 'Nombre', 'correo@email.com', 'Título: Naranjas por saco', NULL, 'Descripción de prueba', 'vegetable.png'),
(2, '21/11/22', 'Nombre', 'correo@email.com', 'Papas por saco', NULL, 'El saco pesa x Kgs.', 'vegetable.png'),
(3, '21/11/22', 'Nombre', 'correo@email.com', 'Papas por saco', NULL, 'El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.   El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  El saco pesa x Kgs.  ', 'vegetable.png'),
(4, '21/11/22', 'Nombre', 'correo@email.com', 'Manzanas por caja', NULL, 'Prueba de actualización', 'vegetable.png'),
(5, '21/11/22', 'Nombre', 'correo@email.com', 'Manzanas por caja', NULL, 'Prueba de actualización', 'vegetable.png'),
(6, '23/11/22', 'Prueba imagen', 'imagen@correo.cl', 'Título: imagen', NULL, 'Prueba imagen', 'construction.png'),
(7, '23/11/22', 'Li', 'l@e.c', 'Título: imagen', NULL, 'prueba imagen', 'construction.png'),
(8, '23/11/22', 'Prueba imagen', 'imagen@correo.cl', 'Título: imagen', NULL, 'Prueba imagen 6', 'maquinaria.png'),
(9, '23/11/22', 'Prueba imagen', 'imagen@correo.cl', 'Bordados', NULL, 'Prueba imagen 7\r\nSe ofrecen servicios textiles valoradas por H/H.', 'textil.png'),
(10, '23/11/22', 'Prueba imagen', 'imagen@correo.cl', 'Título: imagen', NULL, 'prueba imagen', 'feria-libre.jpg'),
(11, '23/11/22', 'Li', 'l@e.c', 'Título: imagen', NULL, 'datos minimos', 'maquinaria-pesada.jpg'),
(12, '24/11/22', 'Sin imagen', 'imagen@correo.cl', 'Sin imagen', NULL, 'sin imagen', '../assets/th.png'),
(13, '24/11/22', 'Swanson hnos. SpA', 'ron@swansons.com', 'Constructora', NULL, 'Decoramos y modificamos oficinas a domicilio...', 'ron-swansons-office-2.jpg'),
(14, '24/11/22', 'Swanson hnos. SpA', 'ron@swansons.com', 'Constructora', NULL, 'Decoramos y modificamos oficinas a domicilio...', 'ron-swansons-office-2.jpg'),
(15, '24/11/22', 'asd', 'asd@asd.asd', 'test', NULL, 'test', '../assets/th.png'),
(16, '24/11/22', 'asd', 'asd@asd.asd', 'Prueba', NULL, 'formato', '../assets/th.png'),
(17, '24/11/22', 'Previa', 'previa@correo.cl', 'vendo xamp', NULL, 'este es xamp', '58482973cef1014c0b5e49fd-removebg-preview.png'),
(18, '24/11/22', 'Empresa', 'email@asd.com', 'Programación en PHP', NULL, 'Contamos con un excelente equipo de programadores dedicados al lenguaje PHP', 'PHP-logo.svg-removebg-preview.png'),
(19, '24/11/22', 'NinaCorp', 'constanza93@gmail.com', 'Venta de confites', NULL, '', 'internet-of-things_3_1_-removebg-preview.png'),
(20, '24/11/22', 'Sin imagen', 'imagen@correo.cl', 'Sin imagen', NULL, 'Prueba con imagen estándar', '../assets/th.png'),
(21, '25/11/22', 'Viernes', 'viernes@correo.cl', 'Servicios VR', NULL, 'Ofrecemos servicios de VR. Metaverso', 'OculusScreenshot1655592658.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `b2b`
--
ALTER TABLE `b2b`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `b2b`
--
ALTER TABLE `b2b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
