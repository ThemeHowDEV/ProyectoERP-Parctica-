<!DOCTYPE html>
<html>
  <head>
    <?php
      session_start();
    if(isset($_SESSION["usuario"]))
        { ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ERPShoes | Registro</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="#"><b>ERP</b>Shoes</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Nuevo Usuario</p>
        <form action="../../Functions/funciones_generales.php" method="get">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" required name="user" placeholder="usuario">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" required name="mail" placeholder="correo">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" required name="pass" placeholder="Contraseña">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <!--<input type="password" class="form-control" placeholder="Repetir Contraseña">-->
            <select name="tipo">
              <option value="1">Administrador</option>
              <option value="2">Usuario</option>
              <option value="3">Colaborador</option>
              <option value="4">Empleado</option>
              <option value="6">Proveedor</option>
            </select>
            <span class="glyphicon glyphicon-king form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">

            </div><!-- /.col -->
            <div align="center" class="col-xs-4">
              <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Crear</button>-->
            </div><!-- /.col -->
          </div>
        

        <div class="social-auth-links text-center">
          <input type="hidden" value="<?php echo base64_encode(base64_encode(1)); ?>"
           name="YjNCagXX">
          <p>-  <button type="submit" class="btn btn-primary btn-block btn-flat">Crear</button> </p>
          </div>
</form>
        <a href="../index.php" class="text-center">Pagina principal</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
<?php
}
else
{
  header("location: ../index.php");
} 
?>