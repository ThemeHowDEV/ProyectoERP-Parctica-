<?php function tbl_usrer() { 

 $usuarios="SELECT * FROM crr_users ORDER BY nivel;";
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
						<th>Nombre</th>
						<th>Correo</th>
						<th>Rol</th>
						<th>Contraseña</th>
						
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Rol</th>
						<th>Contraseña</th>
					</tr>
				</tfoot>
								<tbody>
									<?php 
 while ($file=mysql_fetch_object($cons)) {
 	echo "<tr>
						<td>$file->usuario</td>
						<td>$file->correo</td>
						<td>$file->nivel</td>
						<td>**************</td>
						
					</tr>";
   	
   }?>
				
					
				</tbody>
			</table>

			<ul class="tabs">
				<li class="active">Javascript</li>
				<li>HTML</li>
				<li>CSS</li>
				<li>Ajax</li>
				<li>Server-side script</li>
			</ul>

			<div class="tabs">
				<div class="js">
					<p>The Javascript shown below is used to initialise the table shown in this example:</p><code class="multiline language-js">$(document).ready(function() {
	$('#example').DataTable();
} );</code>

					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>

					<ul>
						<li><a href="//code.jquery.com/jquery-1.11.3.min.js">//code.jquery.com/jquery-1.11.3.min.js</a></li>
						<li><a href="media/js/jquery.dataTables.js">media/js/jquery.dataTables.js</a></li>
					</ul>
				</div>

				<div class="table">
					<p>The HTML shown below is the raw HTML table element, before it has been enhanced by DataTables:</p>
				</div>

				<div class="css">
					<div>
						<p>This example uses a little bit of additional CSS beyond what is loaded from the library files (below), in order to correctly display the table. The
						additional CSS used is shown below:</p><code class="multiline language-css"></code>
					</div>

					<p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>

					<ul>
						<li><a href="media/css/jquery.dataTables.css">media/css/jquery.dataTables.css</a></li>
					</ul>
				</div>

				<div class="ajax">
					<p>This table loads data by Ajax. The latest data that has been loaded is shown below. This data will update automatically as any additional data is
					loaded.</p>
				</div>

				<div class="php">
					<p>The script used to perform the server-side processing for this table is shown below. Please note that this is just an example script using PHP. Server-side
					processing scripts can be written in any language, using <a href="//datatables.net/manual/server-side">the protocol described in the DataTables
					documentation</a>.</p>
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
<?php } ?>