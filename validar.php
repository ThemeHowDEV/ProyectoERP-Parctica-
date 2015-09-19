<?php 
session_start();
include './conexion.php';
conectar(1);

if (isset($_POST['user']) || isset($_POST['pass'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];

$passMD5 = md5($pass);

$sql = "SELECT * FROM CRR_USERS WHERE usuario ='$user' AND pass ='$passMD5';";
$result=mysql_query($sql) or die (mysql_error());
$validado=mysql_affected_rows();
if($validado >= 1)
{
    $file=mysql_fetch_array($result,MYSQL_BOTH);
    $nombre=$file['usuario']; // ó $file['id_user'];
    header("location: principal.php");//traer el nombre
    //header("location: principal.php?nom=$nombre");//traer el nombre
    /*Crearmos las variebles de session*/

            $_SESSION["id"]=$file['id'];
            $_SESSION["usuario"]=$file['usuario'];
            $_SESSION["nivel"]=$file['nivel'];
            $_SESSION["correo"]=$file['correo'];
            //$_SESSION["imagen"]=$file['imagen'];
}
else
{
?>
<script langueje="JavaScript" type="text/javascript">
    alert("Usuario o password incorrectos");
    location.href="index.php";
</script>
<?php
}}
else
{
    ?>
    <script langueje="JavaScript" type="text/javascript">
    location.href="index.php";
</script>
    <?php

}