<?php 
include '../../conexion.php';
date_default_timezone_set('America/Mexico_City');
$fecha = $_GET['Vm14YVUxUXhUWGxVYTJoVlYwaENWMWx0ZUhkalZsWnhVMjA1YWsxWGREVmFSVll3WVZaS2RHVkVRbGRpUmtZelZVWkZPVkJSUFQwPQ'];
$id=$_GET['VZaS2RHVkVRbGRpUmtZelZVWkZPVkJSUFQwPQ'];

$fecha=base64_decode(base64_decode($fecha));
/*echo "Enviada ".$fecha;*/
/*echo "<br>";*/
/*echo "Actual ".*/$fechaActual=date("Y-m-d H:i:s");
/*echo "<br>";*/
if($fechaActual > $fecha){
	?>
	<img width=80% height=80% src="../../img/message/error-404.png">
	<?php
        //echo "La fecha entrada ya ha pasado";
}else{
	conectar(1);
	$id=base64_decode(base64_decode(base64_decode($id)));

	$sql="SELECT usuario FROM crr_users WHERE id = $id;";
	$cons=mysql_query($sql) or die (mysql_error());
	$file=mysql_fetch_array($cons) or die (mysql_error());

	echo "Hola <b>".$file[0]."</b> Ingresa tu nueva contraseña";
	?>
	<form  method="POST"  name='form' onSubmit="obtenerDatos(this)">
		<br><input type="password"  name="pass" placeholder="Nueva contraseña" required >
		<br><input type="password" name ="passvery"placeholder="Repetir la nueva contraseña" required >
		<br><br><input type="Submit" value="Cambiar">

	</form>

	<script type="text/javascript">
	function obtenerDatos(formulario)
{
	var pass = formulario.pass.value
	var passverification = formulario.passvery.value

	if (pass!=passverification) {
		alert("Las contraseñas no coinciden");
	}//END IF
	else{
	alert(pass+" "+passverification);
}//End ELSE
}
	</script>
	<?php

        //echo "Aun falta algun tiempo";
}
 ?>