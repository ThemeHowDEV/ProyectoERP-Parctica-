<?php 
session_start();
include '../conexion.php';
conectar(1);
if(isset($_SESSION["usuario"])){
?>
<a href='../principal.php'>Cancelar</a><br>
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
    <h2>Pendiente; extensiones de imagen, tamaño de imagen,eliminar imagen al eliminar usuario</h2>
    <form action="proceso_subir_foto.php" method="post" enctype="multipart/form-data"> 
        <input type="hidden" name="id" value="<?php echo  $_SESSION["id"]; ?>">
        <input type="file" name="foto"><br>
        
        <input type="submit" value="subir">
    <?php
                    break;
                default:
                    header("principal.php");
                    break;
            }
        }
 ?>

