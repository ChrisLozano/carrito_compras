-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2015 a las 19:40:57
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `stock` varchar(10) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `nombre`, `descripcion`, `precio`, `stock`, `fecha`) VALUES
(39, 'images/zeldaB.jpg', 'Zelda  Between 3DS!!', 'Nuevo juego de nintendo 3ds!!', '500', '37', '21/Mar/201'),
(40, 'images/revelations.jpg', 'RE Revelations', 'Nuevo juego de Resident Evil', '499', '39', '19/Feb/201'),
(41, 'images/pokemoY.jpg', 'Pokemo Y', 'Pokemon Y', '899', '96', '23/Feb/201'),
(42, 'images/zeldaO.jpg', 'Zelda Ocarina of Time', 'Juegazo', '399', '0', '22/Feb/201'),
(43, 'images/images.jpg', 'Yoshi New islan', 'Yoshi regresa con una nueva aventura junto a baby Mario', '700', '0', '2014-02-24'),
(44, 'images/pokemonX.jpg', 'Pokemon X', 'Nuevo juego de Pokemon', '700', '49', '23/Feb/201'),
(45, 'images/sonic.jpg', 'Sonic Generations', 'El erizo azul esta de regreso en Nintendo 3DS', '400', '13', '2014-02-09'),
(46, 'images/mario3d.jpg', 'Mario 3D World', 'Nueva Aventura de Mario en 3DS', '599', '0', '2014-02-24'),
(47, 'images/assain4.jpg', 'Assassins Creed 4 ', 'Nueva Entrega de la saga Assassin Creed', '799', '90', '21/Mar/201'),
(48, 'images/shadow.jpg', 'Kill Zone Shadow Fall', 'Kill Zone hace su apareciÃ³n en PS4', '600', '44', '2014-03-21'),
(49, 'images/infamous2.jpg', 'Infamous Second', 'Infamous llega a PS4', '999', '80', '2014-03-21'),
(50, 'images/mgr.jpg', 'Metal Gear Rising', 'Kojima nos presenta un Metal Gear lleno de acciÃ³n en esta nueva entrega', '599', '44', '2014-03-21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
