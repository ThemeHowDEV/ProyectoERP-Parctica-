<?php function tbl_usrer($mysqli) { 

	?>



 <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" language="javascript" src="libs/tab/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="libs/tab/shCore.js"></script>
    <script type="text/javascript" language="javascript" src="libs/tab/demo.js"></script>
 <script type="text/javascript" language="javascript" class="init">
    $(document).ready(function() {
    $('#example').DataTable();
} );


    </script>
</head>
<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 6</td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.2</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.4</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td>125.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td>312.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td>419.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td>522.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td>420</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td>420.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td>413</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td>8.5</td>
                        <td>C/A<sup>1</sup></td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td>3.1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td>3.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td>3.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td>1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td>1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            










<body class="dt-example">
	<div class="container">
		<section>
			<h1>Usuarios <span>configuracion</span></h1>

			<div class="info">
				<p>Tu rol de usuario es</p>

				<p>Segun con el rol que ingrese, son los permisos hacia los usuarios</p>
				<code>Permisos: Crear,Editar,Eliminar,bloquear,cambiar contraseña</code>.
				<P><P>
			</div>

			<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Usuario</th>
						<th>Correo</th>
						<th>Rol</th>
						<th>Contraseña</th>
						<th><img title="Herramientas" width='20%' src="img/icons/tools.png"></th>
						
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Usuario</th>
						<th>Correo</th>
						<th>Rol</th>
						<th>Contraseña</th>
						<th>Herramientas</th>
					</tr>
				</tfoot>
								<tbody>

									<?php 
$mysqli->real_query("SELECT u.id,u.usuario,u.nivel,r.descripcion,u.correo 
 FROM crr_users u ,crr_rols r  
 WHERE r.id=u.nivel ORDER BY nivel");
   

    $ConsUsuario = $mysqli->use_result();

while ($fila = $ConsUsuario->fetch_object())
					 {
                       echo "<tr>
						<td>".ucfirst($fila->usuario)."</td>
						<td>".$fila->correo."</td>
						<td>".$fila->descripcion."</td>
						<td>**************</td>
						<td><a title='Editar' href='Functions/users.php?opc=1&id=".$fila->id.
						" '>Editar</a>, Eliminar, bloquear</td>
						
					</tr>";
					 }
					 ?>
				
					
				</tbody>
			</table>
			

			<ul class="tabs">
				<li class="active">Mas funciones</li>
				<li>Eliminar usuarios</li>
				<li>Bloquear usuarios</li>
			</ul>





			<div class="tabs">
				<div class="js">
					<a title="Nuevo usuario" href='#' >Nuevo Usuario</a><br>
					<a title="Editar todos los usuarios" onclick='Modules(4)' href='#TablaUsuarios'>Editar todos los usuarios</a><br>
					<a href="#" title="Eliminar Varios Usuarios" >Eliminar Usuarios</a><br>
					<a href="#" title="Bloquear Varios Usuarios" >Bloquear Usuarios</a>
				</div>





				<div class="tables">
					<p>Crear un nuevo rol de usuario para administrar consultar o administrar la plataforma</p>
				</div>






				<div class="css">
d
				</div>

				
			</div>
		</section>
	</div>

	<section>
		<div class="footer">
			<div class="gradient"></div>
	</section>
</body>
</html>
<?php } 


function tbl_usrerEdit() 
{ 


			function Roles()
		{
			$sqlRol="SELECT * FROM crr_rols WHERE id NOT IN(0) ORDER BY descripcion;";
			$cons=mysql_query($sqlRol) or die (mysql_error());

			while ($file=mysql_fetch_object($cons)) {
				echo "<option value='".$file->id."'>".$file->descripcion."</option>";
			}

		} 

 $usuarios="SELECT u.id,u.usuario,u.nivel,r.descripcion,u.correo FROM crr_users u ,crr_rols r  WHERE r.id=u.nivel ORDER BY nivel;";
   $cons=mysql_query($usuarios) or die (mysql_error()."<br>".$usuarios);
	?>



 <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" language="javascript" src="libs/tab/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="libs/tab/shCore.js"></script>
    <script type="text/javascript" language="javascript" src="libs/tab/demo.js"></script>
 <script type="text/javascript" language="javascript" class="init">
    $(document).ready(function() {
    $('#example').DataTable();
} );


    </script>
</head>

<body class="dt-example">
	<div class="container">
		<section>
			<h1>Usuarios <span>configuracion</span></h1>

			<div id="Table" class="info">
				<p>Tu rol de usuario es</p>

				<p>Segun con el rol que ingrese, son los permisos hacia los usuarios</p>
				<code>Permisos: Crear,Editar,Eliminar,bloquear,cambiar contraseña</code>.
				<P><P>
			</div>
			<div id="TablaUsuarios"></div>
			<form action="Functions/users.php" method="GET">
				<input type="hidden" name="opc" value="2" >
			<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Usuario</th>
						<th>Correo</th>
						<th>Rol</th>
						<th>Contraseña</th>
						
						
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Usuario</th>
						<th>Correo</th>
						<th>Rol</th>
						<th>Contraseña</th>
						
					</tr>
				</tfoot>
								<tbody>
									<?php 
 while ($file=mysql_fetch_object($cons)) {
 	?> <tr>
						<td><input required type='hidden' <?php if ($file->id==1){echo ""; } else {echo 'name ="id[]"'; } ?> value="<?php echo $file->id ?>"/>
							<input required type='text' name="NombreUser[]"<?php if ($file->id==1){ echo "title='No se puede Editar el Super Administrador' readonly disabled style='color:RED;' "; } ?> value='<?php echo ucfirst($file->usuario); ?>'></td>
						<td><input required type='email' name="Email[]" <?php if ($file->id==1){ echo "readonly title='No se puede Editar el Super Administrador' disabled style='color:RED;' "; } ?> value='<?php echo $file->correo; ?>'></td>
						<?php if ($file->id==1) 
						{
						?>
						<td>
						<select title='No se puede Editar el Super Administrador' disabled>
							<option selected >Super Administrador</option>
							<option>Usuario</option>
							<option>ETC...</option>
						</select>
					</td>
						<?php 
						 } 
						else { ?> 
						<td>
							
						<select required name ='Roles[]'>
							<?php	Roles(); ?>
						</select>
					    </td> 
						<?php } ?>
						
						<td><input  type='password' 
							<?php if ($file->id==1)
							{ echo "readonly title='No se puede Editar el Super Administrador' disabled style='color:RED;' title ='No se puede cambiar la contraseña para el Super Administrador' placeholder='No se puede cambiar la contraseña'"; }
							else {
								echo 'name="password[]" title ="Ingrese la nueva Contraseña para '.strtoupper ($file->usuario).'" required placeholder="Ingrese la nueva Contraseña"';
							}
							?> value=''></td>
						
						
					</tr>
   	
   <?php }?>
				
					
				</tbody>
			</table>
			<input type="Submit" name="Editar usuarios">
</form>

			<ul class="tabs">

				<li class="active">Mas Funeciones</li>
				<li>Eliminar usuarios</li>
				<li>Bloquear usuarios</li>
			</ul>





			<div class="tabs">
				<div class="js">
					<a onclick='Modules(1)' href='#'>Cancelar </a>
				</div>





				<div class="tables">
					<p>Crear un nuevo rol de usuario para administrar consultar o administrar la plataforma</p>
				</div>






				<div class="css">
d
				</div>

				
			</div>
		</section>
	</div>

	<section>
		<div class="footer">
			<div class="gradient"></div>
	</section>
</body>
</html>
<?php

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