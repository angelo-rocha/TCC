# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-12-10 16:47:32
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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

#
# Data for table "cadastro"
#

INSERT INTO `cadastro` VALUES (25,'angeloalemanha5@gmail.com','Angelo','30188981xd','Angelo Rocha Neto'),(26,'admin@admin','Angelo','admin','admin'),(27,'admin','admin','admin','aaaa'),(28,'','','','111'),(29,'','','','2'),(30,'','','','2'),(31,'','','','2'),(32,'','','','2'),(33,'','','','2'),(34,'','','','23'),(35,'','','','2');

#
# Structure for table "recarga"
#

DROP TABLE IF EXISTS `recarga`;
CREATE TABLE `recarga` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cartaoOnibus` varchar(32) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `CartaoBanco` varchar(50) DEFAULT NULL,
  `validadeCartao` varchar(40) DEFAULT NULL,
  `cvv` varchar(20) DEFAULT NULL,
  `dono` varchar(140) DEFAULT NULL,
  `dataRecarga` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "recarga"
#

INSERT INTO `recarga` VALUES (11,'$codOnibus',0,'$tipoCartao','$codCartao','$data','$cvv','$nome','2018-12-09 17:08:25'),(12,'111111',10,'1','232','232','23','23','2018-12-09 17:18:20'),(13,'111111',50,'1','1111111111111111','11111','111','Dono','2018-12-10 15:39:36'),(14,'111111',10,'1','5555555555555555','66666','777','77777','2018-12-10 15:42:51');
