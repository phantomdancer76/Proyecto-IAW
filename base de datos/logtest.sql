-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2023 a las 03:12:18
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logtest`
--
CREATE DATABASE IF NOT EXISTS `logtest` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `logtest`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE IF NOT EXISTS `mis_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL COMMENT 'para que salga en productos destacados',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `name`, `description`, `price`, `created`, `modified`, `status`, `image`, `featured`) VALUES
(8, 'Bodypump - 1 clase', 'El Body Pump es un programa de entrenamiento físico intenso que combina actividad aeróbica y trabajo muscular mediante el levantamiento de pesas al ritmo de la música. Son sesiones dirigidas, divertidas y motivadoras, en las que se fortalece el sistema cardiovascular y la gran mayoría de los músculos del cuerpo. La sencillez de los ejercicios, la intensidad elevada y el poco tiempo de descanso que se hace entre los grupos musculares facilitan que se consigan resultados evidentes rápidamente.', 35.00, '2023-02-20 09:29:00', '2023-03-05 02:33:31', '1', '01.jpg', 1),
(9, 'Yoga - 1 clase', 'El yoga es una disciplina que viene de la India originada hace más de 5.000 años, que engloba toda una filosofía de vida cuyo fin último es alcanzar el Samadhi o el estado de paz, nirvana, liberación, felicidad…  Para ello, existen muchas técnicas, tipos de yoga en los que gracias a la combinación de asanas, respiración, meditación, mantras, mudras, etc, vamos consiguiendo el equilibrio de nuestro cuerpo con la mente.  En occidente el yoga que es más conocido es el de las posturas de yoga, o el hatha yoga, del que derivan todos los estilos dinámicos como el vinyasa, ashtanga, rocket, integral, power o jivamukti. Pero la realidad es que el yoga engloba una filosofía muy profunda en el que las asanas son una parte pequeña.  Existen numerosos tipos de yoga, así como ejercicios, técnicas y posturas que nos ayudan a conseguir un mayor control físico y mental, con grandes beneficios. El yoga es para todos: principiantes o avanzados, niños o mayores, hombres y mujeres.', 20.00, '2023-02-20 09:29:17', '2023-03-05 02:34:23', '1', '02.jpg', 1),
(12, 'Crossfit - 1 clase', 'CrossFit es el deporte de moda. Se basa en ejercicios funcionales realizados a alta intensidad. No hay rutinas ni excusas, cada día tu entreno es distinto. Se adapta a todos los niveles y está dirigido a cualquier persona.  Entrena el cuerpo ejerciendo diferentes disciplinas al mismo tiempo, tales como la halterofilia, el atletismo, la gimnasia y sobre todo la condición metabólica. Este programa se compone de deporte de resistencia y de diferentes actividades físicas. Se basa en el trabajo de diferentes capacidades y habilidades: resistencia cardiovascular y respiratoria, resistencia muscular, fuerza, flexibilidad, potencia, velocidad, agilidad, psicomotricidad, equilibrio y precisión. Todas estas actividades intervienen enérgicamente para una puesta en forma eficaz.', 35.00, '2023-02-22 04:58:11', '2023-03-05 02:35:20', '1', '03.jpg', 1),
(23, 'Cycling - 1 clase', 'El CI se trata de una actividad física colectiva, realizada sobre una bicicleta estática adaptada para tal fin al ritmo de la música, en la que se efectúa un trabajo predominantemente cardiovascular de alta intensidad con intervención muy elevada de los grandes grupos musculares del tren inferior.', 20.00, '2023-03-05 02:39:54', '2023-03-05 02:39:54', '1', '04.jpg', 0),
(24, 'Boxeo - 1 clase', 'Está basado en un entrenamiento variado y diferente en el que potenciamos todos los aspectos físicos: agilidad, coordinación, equilibrio, flexibilidad, fuerza, potencia, precisión, resistencia cardiorrespiratoria, resistencia muscular y velocidad.', 25.00, '2023-03-05 02:42:39', '2023-03-05 02:44:59', '1', '05.jpg', 0),
(25, 'Proteina Whey Sabor chocolate blanco 2350g', 'Una proteína baja en grasas con valor nutricional de 1g/1g con sabor a chocolate blanco', 40.00, '2023-03-05 02:55:11', '2023-03-05 02:55:11', '1', '06.jpg', 1),
(26, 'SET DE MANCUERNAS AJUSTABLES – 2,5KG A 24KG – ROJO', 'Sé el primero en dejar una reseña Kit de mancuernas multifuncional ajustable para entrenar, fortalecer y tonificar todo el cuerpo desde tu hogar. Este Kit de levantamiento de pesas multifuncional te permitirá ejercitar los diferentes músculos y seleccionar el peso que desees consiguiendo una variación de peso de hasta el 7%.  Unidades: set de 2 unidades', 299.00, '2023-03-05 02:57:03', '2023-03-05 02:57:22', '1', '07.jpg', 0),
(27, 'ESTERILLA DE YOGA 5 MM (CAUCHO NATURAL)', 'La esterilla de yoga de caucho natural y antideslizante de Bruutal Fitness viene en varios colores, lo que la hace perfecta para el yogui que ama expresarse a través de vivos colores. No importa el nivel que tengas en tus practicas si eres amante del yoga esta es tu esterilla, confeccionada con materiales de alta calidad respetuosos con el medio ambiente te proporcionaran una excelente durabilidad, amortiguación y resistencia al deslizamiento gracias a su textura.', 31.90, '2023-03-05 03:00:00', '2023-03-05 03:00:00', '1', '08.jpg', 1),
(28, 'BARRA OLÍMPICA DE MUSCULACIÓN – 1.20M – 28MM (DIAM.)', 'Esta barra olímpica de rodamiento de aguja de alta precisión está concebida y destinada para levantamientos de peso rápidos como los de entrenamientos de crossfit o halterofilia como clean and jerk, snatch o power cleans.  Sus cuatro rodamientos de aguja están fabricados con acero de alta resistencia.  Largo: 1.20m  Diámetro: 28mm  Este equipo esencial para entrenamientos de peso libre permite:  Permite ganar masa muscular, fuerza, trabajar varios músculos simultáneamente, mejorar la coordinación y equilibrio, quemar más calorías y reducir el riesgo de lesiones.', 69.00, '2023-03-05 03:02:02', '2023-03-05 03:02:02', '1', '09.jpg', 0),
(29, 'CUERDA DE SALTO VELOCIDAD – 2,8M', 'Las cuerdas de salto o combas de velocidad son una gran herramienta para los entrenamientos interválicos de alta intensidad. Te ayudan a tonificar los músculos y acelera el metabolismo, lo que se traduce en una quema de calorías constante.', 8.90, '2023-03-05 03:03:21', '2023-03-05 03:03:37', '1', '10.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(16, 3, 15.00, '2023-02-21 15:14:09', '2023-02-21 15:14:09', '1'),
(20, 3, 35.00, '2023-02-22 12:03:50', '2023-02-22 12:03:50', '1'),
(22, 13, 35.00, '2023-02-22 12:45:03', '2023-02-22 12:45:03', '1'),
(23, 3, 35.00, '2023-02-22 13:10:48', '2023-02-22 13:10:48', '1'),
(24, 14, 35.00, '2023-02-22 13:13:49', '2023-02-22 13:13:49', '1'),
(30, 14, 35.00, '2023-03-04 19:04:54', '2023-03-04 19:04:54', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE IF NOT EXISTS `orden_articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden_articulos`
--

INSERT INTO `orden_articulos` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(7, 16, 9, 1),
(13, 20, 12, 1),
(17, 22, 12, 1),
(18, 23, 12, 1),
(19, 24, 12, 1),
(31, 30, 9, 1),
(32, 30, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'micasa',
  `forgot_pass_identity` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `role` enum('admin','usuario') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `forgot_pass_identity`, `created`, `modified`, `status`, `role`) VALUES
(3, 'Óscar', 'Álvarez Lucas', 'oalvluc0702@g.educaand.es', '07966fb6ae025d8c6e1c28baa0656825', '671332546', 'micasa', '', '2023-02-02 17:42:28', '2023-02-02 17:42:28', '1', 'admin'),
(13, 'pedro', 'pedro', 'asd@gmail.com', '828c88f34ecb4c1ca8d89e018c6fad1a', '68428625', 'calle nar', '', '2023-02-22 18:44:50', '2023-02-22 18:44:50', '1', 'usuario'),
(14, 'Lolo', 'Romero Garcia', 'erkame_13@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '654621160', 'aaaa', '', '2023-02-22 19:13:22', '2023-02-22 19:13:22', '1', 'usuario'),
(15, 'prueba', 'prueba', 'hola1234@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '64447775', 'plaza', '', '2023-02-23 16:32:40', '2023-02-23 16:32:40', '1', 'usuario');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
