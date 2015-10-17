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
		
		function setCuerpoFotos( $titulo, $numFilas, $numColumnas)
		{
			//crea el cuerpo llamando al método de la clase cuerpo
			$this->cuerpo->setTablaFotos($titulo, $numFilas, $numColumnas);
		}
		
		function setCuerpoContenido ($titulo, $contenido)
		{
			$this->cuerpo->setContenido($contenido);
		}
		
		function setPie ()
		{
		}
		
		function getPagina()
		{
			echo $this->cabecera->construirMenu().$this->cuerpo.$this->pie->setPie();	
		}
}
?>