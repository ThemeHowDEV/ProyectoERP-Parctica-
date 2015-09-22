/*
SQLyog Ultimate v9.02 
MySQL - 5.5.27 : Database - erpshoes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `erpshoes`;

/*Table structure for table `crr_modules` */

DROP TABLE IF EXISTS `crr_modules`;

CREATE TABLE `crr_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `html` text,
  `Key` text COMMENT 'nombre encode base 64 x 5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `crr_modules` */

insert  into `crr_modules`(`id`,`nombre`,`estado`,`html`,`Key`) values (1,'usuarios',1,'<a href=\"#\" onclick=\"acceso(\'modulos/usuarios.php?id=1\')\">Usuarios</a>','VjJ0YWIxUXdNVmRpUm14VVltdEtjRlJVUVhkUFVUMDk='),(2,'proveedores',1,'<a href=\"#\" onclick=\"acceso(\'modulos/proveedores.php?id=2\')\">Proveedores</a>',NULL),(3,'clientes',1,'<a href=\"modulos/clientes.php\">Clientes</a>',NULL);

/*Table structure for table `crr_permissions` */

DROP TABLE IF EXISTS `crr_permissions`;

CREATE TABLE `crr_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `crr_permissions` */

insert  into `crr_permissions`(`id`,`id_modulo`,`id_user`) values (1,1,1),(2,1,3),(3,2,1),(4,3,1),(5,3,5);

/*Table structure for table `crr_users` */

DROP TABLE IF EXISTS `crr_users`;

CREATE TABLE `crr_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` text,
  `nivel` int(2) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `crr_users` */

insert  into `crr_users`(`id`,`usuario`,`pass`,`nivel`,`correo`) values (1,'ivan','9f3ae80a0097d4523e47761684d5e33f',0,'potara.cotosta@gmail.com'),(3,'julio','e10adc3949ba59abbe56e057f20f883e',1,'ivan.rodriguez1986@hotmail.com'),(4,'fer','e10adc3949ba59abbe56e057f20f883e',1,'potara_cotosta@hotmail.com'),(5,'omar','e10adc3949ba59abbe56e057f20f883e',2,'1@6'),(6,'sergio','e10adc3949ba59abbe56e057f20f883e',2,'2@6');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
