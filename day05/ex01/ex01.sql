CREATE TABLE `ft_table` (
	`id` int NOT NULL AUTO_INCREMENT,
	`login` varchar(11) DEFAULT 'toto' NOT NULL,
	`group` enum('staff','student','other') NOT NULL,
	`creation_date` date,
	PRIMARY KEY (`id`)
);
