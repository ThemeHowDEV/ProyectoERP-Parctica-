<html>
<?php require '../Envios/Recovery/envio_el_mail.php'; 
      require '../Envios/Recovery/class.phpmailer.php';
      date_default_timezone_set('America/Mexico_City');
?>
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
.exito {
    color: #4F8A10;
    background-color: #DFF2BF;
    background-image:url('exito.png');
}
	</style>
	<script type="text/javascript" src="jquery-1.2.6.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setTimeout(function(){ $(".error").fadeOut(800).fadeIn(800).fadeOut(500).fadeIn(500).fadeOut(300);}, 3000);  
        });

          $(document).ready(function(){
            setTimeout(function(){ $(".mensajes").fadeOut(800).fadeIn(800).fadeOut(500).fadeIn(500).fadeOut(300);}, 3000);  
        });
</script>
<h1>Recuperar Contraseña</h1>

<form  action="" method="POST">
<input type="text" name="dato" required placeholder="Ingrese usuario o correo electronico" size="50"><br><br>
<input type="submit" value="Enviar">

<br><a href="../../index.html" >Cancelar</a>
</form>

<?php 
if(isset($_POST['dato']))
{
$dato = $_POST['dato'];

include '../../conexion.php';
$mysqli=conectar(1);


$consulta = $mysqli->query("SELECT COUNT(id) id,id id_user, usuario,correo FROM crr_users WHERE usuario ='$dato' OR correo ='$dato';");
//$sql="SELECT COUNT(id) id,id id_user, usuario,correo FROM crr_users WHERE usuario ='$dato' OR correo ='$dato';";
//$cons=mysql_query($sql) or die (mysql_error());

while ($fila = $consulta->fetch_assoc()){

//while ($file=mysql_fetch_object($cons)) {

if($fila['id']>=1)
{
    
    $fecha=base64_encode(base64_encode(date("Y-m-d H:i:s",(strtotime ("+15 minutes")))));//Sumar minutos
    $id=base64_encode(base64_encode(base64_encode($fila['id_user'])));
    $correo=$fila['correo'];
    $user = $fila['usuario'];
   envio($fecha,$id,$correo,$user);
    //echo  "envio(".$fecha.",".base64_decode(base64_decode(base64_decode($id))).",".$correo.",".$user.");";
    ?><div class="exito mensajes">Se ha enviado un correo de recuperacion a <?php echo $fila['correo']; ?></div><?php
}
else{
	echo '<div class="error">No se encontraron datos</div> '; }

}}
   else{ }
?>
</body>
</html>