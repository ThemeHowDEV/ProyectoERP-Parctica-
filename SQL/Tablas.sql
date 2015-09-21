/*
SQLyog Community v8.71 
MySQL - 5.6.20 : Database - erpshoes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`erpshoes` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `erpshoes`;

/*Table structure for table `crr_modules` */

DROP TABLE IF EXISTS `crr_modules`;

CREATE TABLE `crr_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `html` text,
  `key` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `crr_modules` */

insert  into `crr_modules`(`id`,`nombre`,`estado`,`html`,`key`) values (1,'usuarios',1,'<a href=\"modulos/usuarios.php\">usuarios</a>','VjJ0YWIxUXdNVmRpUm14VVltdEtjRlJVUVhkUFVUMDk='),(2,'proveedores',1,'<a href=\"modulos/proveedores.php\">Proveedores</a>','VjFSQ2IxTXlVblJWYmxKWFlsaG9hRlZ1Y0hOT1ZtUnpZVVUxVVZWVU1Eaz0=');

/*Table structure for table `crr_permissions` */

DROP TABLE IF EXISTS `crr_permissions`;

CREATE TABLE `crr_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `crr_permissions` */

insert  into `crr_permissions`(`id`,`id_modulo`,`id_user`) values (1,1,1),(2,1,2),(3,2,2),(4,2,1);

/*Table structure for table `crr_users` */

DROP TABLE IF EXISTS `crr_users`;

CREATE TABLE `crr_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` text,
  `nivel` int(2) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `crr_users` */

insert  into `crr_users`(`id`,`usuario`,`pass`,`nivel`,`correo`) values (1,'ivan','9f3ae80a0097d4523e47761684d5e33f',0,'potara.cotosta@gmail.com'),(2,'julio','e10adc3949ba59abbe56e057f20f883e',1,'ivan.rodriguez1986@hotmail.com'),(3,'fer','e10adc3949ba59abbe56e057f20f883e',1,'potara_cotosta@hotmail.com'),(4,'omar','e10adc3949ba59abbe56e057f20f883e',2,'1@6'),(5,'sergio','e10adc3949ba59abbe56e057f20f883e',2,'2@6');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
