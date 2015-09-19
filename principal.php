<?php 
include 'conexion.php';
conectar(1);
session_start();
if(isset($_SESSION["usuario"])){
?>
<a href='exit.php'>Salir</a><br>
<?php
echo "<h1>Bienvenido ".$_SESSION["usuario"]."</h1>";
$sql='SELECT m.nombre modulo,m.html enlace,m.estado,p.id_user permiso FROM crr_modules m, CRR_permissions p
WHERE p.id_user='.$_SESSION["id"].'
AND m.estado=1
AND p.id_modulo=m.id';
//echo $sql;
$consul=mysql_query($sql) or die (mysql_error()."<br>".$sql);

while ($result=mysql_fetch_object($consul)) 
{
    echo $result->enlace."<br>";
}

 if($_SESSION['nivel']==0){
    ?>
    <a style='cursor: url(img/icons/edit.png), auto !important; text-align: center;' 
    href="Functions/ConfigUser.php?opc=4" 
    title="Cambiar Imagen de <?php echo $_SESSION["usuario"]; ?>">
    <img  width=50 height=50 src="img/users/<?php echo $_SESSION["id"]; ?>.jpg"  onerror="src='img/users/default.png'"></a><br>
    <?php
 	echo "Eres Super Admin";
}
elseif($_SESSION['nivel']==1)
{
     ?>
    <a style='cursor: url(img/icons/edit.png), auto !important; text-align: center;' 
    href="Functions/ConfigUser.php?opc=4" 
    title="Cambiar Imagen de <?php echo $_SESSION["usuario"]; ?>">
    <img  width=50 height=50 src="img/users/<?php echo $_SESSION["id"]; ?>.jpg"  onerror="src='img/users/default.png'"></a><br>
    <?php
	echo "eres Admin";
}
elseif($_SESSION['nivel']==2)
{
     ?>
    <a style='cursor: url(img/icons/edit.png), auto !important; text-align: center;' 
    href="Functions/ConfigUser.php?opc=4" 
    title="Cambiar Imagen de <?php echo $_SESSION["usuario"]; ?>">
    <img  width=50 height=50 src="img/users/<?php echo $_SESSION["id"]; ?>.jpg"  onerror="src='img/users/default.png'"></a><br>
    <?php
	echo "eres user";
} else
     {
             ?>
<script languaje="JavaScript" type="text/javascript">
    alert("No has iniciado sesion");
    location.href="index.php";
</script>
            <?php
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

