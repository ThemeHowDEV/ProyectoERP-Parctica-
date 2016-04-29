<?php 
include '../conexion.php';
$mysqli=conectar(1);
   
   if(isset($_POST['id'])){
   	$id=$_POST['id'];
   	//$NameFun=$_POST['name'];


$modulos = $mysqli->query("SELECT * FROM crr_submodulos where id_submodulo=".$id);

$file = $modulos->fetch_assoc();

$modulos->free_result();

   $ModuleName =$file['nombre'];
   $idModulo=$file['id_submodulo'];
   $Estado=$file['estado_id'];
   $Fun=$file['Function'];



   switch ($Fun) {
   	case 'TablaUser':
      ?>
      <div>
 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabla de Usuarios</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Usuario</th>
                        <th>Nivel</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Funciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

            $mysqli->real_query("SELECT u.id,u.usuario,r.descripcion,u.correo,u.estado
FROM crr_users u, crr_rols r
WHERE r.id=u.nivel ORDER BY u.usuario;");


    $ConsUsuario = $mysqli->use_result();

while ($fila = $ConsUsuario->fetch_object())
           {

            if($fila->estado==0)
            {
              $est="Inactivo";
            }
            else
            {
             $est="Activo"; 
            }
            echo "<tr>
                        <td>".$fila->usuario."</td>
                        <td>".$fila->descripcion."</td>
                        <td>".$fila->correo."</td>
                        <td>".$est."</td>
                        <td>Editar, Inactivar, Ver Perfil.. ECT</td>
                      </tr>";
            }

                      ?>
                      
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Usuario</th>
                        <th>Nivel</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Funciones</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="col-md-3 col-sm-6 col-xs-12" onclick="House();">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion Ion-ios-home"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Regresar</span>
                  <!-- <span class="info-box-number">90<small>%</small></span>-->
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
        <div>

      <?php
   		break;
   	default:
   		echo "<h1>El modulo al que intenta ingresar esta fuera de servicio</h1>";
         ?> <div class="col-md-3 col-sm-6 col-xs-12" onclick="House();">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion Ion-ios-home"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Regresar</span>
                  <!-- <span class="info-box-number">90<small>%</small></span>-->
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col --><?php
   		break;
   }
   ?>
   <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
   <?php
 }
   else{
   	header("location: ../principal.php");
   }
?>