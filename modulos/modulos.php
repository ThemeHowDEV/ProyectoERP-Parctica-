<?php 
include '../conexion.php';
include 'usuarios.php';
$mysqli=conectar(1);
   
   if(isset($_POST['id'])){
   	$id=$_POST['id'];


$modulos = $mysqli->query("SELECT * FROM crr_modules where id=".$id);

$file = $modulos->fetch_assoc();

$modulos->free_result();

   $ModuleName =$file['nombre'];

   switch ($ModuleName) {
   	case 'usuarios':
   		tbl_usrer($mysqli);//Invoca la funcion de cargar tabla usuarios
   		break;
   	case 'proveedores':
   		echo "Modulo de proveedores";
   		break;
         case 'UsuariosEdit':
           tbl_usrerEdit();
            break;
   	default:
   		echo "<h1>El modulo al que intenta ingresar esta fuera de servicio</h1>";
   		break;
   }}
   else{
   	header("location: ../principal.php");
   }
?>