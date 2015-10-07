<?php

function envio($fecha,$id,$correo,$user){



    $e_mail='valleriusSoftware.com';
    $nombre='Ivan';
    $contenido='<a href="http://localhost/ProyectoERP-Parctica-/Email/RecoveryPass/recovery.php?Vm14YVUxUXhUWGxVYTJoVlYwaENWMWx0ZUhkalZsWnhVMjA1YWsxWGREVmFSVll3WVZaS2RHVkVRbGRpUmtZelZVWkZPVkJSUFQwPQ='.$fecha.'&VZaS2RHVkVRbGRpUmtZelZVWkZPVkJSUFQwPQ='.$id.'" >Aqui</a>';
    $empresa='UTEG';
    
    $fecha=  date("d-m-y");
    $hora=  date("H: i: s");
    
    $mail             = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    $mail->Port       = 465;
	$mail->Host       = "ssl://smtp.gmail.com";
    $mail->Username   = 'potara.cotosta@gmail.com';
    $mail->Password   = "hadess122486";
    $mail -> Body ="Hola! ".ucfirst($user)."<br>Para recuperar tu contraseña ingresa <b>".$contenido."<b/> <br>Te recordamos que este Link tiene 15 minutos de duracion para tu seguridad";
    $mail->IsHTML(TRUE);

    
    //====== DE QUIEN ES ========
    $mail->From       = $e_mail;
    $mail->FromName   = $e_mail;//nombre de quien envia
    //$mail->AddAttachment("images/Ferreteria_corona.png","Ferreteria_Corona.png"); //Archivo adjunto


    //====== PARA QUIEN =========
    $mail->Subject    = "Recuperacion de Contraseña";
    $mail->AddAddress($correo,"Para usuario");
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