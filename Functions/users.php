<?php 
session_start();
if(isset($_SESSION["usuario"]))
{

$opc=$_GET['opc'];
$id=$_GET['id'];

//echo $opc." ".$id;//Cuado no es array


switch ($opc) {
	case 1:
		echo "Editar un solo usuario";
		break;
		case 2:
			$NombreUser=$_GET['NombreUser'];
			$Email=$_GET['Email'];
			$Roles=$_GET['Roles'];
			$password=$_GET['password'];

			//var_dump($NombreUser);
			for ($i=0; $i <count($id) ; $i++) { 
				echo $id[$i]." ".$NombreUser[$i]." ".$Email[$i]." ".$Roles[$i].$password[$i]."<br>";
			}
			break;
	default:
		
		break;
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

