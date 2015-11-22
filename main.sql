USE main;

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `test` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `test` WRITE;

INSERT INTO `test` (`id`, `test`)
VALUES
	(1,'lucas'),
	(2,'kate');

UNLOCK TABLES;