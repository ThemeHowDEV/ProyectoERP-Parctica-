<?php 
session_start();
if(isset($_SESSION["usuario"])){
?>
<a href='exit.php'>Salir</a>
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

