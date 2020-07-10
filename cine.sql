-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2020 a las 04:50:40
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `butacas`
--

CREATE TABLE `butacas` (
  `id` int(11) NOT NULL,
  `ubicacion` text NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `butacas`
--

INSERT INTO `butacas` (`id`, `ubicacion`, `precio`) VALUES
(1, 'A-1', 200),
(2, 'A-2', 200),
(3, 'A-3', 200),
(4, 'A-4', 200),
(5, 'A-5', 200),
(6, 'B-1', 200),
(7, 'B-2', 200),
(8, 'B-3', 200),
(9, 'B-4', 200),
(10, 'B-5', 200),
(11, 'C-1', 200),
(12, 'C-2', 200),
(13, 'C-3', 200),
(14, 'C-4', 200),
(15, 'C-5', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `numeroventa` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `precio` text NOT NULL,
  `cantidad` text NOT NULL,
  `subtotal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `numeroventa`, `nombre`, `precio`, `cantidad`, `subtotal`) VALUES
(1, 1, '', '200', '23', '4600'),
(2, 1, '', '200', '1', '200'),
(3, 1, '', '200', '1', '200'),
(4, 1, '', '200', '3', '600'),
(5, 1, '', '200', '2', '400'),
(6, 2, '', '200', '1', '200'),
(7, 2, '', '200', '1', '200'),
(8, 3, 'A-4', '200', '2', '400');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `videoy` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id`, `nombre`, `descripcion`, `imagen`, `videoy`) VALUES
(1, 'Avengers: Endgame', 'Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento épico con Thanos, el malvado que diezmó el planeta y el universo.', 'avengers.jpg', '//www.youtube.com/embed/TcMBFSGVi1c'),
(2, 'Doctor Sueño', 'Dan, alcohólico y traumatizado por lo que le pasó siendo un niño en el hotel Overlook, conoce a Abra, una adolescente que posee el mismo don que él. Dan tratará de salvar a Abra de un grupo de siniestros personajes que ansían la inmortalidad y aspiran alcanzarla alimentándose de los poderes psíquicos de gente como ellos.', 'doctorsleep.jpg', 'www.youtube.com/embed/BOzFZxB-8cw'),
(3, 'Guardianes de la Galaxia vol. 2', 'Una poderosa raza alienígena contrata a los Guardianes para que protejan sus valiosas baterías de energía, pero, cuando Rocket las roba, los alienígenas envían a sus tropas de combate a vengarse de los Guardianes. Mientras tratan de escapar con vida, intentan resolver el misterio de los verdaderos orígenes de Peter Quill.', 'Guardianes_galaxia2.jpg', 'www.youtube.com/embed/wUn05hdkhjM'),
(4, 'Mulán', 'El emperador chino emite un decreto que exige que cada hogar debe reclutar a un varón para luchar con el ejército imperial en la guerra contra los Hunos. Para salvar a su anciano padre de este deber, su única hija Fa Mulan se hace pasar por soldado y toma su lugar. La joven se someterá a un duro entrenamiento hasta hacerse merecedora de la estima y de la confianza del resto de su escuadrón.', 'MULAN.jpg', 'www.youtube.com/embed/KK8FHdFluOQ'),
(5, 'Wonder Woman 2', 'Diana Prince, conocida como Wonder Woman se enfrenta a Cheetah, una villana que posee fuerza y agilidad sobrehumanas.', 'WonderWoman.jpg', 'www.youtube.com/embed/sfM7_JLk-84'),
(6, 'Rogue One: una historia de Star Wars', 'El Imperio va a construir una estación espacial capaz de destruir planetas, conocida como la Estrella de la Muerte. Los rebeldes, conocedores de esto, se embarcan en una misión extraordinaria: robar los planos y sabotear la estación.', 'STARWARS.jpg', 'www.youtube.com/embed/frdj1zb9sMY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `butacas`
--
ALTER TABLE `butacas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
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
-- AUTO_INCREMENT de la tabla `butacas`
--
ALTER TABLE `butacas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
