<html>
	<head>
		<title>:::::Ingreso:::::</title>
		
		<!--IMPORTAMOS FUENTES DE GOOGLE-->
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		
		<!--IMPORTAMOS CSS-->
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
	</head>
		<body>
			<form action='validar.php' method='POST' name="login">
			
			<div id="cuadros" align="center" class="fuentes">
			<br/>			
			<div id="fuentes">
				Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
				<input type='text' name='user' size="40" /><br/><br/>
				Contrase&ntilde;a</td>&nbsp;:&nbsp;
				<input type='password' name ='pass' size="40"/><br/><br/>				
				<a href="#" onclick="document.forms['login'].submit();">Iniciar Session</a>&nbsp;&nbsp;-&nbsp;&nbsp;
				<a title="Recuperar contraseña" href="Email/RecoveryPass/index.php">Olvide mi contrase&ntilde;a</a>	
			</div>
			<br/><br/>
			</div>			
		</form>
		</body>
</html>