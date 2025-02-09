
DROP TABLE IF EXISTS `customer_margins`;

CREATE TABLE IF NOT EXISTS `customer_margins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `customer` varchar(50) NOT NULL,
  `letter` decimal(6,2) DEFAULT '0.20',
  `envelope` decimal(6,2) DEFAULT '0.20',
  `box` decimal(6,2) DEFAULT '0.20',
  `pallet` decimal(6,2) DEFAULT '0.20',
  `truckload` decimal(6,2) DEFAULT '0.20',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;