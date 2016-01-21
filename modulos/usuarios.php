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