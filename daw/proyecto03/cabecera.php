<?php
require_once "elemento.php";

class cabecera extends elemento{
	
	private $array_menu;
	
	function __construct()
	{
		$this->array_menu = array (
				"home" => array ("txt" => "Home", 
								 "url" => "http://192.168.1.50/daw/home.php"),
				"fotos" => array ("txt" => "Fotos",
								"url" => "http://192.168.1.50/daw/fotos.php"),
				"contacto" => array ("txt" => "Contacto",
								"url" => "http://192.168.1.50/daw/contacto.php"));
	}
	
	//Define el menu de la cabecera
	public function construirMenu()
	{
		//construye la imagen de la cabecera
		$pagina = "<div class=\"imagen_cabecera\">";
		$pagina = $pagina."<a><img src=\"images/proyecto03.png\" width=566 height=196 /></<";
		$pagina = $pagina."</div>";
		
		//construye el menu
		$pagina = $pagina."<div class=\"menu\">";	
		$pagina = $pagina."<ul class=\"nav\">";
		foreach ($this->array_menu as $items)
		{
			$url = "";
			$txt = "";
			foreach($items as $tipoItem => $contenidoItem)
			{
				if ($tipoItem == "txt"){
					$txt = $contenidoItem;
				}else{
					$url = $contenidoItem;
				}
			}
			$pagina = $pagina."<li><a href=\"".$url."\">".$txt."</a></li>";
		}			
		$pagina = $pagina."</ul></div>";
		
		//devuelve el conjunto que forma la cabecera	
		return $pagina;	
	}
}
?>