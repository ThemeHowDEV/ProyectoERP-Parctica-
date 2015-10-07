<head><title>Cambio de Contraseña</title></head>
<script type="text/javascript" src="jsRelocate.js"></script>
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

	$sql="SELECT usuario,id FROM crr_users WHERE id = $id;";
	$cons=mysql_query($sql) or die (mysql_error());
	$file=mysql_fetch_array($cons) or die (mysql_error());

	echo "Hola <b>".$file[0]."</b> Ingresa tu nueva contraseña";
	$id=$file[1];
	?>
	<form  method="POST"  name='form' action="recoveryProces.php" onSubmit="obtenerDatos(this)">
		<br><input type="password"  name="pass" placeholder="Nueva contraseña" required >
		<br><input type="password" name ="passvery"placeholder="Repetir la nueva contraseña" required >
		<input type='hidden' name ="id" value="<?php echo $id; ?>">
		<br><br><input type="Submit" value="Cambiar">
		<b>Agregar validador de formulario & cantidad de caracteres</b>

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

    relocate('file.php',{'var1':'hola','var2':'mundo'});
redirect();
	alert(pass+" "+passverification);
}//End ELSE
}
	</script>
	<?php

        //echo "Aun falta algun tiempo";
}


 ?>