<html>
<head><title>Recuperar contraseña</title></head>
<body>
	<style type="text/css">
	.info, .exito, .alerta, .error {
    font-family:Arial, Helvetica, sans-serif; 
    font-size:13px;
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
    position:relative;
}
.error {
    color: #D8000C;
    background-color: #FFBABA;
    background-image: url('error.png');
}
	</style>
	<script type="text/javascript" src="jquery-1.2.6.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setTimeout(function(){ $(".error").fadeOut(800).fadeIn(800).fadeOut(500).fadeIn(500).fadeOut(300);}, 3000);  
        });
</script>
<h1>Recuperar Contraseña</h1>

<form  action="" method="POST">
<input type="text" name="dato" required placeholder="Ingrese usuario o correo electronico" size="50"><br><br>
<input type="submit" value="Enviar">
</form>

<?php 
if(isset($_POST['dato']))
{
$dato = $_POST['dato'];

include '../../conexion.php';
conectar(1);

$sql="SELECT COUNT(id) id,usuario,correo FROM crr_users WHERE usuario ='$dato' OR correo ='$dato';";

$cons=mysql_query($sql) or die (mysql_error());

while ($file=mysql_fetch_object($cons)) {


if($file->id>=1)
{
echo $file->correo;
}
else{
	echo '<div class="error">No se encontraron datos</div> '; }

}}
   else{ }
?>
</body>
</html>