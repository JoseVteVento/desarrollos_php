<?php
require "cabecera.php";
require "cuerpo.php";
require "pie.php";

class pagina

{
		private $cabecera, $cuerpo, $pie;
		
		function __construct()
		{
			$this->cabecera = new cabecera();			
			$this->cuerpo = new cuerpo();
			$this->pie = new pie();
		}
		
		function setCabecera()
		{
			$this->cabecera->construirMenu();
		}
		
		function setCuerpoFotos(string $titulo, int $numFilas, int $numColumnas)
		{
			
		}
		
		function setCuerpoContenido (string $titulo, string $contenido)
		{
			$this->cuerpo->setContenido($contenido);
		}
		
		function setPie ()
		{
		}
		
		function getPagina()
		{
			echo $this->cabecera->construirMenu().$this->cuerpo.$this->pie;	
		}
}
?>