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
		$str = "<h4 align=\"center\"><a href=\"index.php\">home</a></td>";
		
		for ($j = 1; $j < $numeroElementos; $j++)
		{			
			$str = $str." "."<a href=\"pagina".$j.".php\">"."&nbsp;"."página".$j."</a>"." "."</td>";
		}
		$str = $str."</h4>";
		$this->setContenido($str);
	}
}
?>