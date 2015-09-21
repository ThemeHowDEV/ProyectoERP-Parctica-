<?php 
/*Obtener todas las variables GET*/
 $numero = count($_GET);//Numero de Variebles por GET
$tags = array_keys($_GET);// obtiene los nombres de las varibles
$valores = array_values($_GET);// obtiene los valores de las varibles

$ID= $valores[0];
$key2 =$valores[1];

/*Pruebas con Necode base64 x 5*/
/*
$name="usuarios";
$key2=base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($name)))));
echo $key2."<br>";
echo $Key;
*/
session_start();
if(isset($_SESSION["usuario"])){
	include '../conexion.php';
conectar(1);
	$sqlKey="SELECT COUNT(m.key) Acces,m.estado FROM crr_modules m, CRR_permissions p,CRR_USERS u
WHERE  p.id_modulo=m.id
AND m.estado=1
AND u.`id`=p.`id_user`
AND p.id_user=".$_SESSION['id']."
AND m.`id`=$ID;
";
$Cons=mysql_query($sqlKey) or die (mysql_error());
$file=mysql_fetch_array($Cons,MYSQL_BOTH) or die (mysql_error());
echo $Permiso=$file[0];
echo $estado=$file[1];
if ($estado==1) {
	echo "Habilitado";
if ($Permiso==1) {
	///////////////////////////////////////////////////////////////////////////////////////////////////
	echo "Codigo";
}
else{
	  ?>
<script languaje="JavaScript" type="text/javascript">
    alert("Acceso Denegado");
    location.href="../principal.php";
</script>
            <?php
}
}
else
{
	 ?>
<script languaje="JavaScript" type="text/javascript">
    alert("El modulo al que intenta acceder esta inhabilitado o se necuentra en cosntruccion");
    location.href="../principal.php";
</script>
            <?php
}
?>
<a href='../exit.php'>Salir</a>
<a href='../principal.php'>Regresar</a>
<?php
echo "Bienvenido ".$_SESSION["usuario"];
 if($_SESSION['nivel']==0){
 	echo "Eres Super Admin";
}
elseif($_SESSION['nivel']==1)
{
	echo "eres Admin";
}
elseif($_SESSION['nivel']==2)
{
	echo "eres user";
} else
     {
             ?>
<script languaje="JavaScript" type="text/javascript">
    alert("No has iniciado sesion");
    location.href="../index.php";
</script>
            <?php
            }
            }
            else{  ?>
<script languaje="JavaScript" type="text/javascript">
    alert("No has iniciado sesion");
    location.href="../index.php";
</script>
            <?php
        }
 ?>

