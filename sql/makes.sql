
DROP TABLE IF EXISTS `makes`;

CREATE TABLE IF NOT EXISTS `makes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `make` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
