-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para practica7
CREATE DATABASE IF NOT EXISTS `practica7` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `practica7`;

-- Volcando estructura para tabla practica7.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `articles` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla practica7.articles: ~10 rows (aproximadamente)
INSERT INTO `articles` (`id`, `user_id`, `articles`, `created_at`, `updated_at`) VALUES
	(13, NULL, 'aasdasdasdedsedfsf', '2024-04-07 22:38:50', '2024-04-07 22:39:22'),
	(15, 3, 'Economía local: La economía local está experimentando un crecimiento significativo. Las empresas locales informan de un aumento en las ventas y la contratación de personal. Los expertos predicen un futuro económico positivo166.', '2024-04-07 23:05:51', '2024-04-08 06:47:24'),
	(16, 6, 'Economía global', '2024-04-07 23:24:41', '2024-04-07 23:24:41'),
	(17, NULL, 'Incendio en la fábrica local: Un gran incendio arrasó con la fábrica textil local ayer por la noche. No se reportaron heridos, pero las pérdidas materiales son significativas. Las autoridades están investigando las causas del siniestro.', NULL, NULL),
	(18, NULL, 'Nueva ley de educación: El gobierno aprobó una nueva ley de educación que promueve la inclusión digital. Todos los estudiantes de escuelas públicas recibirán una tablet para sus estudios. Se espera que la medida entre en vigor el próximo año escolar.', NULL, NULL),
	(19, NULL, 'Avances en la vacuna contra el COVID-19: Científicos reportan un avance significativo en la vacuna contra el COVID-19. Los resultados preliminares de los ensayos clínicos son prometedores. Se espera su aprobación para finales de este año.', NULL, NULL),
	(20, NULL, 'Elecciones presidenciales: Las elecciones presidenciales se llevarán a cabo el próximo mes. Los candidatos están en plena campaña para ganar votantes. Se espera una alta participación ciudadana.', NULL, NULL),
	(21, NULL, 'Desastre natural en la región montañosa: Un fuerte terremoto sacudió la región montañosa ayer por la noche. Las autoridades reportan numerosas víctimas y daños estructurales. Se están coordinando esfuerzos de rescate y ayuda.', NULL, NULL),
	(22, NULL, 'Descubrimiento arqueológico: Arqueólogos descubrieron una antigua tumba egipcia intacta. El hallazgo incluye artefactos y jeroglíficos bien conservados. Los expertos esperan que este descubrimiento arroje luz sobre la historia del antiguo Egipto.', NULL, NULL),
	(23, NULL, 'Innovación tecnológica: Una empresa local lanzó un nuevo software de inteligencia artificial. Promete mejorar la eficiencia en la industria manufacturera. Las primeras pruebas han demostrado resultados prometedores.', NULL, NULL),
	(24, NULL, 'Cambio climático: Los científicos advierten sobre el aumento de las temperaturas globales. El cambio climático podría tener graves consecuencias si no se toman medidas urgentes. Los líderes mundiales están discutiendo posibles soluciones.', NULL, NULL),
	(26, 7, 'Lorem ...', '2024-04-08 07:06:57', '2024-04-08 07:06:57');

-- Volcando estructura para tabla practica7.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla practica7.migrations: ~0 rows (aproximadamente)

-- Volcando estructura para tabla practica7.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla practica7.password_reset_tokens: ~1 rows (aproximadamente)
INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
	('pnavlani@sapalomera.cat', '$2y$12$CsipeyCfk1tzGu9D5TnRz.y8LDmfCo4pLUdvJFXPgcbNM8fP8/GrW', '2024-04-04 12:56:41'),
	('p.navlani@sapalomera.cat', '$2y$12$izrVqPCS.ffvOLw6l0mJa.CRf.s1t8tuZWr4WEVFanXAexJzzljxq', '2024-04-04 13:41:48');

-- Volcando estructura para tabla practica7.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `external_id` varchar(225) DEFAULT NULL,
  `external_auth` varchar(225) DEFAULT NULL,
  `avatar` varchar(225) DEFAULT NULL,
  `provider` varchar(225) DEFAULT NULL,
  `provider_id` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla practica7.users: ~5 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `external_id`, `external_auth`, `avatar`, `provider`, `provider_id`) VALUES
	(4, 'admin', 'sapalomeracohesio@gmail.com', NULL, NULL, NULL, '2024-04-07 14:50:43', '2024-04-07 14:50:43', '100395971782725027688', 'google', 'https://lh3.googleusercontent.com/a/ACg8ocIbUaDZmWfhM50_AEPkwZh8aqhEs4lTsd52t6ArpTzParmvpQ=s96-c', NULL, NULL),
	(6, 'Pere', 'perepi@sapalomera.cat', NULL, '$2y$12$I16QaNKI/Gebk1B5uxU3R.cjEEczv07luEOfWV/OEfQ/GRD0AXN.y', 'tq1p8Lrf2CR83iJ4h6Az6yJgguH6IOtRyw973ztks2xuu7fHGLmm57IN9C4E', '2024-04-07 18:52:03', '2024-04-08 07:58:03', NULL, NULL, NULL, NULL, NULL),
	(7, 'Xavi', 'xavi@sapalomera.cat', NULL, '$2y$12$ySULKF/JIrwcUyUnUy9d/.FBJ0pQsRpLCgJIdpaIhvFSn8ckPjP32', NULL, '2024-04-08 07:01:14', '2024-04-08 07:01:14', NULL, NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
