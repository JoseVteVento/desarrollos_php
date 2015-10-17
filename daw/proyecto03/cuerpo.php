<?php
require_once "elemento.php";

class cuerpo extends elemento
{
	function __construct()
	{
	}
	
	//Define la tabla
	function setTablaFotos($tit, $filas, $columnas)
	{
		$str = "";
		$contador = 1;
		$str = $str."<section class=\"cuerpo\"><div><h3>".$tit."</h3></div>";
		$str = $str."<div><table align=\"center\">";
		for ($j = 1; $j <= $filas; $j++)
		{
			$str = $str."<tr>";	
			for ($k = 1; $k <= $columnas; $k++)
			{
				$str = $str."<td><img height=\"210\" width=\"280\" src=\"images/playa".$contador.".jpg\"></img></br>foto".                     $contador."<td>";
				$contador++;
			}
			$str = $str."</tr>";
		}
		$str = $str."</table></div>";
		$str = $str."</section>";	
		
		//asigna el valor de la variable al atributo de la clase padre
		$this->setContenido($str);	
	}	
}
?>