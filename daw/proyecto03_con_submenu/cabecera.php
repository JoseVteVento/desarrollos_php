<?php
require_once "elemento.php";

class cabecera extends elemento{
	
	private $array_menu;
	private $redes_submenu;
	
	function __construct()
	{
		$this->array_menu = array (
				"home" => array ("txt" => "Home", 
								 "url" => "http://192.168.1.50/daw/proyecto03_con_submenu/index.php"),
				"fotos" => array ("txt" => "Fotos",
								"url" => "http://192.168.1.50/daw/proyecto03_con_submenu/pagina1.php"),
				"contacto" => array ("txt" => "Contacto",
								"url" => "http://192.168.1.50/daw/proyecto03_con_submenu/pagina2.php"),
				"redes" => array ("txt" => "submenu",
								"url" => "#",
								"array" => "redes_submenu",
								"titulo" => "Redes sociales")								
								);
		$this->addMenuItem("Help", "Ayuda", "http://192.168.1.50/daw/proyecto03_con_submenu/index.php");
		
		$this->redes_submenu = array (
				"facebook" => array ("txt" => "Facebook",
									"url" => "http://192.168.1.50/daw/proyecto03_con_submenu/pagina3.php"),
				"twiter" =>	array ("txt" => "Twiter",
									"url" => "http://192.168.1.50/daw/proyecto03_con_submenu/pagina3.php"),
				"linkedin" => array("txt" => "Linkedin",
									"url" => "http://192.168.1.50/daw/proyecto03_con_submenu/pagina3.php")
									);
		
	}
	
		
	
	//Define el menu de la cabecera
	public function construirMenu()
	{
		//construye la imagen de la cabecera
		$pagina = "<div class=\"imagen_cabecera\">";
		$pagina = $pagina."<a><img src=\"images/proyecto03.jpg\" width=566 height=196 /></a>";
		$pagina = $pagina."</div>";
		
		//construye el menu
		$pagina = $pagina."<div id=\"menu\">";	
		$pagina = $pagina."<ul class=\"nav\">";
		foreach ($this->array_menu as $items)
		{	
			if(strcmp($items["txt"] , "submenu")==0){
				//genera el submenu
				$pagina = $pagina."<li class='active'><a href=\"".$items["url"]."\">".$items["titulo"]."</a>";
				$pagina = $pagina."<ul class=\"submenu\">";
				$pagina = $pagina.$this->createSubmenu($this->redes_submenu);//indexa el submenu
				$pagina = $pagina."</ul></li>";
			}else{
				$pagina = $pagina."<li><a href=\"".$items["url"]."\">".$items["txt"]."</a></li>";
			}
		}			
		$pagina = $pagina."</ul></div>";
		
		//devuelve el conjunto que forma la cabecera	
		return $pagina;	
	}
	
	//crea el codigo html correspondiente a un submenu, a partir de un array pasado poor parámetro
	private function createSubmenu($arraySubmenu)
	{
		$pagina = "";
		//$pagina = $pagina."<ul class=\"nav\">";
		foreach ($arraySubmenu as $items_submenu)
			{
				$pagina = $pagina."<li><a href=\"".$items_submenu["url"]."\">".$items_submenu["txt"]."</a></li>";
			}
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