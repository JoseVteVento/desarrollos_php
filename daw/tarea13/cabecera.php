<?php
require_once "elemento.php";

class cabecera extends elemento{
	
	function __construct()
	{
		//en el caso de la cabecera, no tendrá titulo
		$this->setTitulo("");
	}
	
	//Define el menu de la cabecera
	public function setMenu($numeroElementos)
	{
		$str = "";
		for ($j = 0; $j < $numeroElementos; $j++)
		{
			$str = $str."&nbsp;"."Enlace".$j;
		}
		$this->setContenido($str);
	}
}
?>