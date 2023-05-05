CREATE DATABASE `databasecontact`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `databasecontact`;

CREATE TABLE `uzenetek` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name_` varchar(45) NOT NULL default '',
  `email_` varchar(45) NOT NULL default '',
  `message_` varchar(500) NOT NULL default '',
  `date_` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `uzenetek` (`id`, `name_`, `email_`, `message_`, `date_`) VALUES
(1, 'Kup Ica', 'kupica@gmail.com', 'abc', '2023-05-03'),
(2, 'Cicam Ica', 'cicamica@gmail.com', 'abc', '2023-05-04'),
(3, 'Bac Ilus', 'bacilus@gmail.com', 'abc', '2023-05-05');

