<!DOCTYPE html>
<html>
	<head>
		<title>Cambiar Imagen</title>
		
		<!--IMPORTAMOS FUENTES DE GOOGLE-->
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
			
		<!--IMPORTAMOS CSS-->
		<link rel="stylesheet" type="text/css" href="../libs/tab/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="../libs/tab/shCore.css">
		<link rel="stylesheet" type="text/css" href="../libs/tab/demo.css">		
		<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/text.css" media="screen" />
	   	    
		<!--IMPORTAMOS JAVASCRIPT-->
		<script type="text/javascript" src="../js/enter.js"></script>	
			
	</head>
		<body>
			<?php 
			session_start();
			include '../conexion.php';
			conectar(1);
			if(isset($_SESSION["usuario"])){
			?>
			
			<div id="ediciones" align="center">
			<br/><br/><br/>
			<?php
			 if($_SESSION['nivel']==0){
				$opc=$_GET['opc'];
				Users($opc);
				
			}
			elseif($_SESSION['nivel']==1)
			{
				 $opc=$_GET['opc'];
				Users($opc);
				echo "eres Admin";
			}
			elseif($_SESSION['nivel']==2)
			{
				 $opc=$_GET['opc'];
				Users($opc);
				echo "eres user";
			} else
				 {
						 ?>
			<script languaje="JavaScript" type="text/javascript">alert("No has iniciado sesion");location.href="index.php";</script>
						<?php
						}
						}
						else{  ?>
			<script languaje="JavaScript" type="text/javascript">alert("No has iniciado sesion");location.href="index.php";</script>
						<?php
					}
					function Users($opc)
					{
						//echo $opc;
						switch ($opc) {
							case 1:
								echo "1";
								break;
							case 4:
							//Subir Imagen
								?>
				 <a style='cursor: url(img/icons/edit.png), auto !important; text-align: center;' 
				title="Imagen Actual <?php echo $_SESSION["usuario"]; ?>">
				<img width=200 height=200 src="../img/users/<?php echo $_SESSION["id"]; ?>.jpg"  onerror="src='../img/users/default.png'"></a>
				<h1>Cambiar imagen</h1>
				<h2>Pendiente; extensiones de imagen, tamaño de imagen,eliminar imagen al eliminar usuario</h2><br/>
				<form action="proceso_subir_foto.php" method="post" name="edicion_perfil" enctype="multipart/form-data" onKeyPress="return submitenter(this,event)"> 
					<input type="hidden" name="id" value="<?php echo  $_SESSION["id"]; ?>">
					<input type="file" name="foto"><br/><br/>
					<a href="#" class="enlaces" onclick="document.forms['edicion_perfil'].submit();">Subir</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
					<a href='../principal.php' class="enlaces">Cancelar</a><br/><br/>
				<?php
								break;
							default:
								header("principal.php");
								break;
						}
					}
			 ?>			
			 
			 </div>			 

	</body>
</html>