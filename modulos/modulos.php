
    <script languaje="JavaScript" type="text/javascript">
    function Funciones(id,name){
      var idT =id;
      //var NameFun = name;
      //alert(NameFun);
      //$("#AreaTrabajo2").load('../Functions/funciones.php', { id: idT , name: NameFun})
      $("#AreaTrabajo2").load('../Functions/funciones.php', { id: idT})

    }
      </script>



<?php 
include '../conexion.php';
include 'submodulos.php';
$mysqli=conectar(1);
   
   if(isset($_POST['id'])){
   	$id=$_POST['id'];


$modulos = $mysqli->query("SELECT * FROM crr_modules where id=".$id);

$file = $modulos->fetch_assoc();

$modulos->free_result();

   $ModuleName =$file['nombre'];
   $idModulo=$file['id'];
   $Estado=$file['estado_id'];

   switch ($Estado) {
   	case '1':
   		tbl_Submodulos($mysqli,$idModulo);//Invoca la funcion de submodulos
      ?>
        <div id="AreaTrabajo2">

        </div>

      <?php
   		break;
   	case '3':
   		echo "<h1>El modulo al que intenta ingresar esta en construccion</h1>";
         ?>  <button onclick="House();" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-sign-out"></i>Regresar</button> 
         <!--<div class="col-md-3 col-sm-6 col-xs-12" onclick="House();">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion Ion-ios-home"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Regresar</span>
                  
                </div>
              </div>
            </div>-->
            <?php
   		break;
            case '2':
               echo "<h1>El modulo al que intenta ingresar no ha sido adquirido</h1>";
               ?>  <button onclick="House();" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-sign-out"></i>Regresar</button> 
               <!--<div class="col-md-3 col-sm-6 col-xs-12" onclick="House();">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion Ion-ios-home"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Regresar</span>
                  
                </div>
              </div>
            </div>-->
            <?php
               break;
   	default:
   		echo "<h1>El modulo al que intenta ingresar esta fuera de servicio</h1>";
         ?>  <button onclick="House();" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-sign-out"></i>Regresar</button> 
         <!--<div class="col-md-3 col-sm-6 col-xs-12" onclick="House();">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion Ion-ios-home"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Regresar</span>
                  
                </div>
              </div>
            </div>-->
            <?php
   		break;
   }}
   else{
   	header("location: ../principal.php");
   }
?>