<?php
require_once "elemento.php";

class cabecera extends elemento{
	
	private $array_menu;
	
	function __construct()
	{
		$this->array_menu = array (
				"home" => array ("txt" => "Home", 
								 "url" => "http://192.168.1.50/daw/proyecto04/index.php"),
				"fotos" => array ("txt" => "Fotos",
								"url" => "http://192.168.1.50/daw/proyecto04/pagina1.php"),
				"bd" => array ("txt" => "Base de datos",
								"url" => "http://192.168.1.50/daw/proyecto04/pagina4.php"),
				"contacto" => array ("txt" => "Contacto",
								"url" => "http://192.168.1.50/daw/proyecto04/pagina2.php"),
				"facebook" => array ("txt" => "Facebook",
								"url" => "http://192.168.1.50/daw/proyecto04/pagina3.php")
								);
		$this->addMenuItem("Help", "Ayuda", "http://192.168.1.50/daw/proyecto04/index.php");
	}
	
	//Define el menu de la cabecera
	public function construirMenu()
	{
		//construye la imagen de la cabecera
		$pagina = "<div class=\"imagen_cabecera\">";
		$pagina = $pagina."<a><img src=\"images/proyecto04.jpg\" width=566 height=196 /></a>";
		$pagina = $pagina."</div>";
		
		//construye el menu
		$pagina = $pagina."<div class=\"menu\">";	
		$pagina = $pagina."<ul class=\"nav\">";
		foreach ($this->array_menu as $items)
		{			
			$pagina = $pagina."<li><a href=\"".$items["url"]."\">".$items["txt"]."</a></li>";
		}			
		$pagina = $pagina."</ul></div>";
		
		//devuelve el conjunto que forma la cabecera	
		return $pagina;	
	}
	
	//Añade un elemento completo al menu
	private function addMenuItem($nameItem, $title, $url)
	{		
		//array_push ($this->array_menu, array ($nameItem => array("txt" => $title, "url" => $url)));		
		array_push($this->array_menu, array ("txt" => $title, "url" => $url));
	}
	
	//Permite redefinir la url del elemento pasado por parámetro
	public function setDireccion($elementoMenu, $nuevaUrl)
	{
		$elemento = $this->array_menu[$elementoMenu];
		$elemento["url"] = $nuevaUrl;
	}
}
?>