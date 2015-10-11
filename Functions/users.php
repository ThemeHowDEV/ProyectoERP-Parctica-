<?php 
session_start();
if(isset($_SESSION["usuario"]))
{

$opc=$_GET['opc'];
$id=$_GET['id'];

echo $opc." ".$id;

}
            else{  ?>
<script languaje="JavaScript" type="text/javascript">
    alert("No has iniciado sesion");
    location.href="index.php";
</script>
            <?php
        }
 ?>

