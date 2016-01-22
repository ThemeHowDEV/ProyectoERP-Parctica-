<?php 
session_start();
include './conexion.php';
$mysqli=conectar(1);

if (isset($_POST['user']) || isset($_POST['pass'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];

$passMD5 = md5($pass);



$consulta = $mysqli->query("
    SELECT us.id,us.usuario,us.nivel,us.correo,r.descripcion
FROM crr_users us,crr_rols r
WHERE us.usuario = '$user' 
AND us.pass = MD5('$pass') 
AND us.nivel = r.id;
    ");
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
            $_SESSION["tipo"]=$fila['descripcion'];
}
else
{
?>
<script langueje="JavaScript" type="text/javascript">
    alert("Usuario o password incorrectos");
    location.href="index.html";
</script>
<?php
}}
else
{
    ?>
    <script langueje="JavaScript" type="text/javascript">
    location.href="index.html";
</script>
    <?php
}