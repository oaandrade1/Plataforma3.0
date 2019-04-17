-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2019 a las 22:04:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataforma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `idarchivo` int(5) NOT NULL,
  `idautor` int(5) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `etiquetas` varchar(100) NOT NULL,
  `areaconocimiento` varchar(100) NOT NULL,
  `idrecurso` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_comentario`
--

CREATE TABLE `codigo_comentario` (
  `idcomentario` int(5) NOT NULL,
  `idcurso` int(5) DEFAULT NULL,
  `idforo` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentario` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `comentario` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idcurso` int(5) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `contenido` mediumtext NOT NULL,
  `idautor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idcurso`, `titulo`, `descripcion`, `contenido`, `idautor`) VALUES
(2, 'BITS', 'Lenguaje Maquina', '<h1 id=\"firstHeading\" class=\"firstHeading\" lang=\"es\" style=\"color: rgb(0, 0, 0); background: none; margin-top: 0px; margin-bottom: 0.25em; overflow: visible; padding: 0px; border-bottom: 1px solid rgb(162, 169, 177); font-size: 1.8em; line-height: 1.3; font-family: &quot;Linux Libertine&quot;, Georgia, Times, serif; text-align: start;\">Bit</h1><div id=\"bodyContent\" class=\"mw-body-content\" style=\"position: relative; line-height: 1.6; font-size: 0.875em; z-index: 0; color: rgb(34, 34, 34); font-family: sans-serif;\"><div id=\"contentSub\" style=\"font-size: 11.76px; line-height: 1.2em; margin: 0px 0px 1.4em 1em; color: rgb(84, 89, 93); width: auto;\"><span class=\"mw-redirectedfrom\">(Redirigido desde Â«<a href=\"https://es.wikipedia.org/w/index.php?title=Bits&amp;redirect=no\" class=\"mw-redirect\" title=\"Bits\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bits</a>Â»)</span></div><div id=\"jump-to-nav\"></div><a class=\"mw-jump-link\" href=\"https://es.wikipedia.org/wiki/Bit#mw-head\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: block; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px; padding: 0px; overflow: hidden; position: absolute !important;\">Ir a la navegaciÃ³n</a><a class=\"mw-jump-link\" href=\"https://es.wikipedia.org/wiki/Bit#p-search\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: block; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px; padding: 0px; overflow: hidden; position: absolute !important;\">Ir a la bÃºsqueda</a><div id=\"mw-content-text\" lang=\"es\" dir=\"ltr\" class=\"mw-content-ltr\" style=\"direction: ltr;\"><div class=\"mw-parser-output\"><table class=\"infobox\" style=\"font-size: 12.6px; border: 1px solid rgb(180, 187, 200); background-color: rgb(249, 249, 249); color: rgb(0, 0, 0); margin: 0.5em 0px 0.7em 1.2em; padding: 0.4em; clear: right; float: right; line-height: 1.5em; width: 22.5em; text-align: center;\"><tbody><tr><th colspan=\"6\" style=\"vertical-align: top; background-color: rgb(204, 204, 255);\">MÃºltiplos de&nbsp;<a class=\"mw-selflink selflink\" style=\"text-decoration: inherit; color: inherit; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; cursor: pointer;\">bits</a></th></tr><tr><th colspan=\"3\" style=\"vertical-align: top; background-color: rgb(221, 221, 255);\"><a href=\"https://es.wikipedia.org/wiki/Prefijos_del_Sistema_Internacional\" title=\"Prefijos del Sistema Internacional\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Prefijo del SI</a><br>(<a href=\"https://es.wikipedia.org/wiki/Sistema_Internacional_de_Unidades\" title=\"Sistema Internacional de Unidades\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">SI</a>)</th><th colspan=\"3\" style=\"vertical-align: top; background-color: rgb(221, 221, 255);\"><a href=\"https://es.wikipedia.org/wiki/Prefijo_binario\" title=\"Prefijo binario\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Prefijo binario</a><br>(<a href=\"https://es.wikipedia.org/w/index.php?title=IEC_60027-2&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"IEC 60027-2 (aÃºn no redactado)\" style=\"color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">IEC 60027-2</a>)</th></tr><tr><th style=\"vertical-align: top;\">Nombre</th><th style=\"vertical-align: top;\">SÃ­mbolo</th><th style=\"vertical-align: top;\">MÃºltiplo</th><th style=\"vertical-align: top;\">Nombre</th><th style=\"vertical-align: top;\">SÃ­mbolo</th><th style=\"vertical-align: top;\">MÃºltiplo</th></tr><tr><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Kilobit\" title=\"Kilobit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kilobit</a></td><td style=\"vertical-align: top;\">kbit</td><td style=\"vertical-align: top;\"><a href=\"https://es.wikipedia.org/wiki/Kilo_(prefijo)\" title=\"Kilo (prefijo)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">10<sup style=\"line-height: 1em;\">3</sup></a></td><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Kibibit\" title=\"Kibibit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kibibit</a></td><td style=\"vertical-align: top;\">Kibit</td><td style=\"vertical-align: top;\">2<sup style=\"line-height: 1em;\">10</sup></td></tr><tr><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Megabit\" title=\"Megabit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Megabit</a></td><td style=\"vertical-align: top;\">Mbit</td><td style=\"vertical-align: top;\"><a href=\"https://es.wikipedia.org/wiki/Mega_(prefijo)\" title=\"Mega (prefijo)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">10<sup style=\"line-height: 1em;\">6</sup></a></td><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Mebibit\" title=\"Mebibit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Mebibit</a></td><td style=\"vertical-align: top;\">Mibit</td><td style=\"vertical-align: top;\">2<sup style=\"line-height: 1em;\">20</sup></td></tr><tr><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Gigabit\" title=\"Gigabit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Gigabit</a></td><td style=\"vertical-align: top;\">Gbit</td><td style=\"vertical-align: top;\"><a href=\"https://es.wikipedia.org/wiki/Giga\" title=\"Giga\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">10<sup style=\"line-height: 1em;\">9</sup></a></td><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Gibibit\" title=\"Gibibit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Gibibit</a></td><td style=\"vertical-align: top;\">Gibit</td><td style=\"vertical-align: top;\">2<sup style=\"line-height: 1em;\">30</sup></td></tr><tr><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Terabit\" title=\"Terabit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Terabit</a></td><td style=\"vertical-align: top;\">Tbit</td><td style=\"vertical-align: top;\"><a href=\"https://es.wikipedia.org/wiki/Tera_(prefijo)\" title=\"Tera (prefijo)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">10<sup style=\"line-height: 1em;\">12</sup></a></td><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Tebibit\" title=\"Tebibit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Tebibit</a></td><td style=\"vertical-align: top;\">Tibit</td><td style=\"vertical-align: top;\">2<sup style=\"line-height: 1em;\">40</sup></td></tr><tr><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Petabit\" title=\"Petabit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Petabit</a></td><td style=\"vertical-align: top;\">Pbit</td><td style=\"vertical-align: top;\"><a href=\"https://es.wikipedia.org/wiki/Peta_(prefijo)\" title=\"Peta (prefijo)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">10<sup style=\"line-height: 1em;\">15</sup></a></td><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Pebibit\" title=\"Pebibit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Pebibit</a></td><td style=\"vertical-align: top;\">Pibit</td><td style=\"vertical-align: top;\">2<sup style=\"line-height: 1em;\">50</sup></td></tr><tr><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Exabit\" title=\"Exabit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Exabit</a></td><td style=\"vertical-align: top;\">Ebit</td><td style=\"vertical-align: top;\"><a href=\"https://es.wikipedia.org/wiki/Exa\" title=\"Exa\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">10<sup style=\"line-height: 1em;\">18</sup></a></td><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Exbibit\" title=\"Exbibit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Exbibit</a></td><td style=\"vertical-align: top;\">Eibit</td><td style=\"vertical-align: top;\">2<sup style=\"line-height: 1em;\">60</sup></td></tr><tr><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Zettabit\" title=\"Zettabit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Zettabit</a></td><td style=\"vertical-align: top;\">Zbit</td><td style=\"vertical-align: top;\"><a href=\"https://es.wikipedia.org/wiki/Zetta\" title=\"Zetta\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">10<sup style=\"line-height: 1em;\">21</sup></a></td><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Zebibit\" title=\"Zebibit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Zebibit</a></td><td style=\"vertical-align: top;\">Zibit</td><td style=\"vertical-align: top;\">2<sup style=\"line-height: 1em;\">70</sup></td></tr><tr><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Yottabit\" title=\"Yottabit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Yottabit</a></td><td style=\"vertical-align: top;\">Ybit</td><td style=\"vertical-align: top;\"><a href=\"https://es.wikipedia.org/wiki/Yotta\" title=\"Yotta\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">10<sup style=\"line-height: 1em;\">24</sup></a></td><td style=\"vertical-align: top; text-align: left;\"><a href=\"https://es.wikipedia.org/wiki/Yobibit\" title=\"Yobibit\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Yobibit</a></td><td style=\"vertical-align: top;\">Yibit</td><td style=\"vertical-align: top;\">2<sup style=\"line-height: 1em;\">80</sup></td></tr></tbody></table><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit;\"><i><b>Bit</b></i>&nbsp;es el&nbsp;<a href=\"https://es.wikipedia.org/wiki/Acr%C3%B3nimo\" title=\"AcrÃ³nimo\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">acrÃ³nimo</a>&nbsp;de&nbsp;<i><b>Bi</b>nary digi<b>t</b></i>&nbsp;(o sea de â€˜dÃ­gito binarioâ€™, en espaÃ±ol denominado como&nbsp;<b>bit</b>, y en menor medida como&nbsp;<b>bitio</b>).<sup id=\"cite_ref-1\" class=\"reference separada\" style=\"line-height: 1em; unicode-bidi: isolate; white-space: nowrap; margin-right: 0.6ch;\"><a href=\"https://es.wikipedia.org/wiki/Bit#cite_note-1\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">1</a></sup>â€‹ Un&nbsp;<i>bit</i>&nbsp;es un dÃ­gito del&nbsp;<a href=\"https://es.wikipedia.org/wiki/Sistema_de_numeraci%C3%B3n\" title=\"Sistema de numeraciÃ³n\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">sistema de numeraciÃ³n</a>&nbsp;<a href=\"https://es.wikipedia.org/wiki/Sistema_binario\" title=\"Sistema binario\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">binario</a>. La capacidad de almacenamiento de una memoria digital tambiÃ©n se mide en&nbsp;<i>bits</i>, pues esta palabra tiene varias&nbsp;<a href=\"https://es.wikipedia.org/wiki/Acepci%C3%B3n\" title=\"AcepciÃ³n\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">acepciones</a>.<sup id=\"cite_ref-cam_2-0\" class=\"reference separada\" style=\"line-height: 1em; unicode-bidi: isolate; white-space: nowrap; margin-right: 0.6ch;\"><a href=\"https://es.wikipedia.org/wiki/Bit#cite_note-cam-2\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">2</a></sup>â€‹</p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit;\">Lo usual es que un registro digital u otras memorias digitales vinculadas con la computaciÃ³n y/o con las telecomunicaciones, tengan una capacidad de representaciÃ³n de informaciones de por ejemplo 8&nbsp;<i>bits</i>, 16&nbsp;<i>bits</i>, 32&nbsp;<i>bits</i>, 64&nbsp;<i>bits</i>, etc; una memoria binaria tiene una capacidad efectiva de representaciÃ³n de un&nbsp;<i>bit</i>.<sup id=\"cite_ref-3\" class=\"reference separada\" style=\"line-height: 1em; unicode-bidi: isolate; white-space: nowrap; margin-right: 0.6ch;\"><a href=\"https://es.wikipedia.org/wiki/Bit#cite_note-3\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">3</a></sup>â€‹</p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit;\">Mientras que en el sistema de numeraciÃ³n&nbsp;<a href=\"https://es.wikipedia.org/wiki/Sistema_de_numeraci%C3%B3n_decimal\" title=\"Sistema de numeraciÃ³n decimal\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">decimal</a>&nbsp;se usan diez&nbsp;<a href=\"https://es.wikipedia.org/wiki/Cifra_(matem%C3%A1tica)\" title=\"Cifra (matemÃ¡tica)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">dÃ­gitos</a>&nbsp;(diez sÃ­mbolos), en el binario se usan solo dos dÃ­gitos, el 0 y el 1. Un&nbsp;<i>bit</i>&nbsp;o dÃ­gito binario puede representar uno de esos dos valores:&nbsp;<b>0</b>&nbsp;o&nbsp;<b>1</b>.</p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit;\">Se puede imaginar un&nbsp;<i>bit</i>&nbsp;como una bombilla que puede estar en uno de los siguientes dos estados:</p><dl style=\"margin-top: 0.2em; margin-bottom: 0.5em;\"><dd style=\"margin-left: 1.6em; margin-bottom: 0.1em; margin-right: 0px;\">apagada&nbsp;<a href=\"https://commons.wikimedia.org/wiki/File:Bulbgraph_Off.svg\" class=\"image\" title=\"apagada\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img alt=\"apagada\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Bulbgraph_Off.svg/44px-Bulbgraph_Off.svg.png\" decoding=\"async\" width=\"44\" height=\"54\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/2/26/Bulbgraph_Off.svg/66px-Bulbgraph_Off.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/26/Bulbgraph_Off.svg/88px-Bulbgraph_Off.svg.png 2x\" data-file-width=\"44\" data-file-height=\"54\"></a>&nbsp;o encendida&nbsp;<a href=\"https://commons.wikimedia.org/wiki/File:Bulbgraph.svg\" class=\"image\" title=\"encendida\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img alt=\"encendida\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Bulbgraph.svg/44px-Bulbgraph.svg.png\" decoding=\"async\" width=\"44\" height=\"54\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/1/12/Bulbgraph.svg/66px-Bulbgraph.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/12/Bulbgraph.svg/88px-Bulbgraph.svg.png 2x\" data-file-width=\"44\" data-file-height=\"54\"></a></dd></dl></div></div></div>', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foros`
--

