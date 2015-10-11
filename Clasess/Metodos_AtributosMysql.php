<?php
include '../conexion.php';
conectar(1);

class Usuario
{
	//Atributos
	public $sql="SELECT * FROM crr_users;";

	public function mostrar($id)
	{
		$sql=$this->sql;
		$cons=mysql_query($sql);
		$file=mysql_fetch_array($cons);

		echo $file[1];

	}


}



?>