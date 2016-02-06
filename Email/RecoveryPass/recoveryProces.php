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
     function redireccionar(){
  location.href="../../index.html";
} 
setTimeout ("redireccionar()", 15000);
</script>
<?php 
include '../../conexion.php';
$mysqli=conectar(1);

$NewPass=$_POST['pass'];
$id = $_POST['id'];
$PassEncript=md5($NewPass);

try{

if (!$mysqli->query("UPDATE crr_users SET pass='$PassEncript' WHERE id=$id;"))
 { 
    throw new Exception('error!'); 
 }

}catch( Exception $e ){
    echo "<br>error type -> ".$e;
  $mysqli->rollback();
}
printf("Affected rows (UPDATE): %d\n", $mysqli->affected_rows);
$mysqli->commit();
$mysqli=conectar(0);
 ?>
 <div class="exito mensajes">La contraseña se ha cambiado con exito </div>