<?php 
	//aunque el nombre del fichero empiece por minuscula (layout.php", el nombre de la clase empieza 
	//por mayuscula
	class Layout
	{
		var $titulo = "Tarea 11";
		
		function getCabecera(){
			return $this->titulo;
		}
	}
?>

	