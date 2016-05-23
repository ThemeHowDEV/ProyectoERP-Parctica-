<?php 
session_start();
 include '../conexion.php';
 $mysqli=conectar(1);

if(isset($_SESSION["usuario"]))
{

$opc=$_GET['YjNCagXX'];

$opc=base64_decode(base64_decode($opc));
//echo $opc." ".$id;//Cuado no es array
function historial($mysqli,$id_incidencia,$descripcion)
{

try{

 if (!$mysqli->query("INSERT INTO crr_historial 
 	(id,tipo_incidencia,usuario,descripcion) 
 	VALUES (null,$id_incidencia,".$_SESSION['id'].",'$descripcion')"))
 { 
    throw new Exception('error!'); 
 }

}catch( Exception $e ){
	echo "<br>error type -> ".$e;
  $mysqli->rollback();
}
$mysqli->commit();

}

switch ($opc) 
{
	case 1:
$user=$_GET['user'];
$mail=$_GET['mail'];
$pass=$_GET['pass'];
$tipo=$_GET['tipo'];


try{

  if (!$mysqli->query("INSERT INTO crr_users 
  	(id,usuario,pass,nivel,correo) VALUES (null,'$user',md5('$pass'),$tipo,'$mail')"))
 { 
 //echo 	$sql="INSERT INTO crr_users 
  //	(id,usuario,pass,nivel,correo) VALUES (null,'$user',md5('$pass'),$tipo,'$mail')";

    throw new Exception('error!'); 
 }

}catch( Exception $e ){
	echo "<br>error type -> ".$e;
  $mysqli->rollback();
}
$mysqli->commit();

		historial($mysqli,1,'INSERTO UN NUEVO USUARIO '.$user);

		header("location: ../principal/index.php");
		break;
		case 2:
		echo "Eitar";
		$id=$_GET['VmpGYVlXRXhWbk5SYkdScFVtMVNhRlZ0ZEhkVmJGcFhWVmhrVUZWVU1EbFdNVnBoWVRGV2MxRnNaR2xTYlZKb1ZXMTBkMVZzV2xkVldHUlFWVlF3T1E9PVZqRmFZV0V4Vm5OUmJHUnBVbTFTYUZWdGRIZFZiRnBYVlZoa1VGVlVNRGxXTVZwaFlURldjMUZzWkdsU2JWSm9WVzEwZDFWc1dsZFZXR1JRVlZRd09RPT'];
		echo $id;
		?>
		
		<?php

		break;
	default:
		echo "NO SE PROCESO NINGUNA ACCION";
		break;
}


}
            else{  ?>
<script languaje="JavaScript" type="text/javascript">
    alert("No has iniciado sesion");
    location.href="index.php";
</script>
            <?php
        }
 ?>


