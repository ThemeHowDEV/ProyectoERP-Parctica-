<?php 
include '../conexion.php';
include 'usuarios.php';
conectar(1);
   
   if(isset($_POST['id'])){
   	$id=$_POST['id'];
   $modulos="SELECT * FROM crr_modules where id=".$id;
   $cons=mysql_query($modulos) or die (mysql_error()."<br>".$modulos);
   $file=mysql_fetch_array($cons) or die (mysql_error()."<br>".$file);

   $ModuleName =$file['nombre'];


   switch ($ModuleName) {
   	case 'usuarios':
   		tbl_usrer();//Invoca la funcion de cargar tabla usuarios
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