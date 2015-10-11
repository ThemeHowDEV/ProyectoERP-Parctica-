<?php function tbl_usrer() { 

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
 while ($file=mysql_fetch_object($cons)) {
 	echo "<tr>
						<td>".ucfirst($file->usuario)."</td>
						<td>$file->correo</td>
						<td>$file->descripcion</td>
						<td>**************</td>
						<td><a onclick='Modules(4)' href='#'>Editar todos </a><a title='Editar' href='Functions/users.php?opc=1&id=$file->id' >Editar</a>, Eliminar, bloquear</td>
						
					</tr>";
   	
   }?>
				
					
				</tbody>
			</table>

			<ul class="tabs">
				<li class="active">Crear usuario</li>
				<li>Eliminar usuarios</li>
				<li>Bloquear usuarios</li>
			</ul>





			<div class="tabs">
				<div class="js">
					<p><h3>Crear un nuevo usuario para la plataforma</h3>
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
 while ($file=mysql_fetch_object($cons)) {
 	?> <tr>
						<td><input type='text' <?php if ($file->id==1){ echo "readonly disabled style='color:RED;' "; } ?> value='<?php echo ucfirst($file->usuario); ?>'></td>
						<td><input type='email' <?php if ($file->id==1){ echo "readonly disabled style='color:RED;' "; } ?> value='<?php echo $file->correo; ?>'></td>
						<?php if ($file->id==1) 
						{
						?>
						<td>
						<select disabled>
							<option>Hacer en base de la talbla crr_rols</option>
							<option selected >Super Administrador</option>
							<option>Usuario</option>
							<option>ETC...</option>
						</select>
					</td>
						<?php 
						 } 
						else { ?> 
						<td>
						<select>
							<option>Hacer en base de la talbla crr_rols</option>
							<option>Administrador</option>
							<option>Usuario</option>
							<option>ETC...</option>
						</select>
					    </td> 
						<?php } ?>
						
						<td><input type='password' <?php if ($file->id==1){ echo "readonly disabled style='color:RED;' "; } ?> value=''></td>
						<td><a onclick='Modules(4)' href='#'>Editar todos </a><a title='Editar' href='Functions/users.php?opc=1&id=<?php echo $file->id; ?> ' >Editar</a>, Eliminar, bloquear</td>
						
					</tr>
   	
   <?php }?>
				
					
				</tbody>
			</table>

			<ul class="tabs">
				<li class="active">Crear usuario</li>
				<li>Eliminar usuarios</li>
				<li>Bloquear usuarios</li>
			</ul>





			<div class="tabs">
				<div class="js">
					<p><h3>Crear un nuevo usuario para la plataforma</h3>
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