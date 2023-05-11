CREATE DATABASE IF NOT EXISTS `data`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE  `data`;

CREATE TABLE IF NOT EXISTS `country` (
  `idcountry` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`idcountry`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `country` (`idcountry`, `name`) VALUES
(1, 'Hungary'),
(2, 'UK');

CREATE TABLE IF NOT EXISTS `city` (
  `idcity` int(11) NOT NULL AUTO_INCREMENT,
  `idcountry` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`idcity`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `city` (`idcity`, `idcountry`, `name`) VALUES
(1, 1, 'Budapest'),
(2, 1, 'Kecskemét'),
(3, 1, 'Szeged'),
(4, 2, 'London'),
(5, 2, 'Birmingham'),
(6, 2, 'Cambridge');

CREATE TABLE IF NOT EXISTS `university` (
  `iduniversity` int(11) NOT NULL AUTO_INCREMENT,
  `idcity` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`iduniversity`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `university` (`iduniversity`, `idcity`, `name`, `address`, `telefon`, `email`) VALUES
(1, 1, 'ZooPlus', 'Address1', '0611111111','ZooPlus@mail.hu'),
(2, 2, 'PetNet', 'Address12', '0612222222','PetNet@mail.hu'),
(3, 3, 'ZooCentrum', 'Address13', '0613333333','ZooCentrum@mail.hu'),
(4, 4, 'AlphaZoo', 'Address14', '0676444444','AlphaZoo@mail.hu'),
(5, 5, 'PetParadise', 'Address15', '0662555555','PetParadise@mail.hu'),
(6, 6, 'DoodleBones', 'Address16', '0662666666','DoodleBones@mail.hu');





CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `first_name` varchar(45) NOT NULL default '',
  `last_name` varchar(45) NOT NULL default '',
  `user_name` varchar(12) NOT NULL default '',
  `password` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `users` (`id`,`first_name`,`last_name`,`user_name`,`password`) VALUES 
 (1,'FirstName_1','LastName_1','Login1',sha1('login1')),
 (2,'FirstName_2','LastName_2','Login2',sha1('login2')),
 (3,'FirstName_3','LastName_3','Login3',sha1('login3')),
 (4,'FirstName_4','LastName_4','Login4',sha1('login4')),
 (5,'FirstName_5','LastName_5','Login5',sha1('login5')),
 (6,'FirstName_6','LastName_6','Login6',sha1('login6')),
 (7,'FirstName_7','LastName_7','Login7',sha1('login7')),
 (8,'FirstName_8','LastName_8','Login8',sha1('login8')),
 (9,'FirstName_9','LastName_9','Login9',sha1('login9')),
 (10,'FirstName_10','LastName_10','Login10',sha1('login10')),
 (11,'FirstName_11','LastName_11','Login11',sha1('login11')),
 (12,'FirstName_12','LastName_12','Login12',sha1('login12'));





CREATE TABLE `uzenetek` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name_` varchar(45) NOT NULL default '',
  `email_` varchar(45) NOT NULL default '',
  `message_` varchar(500) NOT NULL default '',
  `date_` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `uzenetek` (`id`, `name_`, `email_`, `message_`, `date_`) VALUES
(1, 'Kup Ica', 'kupica@gmail.com', 'abc', '2023-05-03'),
(2, 'Cicam Ica', 'cicamica@gmail.com', 'abc', '2023-05-04'),
(3, 'Bac Ilus', 'bacilus@gmail.com', 'abc', '2023-05-05');

