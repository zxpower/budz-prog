#App sql generated on: 2010-06-02 02:07:38 : 1275433658

DROP TABLE IF EXISTS `instances`;
DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `groups`;


CREATE TABLE `instances` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`title` varchar(250) DEFAULT NULL,
	`notes` text DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_bin,
	ENGINE=MyISAM;

CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL,
	`password` varchar(40) NOT NULL,
	`group_id` int(11) NOT NULL,
	`instance_id` int(11) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`),
	UNIQUE KEY `username` (`username`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_bin,
	ENGINE=MyISAM;

CREATE TABLE `groups` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_bin,
	ENGINE=MyISAM;

