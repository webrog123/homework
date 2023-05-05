CREATE DATABASE IF NOT EXISTS `universities`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE  `universities`;

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

