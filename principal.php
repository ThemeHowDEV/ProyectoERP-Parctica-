<!--<body oncontextmenu="return false" onkeydown="return false"> Evitar el clic derecho-->
<!DOCTYPE html>
<html>
	<head>
		<title>:::::::MENU PRINCIPAL:::::::</title>
	
		<!--METADATOS-->
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
		
		<!--IMPORTAMOS CSS-->
		<link rel="stylesheet" type="text/css" href="libs/tab/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="libs/tab/shCore.css">
		<link rel="stylesheet" type="text/css" href="libs/tab/demo.css">		
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
	   
	    <!--IMPORTAMOS JAVASCRIPT-->
		<script languaje="JavaScript" type="text/javascript">
		function Modules(id){var idT =id;
			$("#Modulos").load('modulos/modulos.php', { id: idT})}
			</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
		<body>
		
			<?php 
				include 'conexion.php';
				$mysqli=conectar(1);
				session_start();
				if(isset($_SESSION["usuario"])){
			?>		
			<div id="inmobil">
			<?php
				echo "<h1>Bienvenido <b>".ucwords($_SESSION["usuario"])."</b></h1>";
			$mysqli->real_query ('SELECT m.id,
						 m.nombre modulo,
						 m.html enlace,
						 m.estado,
						 p.id_user permiso 
					FROM crr_modules m, 
					     crr_permissions p
				   WHERE p.id_user='.$_SESSION["id"].'
					 AND m.estado=1
					 AND p.id_modulo=m.id');
		
			//$consul=mysql_query($sql) or die (mysql_error()."<br/>".$sql);
					 $resultado = $mysqli->use_result();


					while ($fila = $resultado->fetch_assoc())
					 {
					 	?>
					 	<a onclick='Modules("<?php echo $fila['id']; ?>")' href="#" >
					<?php echo $fila['modulo']; ?>
				</a>
				<?php
					echo "<br/>";
					 	 
					 }
					 $mysqli=conectar(0); 
				?>	
			</div>
			
			<!--INFORMACION DE FOTO, TIPO DE USUARIO Y CIERRE DE SESION-->
			<div id="info">
			<br/>
				<a style='cursor: url(../img/icons/edit.png), auto !important; text-align: center;' 
				href="Functions/ConfigUser.php?opc=4" 
				title="Cambiar Imagen de <?php echo $_SESSION["usuario"]; ?>">
				<img  width=50 height=50 src="img/users/<?php echo $_SESSION["id"]; ?>.jpg"  onerror="src='img/users/default.png'"></a><br>
				<?php
				echo  $_SESSION["tipo"]."<br/>";
					//echo '<div id="Modulos"/>';
			
						}
						else{  ?>
			<script languaje="JavaScript" type="text/javascript">alert("No has iniciado sesion");location.href="index.php";</script>
						<?php
					}
		 ?>
		 <a href='exit.php'>Cerrar Session</a>
		 
		 </div><br/>
		 
		 
		 
		 <!--MUESTREO DE LOS MODULOS Y SUS TABLAS-->
			<div>
			<br/>
			<?php 		
			if(isset($_SESSION["usuario"])){		
				echo '<div id="Modulos"/>';	
			
			 
			}
			else
				 {
						 ?>			
			<script languaje="JavaScript" type="text/javascript">
			alert("No has iniciado sesion");
			location.href="index.php";</script>
						<?php
						}
						?>
		 		 
		 </div><br/>
		
		
		
		</body>
</html>