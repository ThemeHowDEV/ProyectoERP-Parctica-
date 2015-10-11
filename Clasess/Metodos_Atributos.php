<?php

class Persona
{
	//Atributos
	public $nombre = array();
	public $apellido = array();

	
	//Metodos
	public function guardar($v_nombre, $v_apellido)
	{
		$this->nombre[] = $v_nombre;
		$this->apellido[]= $v_apellido;
	}

	public function mostrar()
	{
		for ($i=0; $i <count($this->nombre) ; $i++) { 
			//$this->formato($this->nombre[$i], $this->apellido[$i]);
			Persona::formato($this->nombre[$i], $this->apellido[$i]);
		}

	}

     public function formato($v_nombre,$v_apellido)
     {
     	echo "Nombre: ".$v_nombre." | apellido: ".$v_apellido."<br>";

     }


}

     $personaInvoque= new Persona();

     $personaInvoque->guardar("Ivan","Rodriguez");
     $personaInvoque->guardar("Elizabeth","Rodriguez");
     $personaInvoque->mostrar();

?>