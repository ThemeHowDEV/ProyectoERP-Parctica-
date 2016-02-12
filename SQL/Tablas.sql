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

/*Table structure for table `crr_componentes` */

DROP TABLE IF EXISTS `crr_componentes`;

CREATE TABLE `crr_componentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` text,
  `id_unidad` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `crr_componentes` */

/*Table structure for table `crr_departamentos` */

DROP TABLE IF EXISTS `crr_departamentos`;

CREATE TABLE `crr_departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` text,
  `orden` int(5) DEFAULT NULL,
  `id_jefe` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `crr_departamentos` */

/*Table structure for table `crr_ejecution_fuctions` */

DROP TABLE IF EXISTS `crr_ejecution_fuctions`;

CREATE TABLE `crr_ejecution_fuctions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fuction` int(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `crr_ejecution_fuctions` */

insert  into `crr_ejecution_fuctions`(`id`,`id_fuction`,`id_user`) values (1,1,1),(2,2,1),(3,3,1),(4,4,1),(5,5,1);

/*Table structure for table `crr_estados_modulos` */

DROP TABLE IF EXISTS `crr_estados_modulos`;

CREATE TABLE `crr_estados_modulos` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `crr_estados_modulos` */

insert  into `crr_estados_modulos`(`id_estado`,`nombre`,`descripcion`) values (1,'Activo','En este estado el modulo se encuentra activo y funcional'),(2,'Inactivo','En este estado el modulo esta inactivo pero funcional'),(3,'Construccion','En este estado el Modulo esta en construccion');

/*Table structure for table `crr_functions` */

DROP TABLE IF EXISTS `crr_functions`;

CREATE TABLE `crr_functions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `Section` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `crr_functions` */

insert  into `crr_functions`(`id`,`nombre`,`Section`) values (1,'crear','user'),(2,'editar','user'),(3,'eliminar','user'),(4,'bloquear','user'),(5,'permisos','user');

/*Table structure for table `crr_lote` */

DROP TABLE IF EXISTS `crr_lote`;

CREATE TABLE `crr_lote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lote` int(50) DEFAULT NULL,
  `id_modelo` int(50) DEFAULT NULL,
  `pares` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `crr_lote` */

/*Table structure for table `crr_modelo` */

DROP TABLE IF EXISTS `crr_modelo`;

CREATE TABLE `crr_modelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `id_componente` int(50) DEFAULT NULL,
  `notas` text,
  `imagen` text,
  `id_temporada` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `crr_modelo` */

/*Table structure for table `crr_modules` */

DROP TABLE IF EXISTS `crr_modules`;

CREATE TABLE `crr_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) DEFAULT NULL,
  `estado_id` int(2) DEFAULT NULL,
  `html` text,
  `icon` text COMMENT 'nombre encode base 64 x 5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `crr_modules` */

insert  into `crr_modules`(`id`,`nombre`,`estado_id`,`html`,`icon`) values (1,'usuarios',1,'class=\"small-box bg-aqua\"','class=\"ion ion-ios-people\"'),(2,'proveedores',1,'class=\"small-box bg-yellow\"','class=\"ion ion-ios-person\"'),(3,'clientes',1,'class=\"small-box bg-green\"','class=\"ion ion-ios-person\"'),(4,'UsuariosEdit',1,'class=\"small-box bg-gray\"','class=\"ion ion-ios-person\"'),(5,'Configuracion',1,'class=\"small-box bg-aqua\"','class=\"ion ion-ios-person\"');

/*Table structure for table `crr_permissions` */

DROP TABLE IF EXISTS `crr_permissions`;

CREATE TABLE `crr_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `crr_permissions` */

insert  into `crr_permissions`(`id`,`id_modulo`,`id_user`) values (1,1,1),(2,1,3),(3,2,1),(4,3,1),(5,3,5),(6,1,4),(7,2,4),(8,5,1),(9,4,1);

/*Table structure for table `crr_procesos` */

DROP TABLE IF EXISTS `crr_procesos`;

CREATE TABLE `crr_procesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `id_departamento` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `crr_procesos` */

/*Table structure for table `crr_rols` */

DROP TABLE IF EXISTS `crr_rols`;

CREATE TABLE `crr_rols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `crr_rols` */

insert  into `crr_rols`(`id`,`descripcion`) values (0,'Super Administrador'),(1,'Administrador'),(2,'Usuario'),(3,'Colaborador'),(4,'Empleado'),(6,'Proveedor');

/*Table structure for table `crr_temporada` */

DROP TABLE IF EXISTS `crr_temporada`;

CREATE TABLE `crr_temporada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `Activa` int(11) DEFAULT '0' COMMENT '1=activa 0=inactiva',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `crr_temporada` */

insert  into `crr_temporada`(`id`,`descripcion`,`Activa`) values (1,'Primavera-verano 2015',0),(2,'Primavera-verano 2016',1);

/*Table structure for table `crr_unidades` */

DROP TABLE IF EXISTS `crr_unidades`;

CREATE TABLE `crr_unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` text,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `crr_unidades` */

/*Table structure for table `crr_users` */

DROP TABLE IF EXISTS `crr_users`;

CREATE TABLE `crr_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` text,
  `nivel` int(2) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL COMMENT '1= activo   0 = Bloqueado',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `crr_users` */

insert  into `crr_users`(`id`,`usuario`,`pass`,`nivel`,`correo`,`Estado`) values (1,'ivan','9f3ae80a0097d4523e47761684d5e33f',0,'potara.cotosta@gmail.com',1),(3,'julio','9f3ae80a0097d4523e47761684d5e33f',1,'ivan.rodriguez1986@hotmail.com',1),(4,'ismael','9f3ae80a0097d4523e47761684d5e33f',1,'ing.ismael@hotmail.com',1),(5,'omar','9f3ae80a0097d4523e47761684d5e33f',2,'1@6',1),(6,'sergio','9f3ae80a0097d4523e47761684d5e33f',2,'2@6',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
