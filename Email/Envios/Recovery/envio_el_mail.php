<?php

function envio(){
    require './class.phpmailer.php';
    require './index.php';
    $e_mail=$_POST['email'];
    $nombre=$_POST['nombre'];
    $contenido=$_POST['texto'];
    $empresa=$_POST['empre'];
    
    $fecha=  date("d-m-y");
    $hora=  date("H: i: s");
    
    $mail             = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    $mail->Port       = 465;
	$mail->Host       = "ssl://smtp.gmail.com";
    $mail->Username   = 'potara.cotosta@gmail.com';
    $mail->Password   = "hadess122486";
    $mail -> Body ="El cliente $nombre ha comentado: ".$contenido." Email: ".$e_mail." Tel: $empresa";

    
    //====== DE QUIEN ES ========
    $mail->From       = $e_mail;
    $mail->FromName   = $e_mail;//nombre de quien envia
    //$mail->AddAttachment("images/Ferreteria_corona.png","Ferreteria_Corona.png"); //Archivo adjunto


    //====== PARA QUIEN =========
    $mail->Subject    = "El Cliente ".$nombre." Ha comentdo";
    $mail->AddAddress("mario.rodriguez@uteg.edu.mx","Para Admin");
	if($mail->Send()) {
	} else {
	?>
            <SCRIPT LANGUAGE="javascript">
                alert('No se ha podido enviar su mensaje, favor de intentarlo mas tarde');
			location.href = "index.php";
			</SCRIPT>
            <?php
	}
    }
?>