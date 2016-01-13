<?php
function conectar($con)
{
    if ($con == 1) {
        # Conectar...
        #$mysqli = new mysqli('localhost','root','','ERPSHOES');//Local 
        $mysqli = new mysqli("mysql.hostinger.es", "u136363300_erpsh", "vmSwDql3kw", "u136363300_erpsh");//HOSTING
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

    }//END 1
    if ($con == 0) {

        # Desconectar...
       # $mysqli = new mysqli('localhost','root','','ERPSHOES');//Local 
        $mysqli = new mysqli("mysql.hostinger.es", "u136363300_erpsh", "vmSwDql3kw", "u136363300_erpsh");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        $mysqli->close();
    }

}

return $mysqli;
}
?>
