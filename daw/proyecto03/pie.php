<?php
require_once "elemento.php";

class pie extends elemento
{
	function __construct()
	{	
	}
	
	//Define el contenido del footer
	public function setPie()
	{
		$pie = "";
		$pie = $pie."<footer class=\"pie\"><div><a>";
		$pie = $pie."<center>por Jose Vte Vento</center>";
		$pie = $pie."</a></div></footer>";
		
		return $pie;		
	}	
}
?>