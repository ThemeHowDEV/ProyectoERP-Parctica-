<?php 
session_start();
include './conexion.php';
$mysqli=conectar(1);

if (isset($_POST['user']) || isset($_POST['pass'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];

$passMD5 = md5($pass);



$consulta = $mysqli->query("SELECT * FROM crr_users WHERE usuario ='$user' AND pass ='$passMD5';");
$fila = $consulta->fetch_assoc();


$validado=$mysqli->affected_rows;//mysql_affected_rows();

if($validado >= 1)
{
    
    $nombre=$fila['usuario'];
    header("location: principal.php");//traer el nombre
    //header("location: principal.php?nom=$nombre");//traer el nombre
    /*Crearmos las variebles de session*/

            $_SESSION["id"]=$fila['id'];
            $_SESSION["usuario"]=$fila['usuario'];
            $_SESSION["nivel"]=$fila['nivel'];
            $_SESSION["correo"]=$fila['correo'];
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