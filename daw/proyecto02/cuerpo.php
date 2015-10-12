<?php
require_once "elemento.php";

class cuerpo extends elemento
{
	function __construct()
	{
		$this->setTitulo("Fotografías");	
	}
	
	//Define la tabla
	function setTabla($filas, $columnas)
	{
		$str = "";
		$contador = 1;
		
		$str = "<table align=\"center\">";
		for ($j = 1; $j <= $filas; $j++)
		{
			$str = $str."<tr>";	
			for ($k = 1; $k <= $columnas; $k++)
			{
				$str = $str."<td><img height=\"210\" width=\"280\" src=\"foto".$contador.".JPG\"></img></br>foto".$contador."<td>";
				$contador++;
			}
			$str = $str."</tr>";
		}
		$str = $str."</table>";	
		$this->setContenido($str);	
	}	
}
?>