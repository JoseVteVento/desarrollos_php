<?php
require "cabecera.php";
require "cuerpo.php";
require "pie.php";

class pagina

{

		public $titulo="";
		private $cabecera, $cuerpo, $pie;
		
		function __construct($numFilas, $numColumnas)
		{
			$this->cabecera = new cabecera();
			$this->cabecera->setMenu(3);
			$this->cuerpo = new cuerpo();
			$this->cuerpo->setTabla($numFilas,$numColumnas);
			$this->pie = new pie();
			$this->pie->setPie();	
		}
		
		function getPagina()
		{
			echo $this->cabecera.$this->cuerpo.$this->pie;	
		}
}
?>