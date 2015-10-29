<html>
	<head>
		<title>:::::INGRESO:::::</title>
		
		<!--IMPORTAMOS FUENTES DE GOOGLE-->
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		
		<!--IMPORTAMOS CSS-->
		<link rel="stylesheet" type="text/css" href="libs/tab/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="libs/tab/shCore.css">
		<link rel="stylesheet" type="text/css" href="libs/tab/demo.css">		
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
		
		<!--IMPORTAMOS JAVASCRIPT-->
		<script type="text/javascript" src="js/enter.js"></script>
		
	</head>
		<body>
			<div class="principal">
			<h1>Bienvenido a Luna de Plut&oacute;n</h1>
			</div>
			<form action='validar.php' method='POST' name="login" onKeyPress="return submitenter(this,event)">			
			<div id="cuadros" align="center" class="fuentes">			
			<div id="fuentes">
				<br/>
				Acceder<br/><br/>
				Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
				<input type='text' name='user' size="40" /><br/><br/>
				Contrase&ntilde;a</td>&nbsp;:&nbsp;
				<input type='password' name ='pass' size="40"/><br/><br/>				
				<a href="#" onclick="document.forms['login'].submit();">Iniciar Session</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
				<a title="Recuperar contraseña" href="Email/RecoveryPass/index.php">Olvide mi contrase&ntilde;a</a>	
			</div>
			<br/>
			</div>			
		</form>
		</body>
</html>