CREATE TABLE `foros` (
  `idforo` int(5) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `idautor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(5) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `rol`) VALUES
(1, 'Admin'),
(2, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_recurso`
--

CREATE TABLE `tipo_recurso` (
  `idtipo` int(5) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idautor` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `idrol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idautor`, `nombre`, `apellido`, `correo`, `codigo`, `idrol`) VALUES
(1, 'Liu', 'Jim', 'jimlu@gmail.com', 'jim7', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`idarchivo`);

--
-- Indices de la tabla `codigo_comentario`
--
ALTER TABLE `codigo_comentario`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcurso`);

--
-- Indices de la tabla `foros`
--
ALTER TABLE `foros`
  ADD PRIMARY KEY (`idforo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `tipo_recurso`
--
ALTER TABLE `tipo_recurso`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idautor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `idarchivo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `codigo_comentario`
--
ALTER TABLE `codigo_comentario`
  MODIFY `idcomentario` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentario` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcurso` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `foros`
--
ALTER TABLE `foros`
  MODIFY `idforo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idrol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_recurso`
--
ALTER TABLE `tipo_recurso`
  MODIFY `idtipo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idautor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `archivos_ibfk_1` FOREIGN KEY (`idrecurso`) REFERENCES `tipo_recurso` (`idtipo`),
  ADD CONSTRAINT `archivos_ibfk_2` FOREIGN KEY (`idautor`) REFERENCES `usuarios` (`idautor`);

--
-- Filtros para la tabla `codigo_comentario`
--
ALTER TABLE `codigo_comentario`
  ADD CONSTRAINT `codigo_comentario_ibfk_1` FOREIGN KEY (`idforo`) REFERENCES `foros` (`idforo`),
  ADD CONSTRAINT `codigo_comentario_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `cursos` (`idcurso`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idcomentario`) REFERENCES `codigo_comentario` (`idcomentario`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`idautor`) REFERENCES `usuarios` (`idautor`);

--
-- Filtros para la tabla `foros`
--
ALTER TABLE `foros`
  ADD CONSTRAINT `foros_ibfk_1` FOREIGN KEY (`idautor`) REFERENCES `usuarios` (`idautor`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
