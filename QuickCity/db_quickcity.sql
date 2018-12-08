# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-12-08 04:43:17
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "cadastro"
#

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE `cadastro` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

#
# Data for table "cadastro"
#

INSERT INTO `cadastro` VALUES (25,'angeloalemanha5@gmail.com','Angelo','30188981xd','Angelo Rocha Neto'),(26,'admin@admin','Angelo','admin','admin'),(27,'admin','admin','admin','aaaa');

#
# Structure for table "recarga"
#

DROP TABLE IF EXISTS `recarga`;
CREATE TABLE `recarga` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cartaoOnibus` varchar(32) DEFAULT NULL,
  `valor` varchar(23) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `CartaoBanco` varchar(50) DEFAULT NULL,
  `validadeCartao` varchar(40) DEFAULT NULL,
  `cvv` varchar(20) DEFAULT NULL,
  `dono` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "recarga"
#

