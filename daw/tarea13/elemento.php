<?php

class elemento
{
	private $titulo; //titulo del elemento
	public $contenido; //contenido del elemento
	
	//contructor
	function __construct()
	{
		$this->titulo = "";
	}
	
	//Almacena el codigo html a escribir
	public function setContenido($str)
	{
		$this->contenido = $str;
	}
	
	//Establece el titulo
	public function setTitulo($str)
	{
		$this->titulo = $str;
	}
	
	//Devuelve el elemento
	public function __toString()
	{
		return "</br>".$this->titulo."</br>".$this->contenido."</br>";
	}
}
?>
