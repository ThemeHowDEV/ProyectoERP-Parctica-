<!--<body oncontextmenu="return false" onkeydown="return false"> Evitar el clic derecho-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

    <title>Usuarios y configuracion ::::::::::::::::::::</title>
    <link rel="stylesheet" type="text/css" href="libs/tab/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="libs/tab/shCore.css">
    <link rel="stylesheet" type="text/css" href="libs/tab/demo.css">
    <style type="text/css" class="init">

    </style>
   
   
<script languaje="JavaScript" type="text/javascript">
function Modules(id)
{
    var idT =id;
    $("#Modulos").load('modulos/modulos.php', { id: idT})
}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php 
include 'conexion.php';
conectar(1);
session_start();
if(isset($_SESSION["usuario"])){
?>
<a href='exit.php'>Salir</a><br>
<?php
echo "<h1>Bienvenido ".$_SESSION["usuario"]."</h1>";
$sql='SELECT m.id,m.nombre modulo,m.html enlace,m.estado,p.id_user permiso FROM crr_modules m, CRR_permissions p
WHERE p.id_user='.$_SESSION["id"].'
AND m.estado=1
AND p.id_modulo=m.id';
//echo $sql;
$consul=mysql_query($sql) or die (mysql_error()."<br>".$sql);

while ($result=mysql_fetch_object($consul)) 
{

	?><a onclick='Modules("<?php echo $result->id; ?>")' href="#"><?php echo $result->modulo;?></a>
    <?php
        echo "<br>";
}
?>
<?php 
 if($_SESSION['nivel']==0){
    ?>
    <a style='cursor: url(img/icons/edit.png), auto !important; text-align: center;' 
    href="Functions/ConfigUser.php?opc=4" 
    title="Cambiar Imagen de <?php echo $_SESSION["usuario"]; ?>">
    <img  width=50 height=50 src="img/users/<?php echo $_SESSION["id"]; ?>.jpg"  onerror="src='img/users/default.png'"></a><br>
    <?php
 	//echo "Eres Super Admin";
    echo '<div id="Modulos">
        
    </div>';
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
        echo '<div id="Modulos">
        
    </div>';
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
        echo '<div id="Modulos">
        
    </div>';
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

