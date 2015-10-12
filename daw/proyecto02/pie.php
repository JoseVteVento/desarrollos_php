<?php
require_once "elemento.php";

class pie extends elemento
{
	function __construct()
	{
		$this->setTitulo("");		
	}
	
	//Define el contenido del footer
	public function setPie()
	{
		$str = "<hr><center>por Jose Vte Vento</center></hr>";
		$this->setContenido($str);		
	}	
}
?>