CREATE DATABASE ERPSHOES;

DROP TABLE IF EXISTS `CRR_USERS`;
CREATE TABLE CRR_USERS
(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
usuario VARCHAR(50),
pass TEXT,
nivel INT(2),
correo VARCHAR(80)
);

SELECT * FROM CRR_USERS;

INSERT INTO CRR_USERS (id,usuario,pass,nivel,correo) VALUES
(NULL,'ivan',MD5('hadess122486'),0,'potara.cotosta@gmail.com'),
(NULL,'julio',MD5('123456'),1,'ivan.rodriguez1986@hotmail.com'),
(NULL,'fer',MD5('123456'),1,'potara_cotosta@hotmail.com'),
(NULL,'omar',MD5('123456'),2,'1@6'),
(NULL,'sergio',MD5('123456'),2,'2@6');

/*Modulos*/

DROP TABLE IF EXISTS `CRR_MODULES`;
CREATE TABLE CRR_MODULES
(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(80),
estado INT(2),
html TEXT
);

INSERT INTO crr_modules (id,nombre,estado,html) VALUES
(NULL,'usuarios',1,'<a href="modulos/usuarios.php">usuarios</a>');

INSERT INTO crr_modules (id,nombre,estado,html) VALUES
(NULL,'proveedores',1,'<a href="modulos/proveedores.php">Proveedores</a>');


/*Permisos*/
DROP TABLE IF EXISTS `CRR_permissions`;
CREATE TABLE CRR_permissions
(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_modulo INT(10),
id_user INT(10)
);


INSERT INTO CRR_permissions (id,id_modulo,id_user)
VALUES (NULL,1,1),(NULL,1,2);

-- Consultas para mostrar modulos
SELECT m.nombre modulo,m.html enlace,m.estado,p.id_user permiso FROM crr_modules m, CRR_permissions p
WHERE p.id_user=1
AND p.id_modulo=m.id
AND m.estado=1;

SELECT m.nombre modulo,m.html enlace,m.estado,p.id_user permiso FROM crr_modules m, CRR_permissions p 
WHERE  p.id_user=2
AND p.id_modulo=m.id
AND m.estado=1;