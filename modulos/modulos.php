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
            case 'Configuraciones':
               ?>
                  <!--IMPORTAMOS JAVASCRIPT-->
                  <script languaje="JavaScript" type="text/javascript">
                  function Temps()
                  {
                  $("#ContenidosConf").load('modulos/config/temporadas.php');
                  }
                  </script>

               <div align="center">
                  <h1>Configuraciones Generales</h1>
               <!--<img src="img/icons/Config.png">
               </div>-->
               <div align="center">
                  <a onclick='Temps()' title="Temporadas" href="#"><img width="5%" height="5%" src="img/icons/temp.png"></a>
               </div>
               <br>
               <div align="center" id="ContenidosConf">
               </div>
               <?php
               break;
   	default:
   		echo "<h1>El modulo al que intenta ingresar esta fuera de servicio</h1>";
   		break;
   }}
   else{
   	header("location: ../principal.php");
   }
?>