<?php
$id=$_POST['id'];
move_uploaded_file($_FILES['foto']['tmp_name'],"../img/users/$id.jpg");
echo '<img src="../img/users/'.$id.'.jpg" />';
?>
<script languaje="JavaScript" type="text/javascript">
    alert("Foto ingresada con exito :D");
    location.href="../principal.php";
</script>