-- Permisos para modulos 
SELECT m.nombre modulo,m.html enlace,m.estado,p.id_user permiso,u.`usuario` FROM crr_modules m, CRR_permissions p,CRR_USERS u
WHERE  p.id_modulo=m.id
AND m.estado=1
AND u.`id`=p.`id_user`
AND p.id_user=3;

-- Permisos para modulos 
SELECT m.id,m.nombre modulo,m.html enlace,m.estado,p.id_user permiso,u.`usuario` FROM crr_modules m, CRR_permissions p,CRR_USERS u
WHERE  p.id_modulo=m.id
AND m.estado=1
AND u.`id`=p.`id_user`
AND p.id_user=1;

SELECT COUNT(u.id) Sessiones
FROM crr_modules m, CRR_permissions p,CRR_USERS u
WHERE  p.id_modulo=m.id
AND m.estado=1
AND u.`id`=p.`id_user`
AND p.id_user=3;
------------------------

SELECT COUNT(m.key) Acces,m.estado FROM crr_modules m, CRR_permissions p,CRR_USERS u
WHERE  p.id_modulo=m.id
AND m.estado=1
AND u.`id`=p.`id_user`
AND p.id_user=3
AND m.`id`=1;


-- Consultas para mostrar modulos
SELECT m.nombre modulo,m.html enlace,m.estado,p.id_user permiso FROM crr_modules m, CRR_permissions p
WHERE p.id_user=1
AND p.id_modulo=m.id
AND m.estado=1;

SELECT m.nombre modulo,m.html enlace,m.estado,p.id_user permiso FROM crr_modules m, CRR_permissions p 
WHERE  p.id_user=2
AND p.id_modulo=m.id
AND m.estado=1;

--Email
SELECT usuario,correo FROM crr_users WHERE usuario ='' OR correo ='';