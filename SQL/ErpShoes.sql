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
  `icon` text,
  `icon_baner` text,
  `baner` int(11) DEFAULT NULL COMMENT '1= Aparece en baner y barra lateral, 0 solo en barra lateral',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `crr_modules` */

insert  into `crr_modules`(`id`,`nombre`,`estado_id`,`html`,`icon`,`icon_baner`,`baner`) values (1,'usuarios',1,'bg-aqua','class=\"ion ion-ios-people\"','class=\"fa fa-users\"',1),(2,'proveedores',1,'bg-yellow','class=\"ion ion-ios-person\"','class=\"fa fa-user\"',1),(3,'clientes',1,'bg-green','class=\"ion ion-ios-person\"','class=\"fa fa-user\"',1),(4,'UsuariosEdit',2,'bg-gray','class=\"ion ion-ios-person\"','class=\"fa fa-user\"',1),(5,'Configuracion',3,'bg-aqua','class=\"ion ion-alert-circled\"','class=\"fa fa-user\"',1);

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

/*Table structure for table `crr_submodulos` */

DROP TABLE IF EXISTS `crr_submodulos`;

CREATE TABLE `crr_submodulos` (
  `id_submodulo` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `color_class` varchar(80) DEFAULT NULL,
  `icon` varchar(80) DEFAULT NULL,
  `icon_baner` varchar(80) DEFAULT NULL,
  `Function` varchar(80) DEFAULT NULL COMMENT 'Que funcion se procesa',
  PRIMARY KEY (`id_submodulo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `crr_submodulos` */

insert  into `crr_submodulos`(`id_submodulo`,`id_modulo`,`nombre`,`estado_id`,`color_class`,`icon`,`icon_baner`,`Function`) values (1,1,'Usuarios',1,NULL,'ion-person-stalker',NULL,'TablaUser'),(2,1,'Nuevo usuario',1,NULL,'ion-person-add',NULL,NULL),(3,0,'Editar usuario',1,NULL,'ion-edit',NULL,NULL),(4,2,'Tabla Proveedores',1,NULL,'ion-ios-people-outline',NULL,NULL),(5,2,'Nuevo Proveedor',1,NULL,'ion-ios-personadd-outline',NULL,NULL);

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

/*Table structure for table `icons` */

DROP TABLE IF EXISTS `icons`;

CREATE TABLE `icons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=734 DEFAULT CHARSET=latin1;

/*Data for the table `icons` */

insert  into `icons`(`id`,`icon`) values (1,'ion-alert'),(2,'ion-alert-circled'),(3,'ion-android-add'),(4,'ion-android-add-circle'),(5,'ion-android-alarm-clock'),(6,'ion-android-alert'),(7,'ion-android-apps'),(8,'ion-android-archive'),(9,'ion-android-arrow-back'),(10,'ion-android-arrow-down'),(11,'ion-android-arrow-dropdown'),(12,'ion-android-arrow-dropdown-circle'),(13,'ion-android-arrow-dropleft'),(14,'ion-android-arrow-dropleft-circle'),(15,'ion-android-arrow-dropright'),(16,'ion-android-arrow-dropright-circle'),(17,'ion-android-arrow-dropup'),(18,'ion-android-arrow-dropup-circle'),(19,'ion-android-arrow-forward'),(20,'ion-android-arrow-up'),(21,'ion-android-attach'),(22,'ion-android-bar'),(23,'ion-android-bicycle'),(24,'ion-android-boat'),(25,'ion-android-bookmark'),(26,'ion-android-bulb'),(27,'ion-android-bus'),(28,'ion-android-calendar'),(29,'ion-android-call'),(30,'ion-android-camera'),(31,'ion-android-cancel'),(32,'ion-android-car'),(33,'ion-android-cart'),(34,'ion-android-chat'),(35,'ion-android-checkbox'),(36,'ion-android-checkbox-blank'),(37,'ion-android-checkbox-outline'),(38,'ion-android-checkbox-outline-blank'),(39,'ion-android-checkmark-circle'),(40,'ion-android-clipboard'),(41,'ion-android-close'),(42,'ion-android-cloud'),(43,'ion-android-cloud-circle'),(44,'ion-android-cloud-done'),(45,'ion-android-cloud-outline'),(46,'ion-android-color-palette'),(47,'ion-android-compass'),(48,'ion-android-contact'),(49,'ion-android-contacts'),(50,'ion-android-contract'),(51,'ion-android-create'),(52,'ion-android-delete'),(53,'ion-android-desktop'),(54,'ion-android-document'),(55,'ion-android-done'),(56,'ion-android-done-all'),(57,'ion-android-download'),(58,'ion-android-drafts'),(59,'ion-android-exit'),(60,'ion-android-expand'),(61,'ion-android-favorite'),(62,'ion-android-favorite-outline'),(63,'ion-android-film'),(64,'ion-android-folder'),(65,'ion-android-folder-open'),(66,'ion-android-funnel'),(67,'ion-android-globe'),(68,'ion-android-hand'),(69,'ion-android-hangout'),(70,'ion-android-happy'),(71,'ion-android-home'),(72,'ion-android-image'),(73,'ion-android-laptop'),(74,'ion-android-list'),(75,'ion-android-locate'),(76,'ion-android-lock'),(77,'ion-android-mail'),(78,'ion-android-map'),(79,'ion-android-menu'),(80,'ion-android-microphone'),(81,'ion-android-microphone-off'),(82,'ion-android-more-horizontal'),(83,'ion-android-more-vertical'),(84,'ion-android-navigate'),(85,'ion-android-notifications'),(86,'ion-android-notifications-none'),(87,'ion-android-notifications-off'),(88,'ion-android-open'),(89,'ion-android-options'),(90,'ion-android-people'),(91,'ion-android-person'),(92,'ion-android-person-add'),(93,'ion-android-phone-landscape'),(94,'ion-android-phone-portrait'),(95,'ion-android-pin'),(96,'ion-android-plane'),(97,'ion-android-playstore'),(98,'ion-android-print'),(99,'ion-android-radio-button-off'),(100,'ion-android-radio-button-on'),(101,'ion-android-refresh'),(102,'ion-android-remove'),(103,'ion-android-remove-circle'),(104,'ion-android-restaurant'),(105,'ion-android-sad'),(106,'ion-android-search'),(107,'ion-android-send'),(108,'ion-android-settings'),(109,'ion-android-share'),(110,'ion-android-share-alt'),(111,'ion-android-star'),(112,'ion-android-star-half'),(113,'ion-android-star-outline'),(114,'ion-android-stopwatch'),(115,'ion-android-subway'),(116,'ion-android-sunny'),(117,'ion-android-sync'),(118,'ion-android-textsms'),(119,'ion-android-time'),(120,'ion-android-train'),(121,'ion-android-unlock'),(122,'ion-android-upload'),(123,'ion-android-volume-down'),(124,'ion-android-volume-mute'),(125,'ion-android-volume-off'),(126,'ion-android-volume-up'),(127,'ion-android-walk'),(128,'ion-android-warning'),(129,'ion-android-watch'),(130,'ion-android-wifi'),(131,'ion-aperture'),(132,'ion-archive'),(133,'ion-arrow-down-a'),(134,'ion-arrow-down-b'),(135,'ion-arrow-down-c'),(136,'ion-arrow-expand'),(137,'ion-arrow-graph-down-left'),(138,'ion-arrow-graph-down-right'),(139,'ion-arrow-graph-up-left'),(140,'ion-arrow-graph-up-right'),(141,'ion-arrow-left-a'),(142,'ion-arrow-left-b'),(143,'ion-arrow-left-c'),(144,'ion-arrow-move'),(145,'ion-arrow-resize'),(146,'ion-arrow-return-left'),(147,'ion-arrow-return-right'),(148,'ion-arrow-right-a'),(149,'ion-arrow-right-b'),(150,'ion-arrow-right-c'),(151,'ion-arrow-shrink'),(152,'ion-arrow-swap'),(153,'ion-arrow-up-a'),(154,'ion-arrow-up-b'),(155,'ion-arrow-up-c'),(156,'ion-asterisk'),(157,'ion-at'),(158,'ion-backspace'),(159,'ion-backspace-outline'),(160,'ion-bag'),(161,'ion-battery-charging'),(162,'ion-battery-empty'),(163,'ion-battery-full'),(164,'ion-battery-half'),(165,'ion-battery-low'),(166,'ion-beaker'),(167,'ion-beer'),(168,'ion-bluetooth'),(169,'ion-bonfire'),(170,'ion-bookmark'),(171,'ion-bowtie'),(172,'ion-briefcase'),(173,'ion-bug'),(174,'ion-calculator'),(175,'ion-calendar'),(176,'ion-camera'),(177,'ion-card'),(178,'ion-cash'),(179,'ion-chatbox'),(180,'ion-chatbox-working'),(181,'ion-chatboxes'),(182,'ion-chatbubble'),(183,'ion-chatbubble-working'),(184,'ion-chatbubbles'),(185,'ion-checkmark'),(186,'ion-checkmark-circled'),(187,'ion-checkmark-round'),(188,'ion-chevron-down'),(189,'ion-chevron-left'),(190,'ion-chevron-right'),(191,'ion-chevron-up'),(192,'ion-clipboard'),(193,'ion-clock'),(194,'ion-close'),(195,'ion-close-circled'),(196,'ion-close-round'),(197,'ion-closed-captioning'),(198,'ion-cloud'),(199,'ion-code'),(200,'ion-code-download'),(201,'ion-code-working'),(202,'ion-coffee'),(203,'ion-compass'),(204,'ion-compose'),(205,'ion-connection-bars'),(206,'ion-contrast'),(207,'ion-crop'),(208,'ion-cube'),(209,'ion-disc'),(210,'ion-document'),(211,'ion-document-text'),(212,'ion-drag'),(213,'ion-earth'),(214,'ion-easel'),(215,'ion-edit'),(216,'ion-egg'),(217,'ion-eject'),(218,'ion-email'),(219,'ion-email-unread'),(220,'ion-erlenmeyer-flask'),(221,'ion-erlenmeyer-flask-bubbles'),(222,'ion-eye'),(223,'ion-eye-disabled'),(224,'ion-female'),(225,'ion-filing'),(226,'ion-film-marker'),(227,'ion-fireball'),(228,'ion-flag'),(229,'ion-flame'),(230,'ion-flash'),(231,'ion-flash-off'),(232,'ion-folder'),(233,'ion-fork'),(234,'ion-fork-repo'),(235,'ion-forward'),(236,'ion-funnel'),(237,'ion-gear-a'),(238,'ion-gear-b'),(239,'ion-grid'),(240,'ion-hammer'),(241,'ion-happy'),(242,'ion-happy-outline'),(243,'ion-headphone'),(244,'ion-heart'),(245,'ion-heart-broken'),(246,'ion-help'),(247,'ion-help-buoy'),(248,'ion-help-circled'),(249,'ion-home'),(250,'ion-icecream'),(251,'ion-image'),(252,'ion-images'),(253,'ion-information'),(254,'ion-information-circled'),(255,'ion-ionic'),(256,'ion-ios-alarm'),(257,'ion-ios-alarm-outline'),(258,'ion-ios-albums'),(259,'ion-ios-albums-outline'),(260,'ion-ios-americanfootball'),(261,'ion-ios-americanfootball-outline'),(262,'ion-ios-analytics'),(263,'ion-ios-analytics-outline'),(264,'ion-ios-arrow-back'),(265,'ion-ios-arrow-down'),(266,'ion-ios-arrow-forward'),(267,'ion-ios-arrow-left'),(268,'ion-ios-arrow-right'),(269,'ion-ios-arrow-thin-down'),(270,'ion-ios-arrow-thin-left'),(271,'ion-ios-arrow-thin-right'),(272,'ion-ios-arrow-thin-up'),(273,'ion-ios-arrow-up'),(274,'ion-ios-at'),(275,'ion-ios-at-outline'),(276,'ion-ios-barcode'),(277,'ion-ios-barcode-outline'),(278,'ion-ios-baseball'),(279,'ion-ios-baseball-outline'),(280,'ion-ios-basketball'),(281,'ion-ios-basketball-outline'),(282,'ion-ios-bell'),(283,'ion-ios-bell-outline'),(284,'ion-ios-body'),(285,'ion-ios-body-outline'),(286,'ion-ios-bolt'),(287,'ion-ios-bolt-outline'),(288,'ion-ios-book'),(289,'ion-ios-book-outline'),(290,'ion-ios-bookmarks'),(291,'ion-ios-bookmarks-outline'),(292,'ion-ios-box'),(293,'ion-ios-box-outline'),(294,'ion-ios-briefcase'),(295,'ion-ios-briefcase-outline'),(296,'ion-ios-browsers'),(297,'ion-ios-browsers-outline'),(298,'ion-ios-calculator'),(299,'ion-ios-calculator-outline'),(300,'ion-ios-calendar'),(301,'ion-ios-calendar-outline'),(302,'ion-ios-camera'),(303,'ion-ios-camera-outline'),(304,'ion-ios-cart'),(305,'ion-ios-cart-outline'),(306,'ion-ios-chatboxes'),(307,'ion-ios-chatboxes-outline'),(308,'ion-ios-chatbubble'),(309,'ion-ios-chatbubble-outline'),(310,'ion-ios-checkmark'),(311,'ion-ios-checkmark-empty'),(312,'ion-ios-checkmark-outline'),(313,'ion-ios-circle-filled'),(314,'ion-ios-circle-outline'),(315,'ion-ios-clock'),(316,'ion-ios-clock-outline'),(317,'ion-ios-close'),(318,'ion-ios-close-empty'),(319,'ion-ios-close-outline'),(320,'ion-ios-cloud'),(321,'ion-ios-cloud-download'),(322,'ion-ios-cloud-download-outline'),(323,'ion-ios-cloud-outline'),(324,'ion-ios-cloud-upload'),(325,'ion-ios-cloud-upload-outline'),(326,'ion-ios-cloudy'),(327,'ion-ios-cloudy-night'),(328,'ion-ios-cloudy-night-outline'),(329,'ion-ios-cloudy-outline'),(330,'ion-ios-cog'),(331,'ion-ios-cog-outline'),(332,'ion-ios-color-filter'),(333,'ion-ios-color-filter-outline'),(334,'ion-ios-color-wand'),(335,'ion-ios-color-wand-outline'),(336,'ion-ios-compose'),(337,'ion-ios-compose-outline'),(338,'ion-ios-contact'),(339,'ion-ios-contact-outline'),(340,'ion-ios-copy'),(341,'ion-ios-copy-outline'),(342,'ion-ios-crop'),(343,'ion-ios-crop-strong'),(344,'ion-ios-download'),(345,'ion-ios-download-outline'),(346,'ion-ios-drag'),(347,'ion-ios-email'),(348,'ion-ios-email-outline'),(349,'ion-ios-eye'),(350,'ion-ios-eye-outline'),(351,'ion-ios-fastforward'),(352,'ion-ios-fastforward-outline'),(353,'ion-ios-filing'),(354,'ion-ios-filing-outline'),(355,'ion-ios-film'),(356,'ion-ios-film-outline'),(357,'ion-ios-flag'),(358,'ion-ios-flag-outline'),(359,'ion-ios-flame'),(360,'ion-ios-flame-outline'),(361,'ion-ios-flask'),(362,'ion-ios-flask-outline'),(363,'ion-ios-flower'),(364,'ion-ios-flower-outline'),(365,'ion-ios-folder'),(366,'ion-ios-folder-outline'),(367,'ion-ios-football'),(368,'ion-ios-football-outline'),(369,'ion-ios-game-controller-a'),(370,'ion-ios-game-controller-a-outline'),(371,'ion-ios-game-controller-b'),(372,'ion-ios-game-controller-b-outline'),(373,'ion-ios-gear'),(374,'ion-ios-gear-outline'),(375,'ion-ios-glasses'),(376,'ion-ios-glasses-outline'),(377,'ion-ios-grid-view'),(378,'ion-ios-grid-view-outline'),(379,'ion-ios-heart'),(380,'ion-ios-heart-outline'),(381,'ion-ios-help'),(382,'ion-ios-help-empty'),(383,'ion-ios-help-outline'),(384,'ion-ios-home'),(385,'ion-ios-home-outline'),(386,'ion-ios-infinite'),(387,'ion-ios-infinite-outline'),(388,'ion-ios-information'),(389,'ion-ios-information-empty'),(390,'ion-ios-information-outline'),(391,'ion-ios-ionic-outline'),(392,'ion-ios-keypad'),(393,'ion-ios-keypad-outline'),(394,'ion-ios-lightbulb'),(395,'ion-ios-lightbulb-outline'),(396,'ion-ios-list'),(397,'ion-ios-list-outline'),(398,'ion-ios-location'),(399,'ion-ios-location-outline'),(400,'ion-ios-locked'),(401,'ion-ios-locked-outline'),(402,'ion-ios-loop'),(403,'ion-ios-loop-strong'),(404,'ion-ios-medical'),(405,'ion-ios-medical-outline'),(406,'ion-ios-medkit'),(407,'ion-ios-medkit-outline'),(408,'ion-ios-mic'),(409,'ion-ios-mic-off'),(410,'ion-ios-mic-outline'),(411,'ion-ios-minus'),(412,'ion-ios-minus-empty'),(413,'ion-ios-minus-outline'),(414,'ion-ios-monitor'),(415,'ion-ios-monitor-outline'),(416,'ion-ios-moon'),(417,'ion-ios-moon-outline'),(418,'ion-ios-more'),(419,'ion-ios-more-outline'),(420,'ion-ios-musical-note'),(421,'ion-ios-musical-notes'),(422,'ion-ios-navigate'),(423,'ion-ios-navigate-outline'),(424,'ion-ios-nutrition'),(425,'ion-ios-nutrition-outline'),(426,'ion-ios-paper'),(427,'ion-ios-paper-outline'),(428,'ion-ios-paperplane'),(429,'ion-ios-paperplane-outline'),(430,'ion-ios-partlysunny'),(431,'ion-ios-partlysunny-outline'),(432,'ion-ios-pause'),(433,'ion-ios-pause-outline'),(434,'ion-ios-paw'),(435,'ion-ios-paw-outline'),(436,'ion-ios-people'),(437,'ion-ios-people-outline'),(438,'ion-ios-person'),(439,'ion-ios-person-outline'),(440,'ion-ios-personadd'),(441,'ion-ios-personadd-outline'),(442,'ion-ios-photos'),(443,'ion-ios-photos-outline'),(444,'ion-ios-pie'),(445,'ion-ios-pie-outline'),(446,'ion-ios-pint'),(447,'ion-ios-pint-outline'),(448,'ion-ios-play'),(449,'ion-ios-play-outline'),(450,'ion-ios-plus'),(451,'ion-ios-plus-empty'),(452,'ion-ios-plus-outline'),(453,'ion-ios-pricetag'),(454,'ion-ios-pricetag-outline'),(455,'ion-ios-pricetags'),(456,'ion-ios-pricetags-outline'),(457,'ion-ios-printer'),(458,'ion-ios-printer-outline'),(459,'ion-ios-pulse'),(460,'ion-ios-pulse-strong'),(461,'ion-ios-rainy'),(462,'ion-ios-rainy-outline'),(463,'ion-ios-recording'),(464,'ion-ios-recording-outline'),(465,'ion-ios-redo'),(466,'ion-ios-redo-outline'),(467,'ion-ios-refresh'),(468,'ion-ios-refresh-empty'),(469,'ion-ios-refresh-outline'),(470,'ion-ios-reload'),(471,'ion-ios-reverse-camera'),(472,'ion-ios-reverse-camera-outline'),(473,'ion-ios-rewind'),(474,'ion-ios-rewind-outline'),(475,'ion-ios-rose'),(476,'ion-ios-rose-outline'),(477,'ion-ios-search'),(478,'ion-ios-search-strong'),(479,'ion-ios-settings'),(480,'ion-ios-settings-strong'),(481,'ion-ios-shuffle'),(482,'ion-ios-shuffle-strong'),(483,'ion-ios-skipbackward'),(484,'ion-ios-skipbackward-outline'),(485,'ion-ios-skipforward'),(486,'ion-ios-skipforward-outline'),(487,'ion-ios-snowy'),(488,'ion-ios-speedometer'),(489,'ion-ios-speedometer-outline'),(490,'ion-ios-star'),(491,'ion-ios-star-half'),(492,'ion-ios-star-outline'),(493,'ion-ios-stopwatch'),(494,'ion-ios-stopwatch-outline'),(495,'ion-ios-sunny'),(496,'ion-ios-sunny-outline'),(497,'ion-ios-telephone'),(498,'ion-ios-telephone-outline'),(499,'ion-ios-tennisball'),(500,'ion-ios-tennisball-outline'),(501,'ion-ios-thunderstorm'),(502,'ion-ios-thunderstorm-outline'),(503,'ion-ios-time'),(504,'ion-ios-time-outline'),(505,'ion-ios-timer'),(506,'ion-ios-timer-outline'),(507,'ion-ios-toggle'),(508,'ion-ios-toggle-outline'),(509,'ion-ios-trash'),(510,'ion-ios-trash-outline'),(511,'ion-ios-undo'),(512,'ion-ios-undo-outline'),(513,'ion-ios-unlocked'),(514,'ion-ios-unlocked-outline'),(515,'ion-ios-upload'),(516,'ion-ios-upload-outline'),(517,'ion-ios-videocam'),(518,'ion-ios-videocam-outline'),(519,'ion-ios-volume-high'),(520,'ion-ios-volume-low'),(521,'ion-ios-wineglass'),(522,'ion-ios-wineglass-outline'),(523,'ion-ios-world'),(524,'ion-ios-world-outline'),(525,'ion-ipad'),(526,'ion-iphone'),(527,'ion-ipod'),(528,'ion-jet'),(529,'ion-key'),(530,'ion-knife'),(531,'ion-laptop'),(532,'ion-leaf'),(533,'ion-levels'),(534,'ion-lightbulb'),(535,'ion-link'),(536,'ion-load-a'),(537,'ion-load-b'),(538,'ion-load-c'),(539,'ion-load-d'),(540,'ion-location'),(541,'ion-lock-combination'),(542,'ion-locked'),(543,'ion-log-in'),(544,'ion-log-out'),(545,'ion-loop'),(546,'ion-magnet'),(547,'ion-male'),(548,'ion-man'),(549,'ion-map'),(550,'ion-medkit'),(551,'ion-merge'),(552,'ion-mic-a'),(553,'ion-mic-b'),(554,'ion-mic-c'),(555,'ion-minus'),(556,'ion-minus-circled'),(557,'ion-minus-round'),(558,'ion-model-s'),(559,'ion-monitor'),(560,'ion-more'),(561,'ion-mouse'),(562,'ion-music-note'),(563,'ion-navicon'),(564,'ion-navicon-round'),(565,'ion-navigate'),(566,'ion-network'),(567,'ion-no-smoking'),(568,'ion-nuclear'),(569,'ion-outlet'),(570,'ion-paintbrush'),(571,'ion-paintbucket'),(572,'ion-paper-airplane'),(573,'ion-paperclip'),(574,'ion-pause'),(575,'ion-person'),(576,'ion-person-add'),(577,'ion-person-stalker'),(578,'ion-pie-graph'),(579,'ion-pin'),(580,'ion-pinpoint'),(581,'ion-pizza'),(582,'ion-plane'),(583,'ion-planet'),(584,'ion-play'),(585,'ion-playstation'),(586,'ion-plus'),(587,'ion-plus-circled'),(588,'ion-plus-round'),(589,'ion-podium'),(590,'ion-pound'),(591,'ion-power'),(592,'ion-pricetag'),(593,'ion-pricetags'),(594,'ion-printer'),(595,'ion-pull-request'),(596,'ion-qr-scanner'),(597,'ion-quote'),(598,'ion-radio-waves'),(599,'ion-record'),(600,'ion-refresh'),(601,'ion-reply'),(602,'ion-reply-all'),(603,'ion-ribbon-a'),(604,'ion-ribbon-b'),(605,'ion-sad'),(606,'ion-sad-outline'),(607,'ion-scissors'),(608,'ion-search'),(609,'ion-settings'),(610,'ion-share'),(611,'ion-shuffle'),(612,'ion-skip-backward'),(613,'ion-skip-forward'),(614,'ion-social-android'),(615,'ion-social-android-outline'),(616,'ion-social-angular'),(617,'ion-social-angular-outline'),(618,'ion-social-apple'),(619,'ion-social-apple-outline'),(620,'ion-social-bitcoin'),(621,'ion-social-bitcoin-outline'),(622,'ion-social-buffer'),(623,'ion-social-buffer-outline'),(624,'ion-social-chrome'),(625,'ion-social-chrome-outline'),(626,'ion-social-codepen'),(627,'ion-social-codepen-outline'),(628,'ion-social-css3'),(629,'ion-social-css3-outline'),(630,'ion-social-designernews'),(631,'ion-social-designernews-outline'),(632,'ion-social-dribbble'),(633,'ion-social-dribbble-outline'),(634,'ion-social-dropbox'),(635,'ion-social-dropbox-outline'),(636,'ion-social-euro'),(637,'ion-social-euro-outline'),(638,'ion-social-facebook'),(639,'ion-social-facebook-outline'),(640,'ion-social-foursquare'),(641,'ion-social-foursquare-outline'),(642,'ion-social-freebsd-devil'),(643,'ion-social-github'),(644,'ion-social-github-outline'),(645,'ion-social-google'),(646,'ion-social-google-outline'),(647,'ion-social-googleplus'),(648,'ion-social-googleplus-outline'),(649,'ion-social-hackernews'),(650,'ion-social-hackernews-outline'),(651,'ion-social-html5'),(652,'ion-social-html5-outline'),(653,'ion-social-instagram'),(654,'ion-social-instagram-outline'),(655,'ion-social-javascript'),(656,'ion-social-javascript-outline'),(657,'ion-social-linkedin'),(658,'ion-social-linkedin-outline'),(659,'ion-social-markdown'),(660,'ion-social-nodejs'),(661,'ion-social-octocat'),(662,'ion-social-pinterest'),(663,'ion-social-pinterest-outline'),(664,'ion-social-python'),(665,'ion-social-reddit'),(666,'ion-social-reddit-outline'),(667,'ion-social-rss'),(668,'ion-social-rss-outline'),(669,'ion-social-sass'),(670,'ion-social-skype'),(671,'ion-social-skype-outline'),(672,'ion-social-snapchat'),(673,'ion-social-snapchat-outline'),(674,'ion-social-tumblr'),(675,'ion-social-tumblr-outline'),(676,'ion-social-tux'),(677,'ion-social-twitch'),(678,'ion-social-twitch-outline'),(679,'ion-social-twitter'),(680,'ion-social-twitter-outline'),(681,'ion-social-usd'),(682,'ion-social-usd-outline'),(683,'ion-social-vimeo'),(684,'ion-social-vimeo-outline'),(685,'ion-social-whatsapp'),(686,'ion-social-whatsapp-outline'),(687,'ion-social-windows'),(688,'ion-social-windows-outline'),(689,'ion-social-wordpress'),(690,'ion-social-wordpress-outline'),(691,'ion-social-yahoo'),(692,'ion-social-yahoo-outline'),(693,'ion-social-yen'),(694,'ion-social-yen-outline'),(695,'ion-social-youtube'),(696,'ion-social-youtube-outline'),(697,'ion-soup-can'),(698,'ion-soup-can-outline'),(699,'ion-speakerphone'),(700,'ion-speedometer'),(701,'ion-spoon'),(702,'ion-star'),(703,'ion-stats-bars'),(704,'ion-steam'),(705,'ion-stop'),(706,'ion-thermometer'),(707,'ion-thumbsdown'),(708,'ion-thumbsup'),(709,'ion-toggle'),(710,'ion-toggle-filled'),(711,'ion-transgender'),(712,'ion-trash-a'),(713,'ion-trash-b'),(714,'ion-trophy'),(715,'ion-tshirt'),(716,'ion-tshirt-outline'),(717,'ion-umbrella'),(718,'ion-university'),(719,'ion-unlocked'),(720,'ion-upload'),(721,'ion-usb'),(722,'ion-videocamera'),(723,'ion-volume-high'),(724,'ion-volume-low'),(725,'ion-volume-medium'),(726,'ion-volume-mute'),(727,'ion-wand'),(728,'ion-waterdrop'),(729,'ion-wifi'),(730,'ion-wineglass'),(731,'ion-woman'),(732,'ion-wrench'),(733,'ion-xbox');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
