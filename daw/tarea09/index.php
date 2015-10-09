<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		//definición de variables			
		$cadena = "php for everybody";
		$dia_semana_numero = date("w");
		$dia_semana_letra = date("l");
		$dia_mes = date("d");		
		
		//definicion de constantes
		define("SUBTITULO", "Ejemplos de uso de estructuras de control"); 	
		define("QUINCENA1", "Primera quincena del mes");
		define("QUINCENA2", "Segunda quincena del mes");
	?>
    
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Tarea 9</title>
	</head>

	<body>
    	<h2>Día del mes</h2>
    	<?php	
			if ($dia_mes < 15) 
				echo QUINCENA1;
			else
				echo QUINCENA2;			
		?>
        <br/>
        <h2>Día de la semana</h2>
        <?php
			echo $dia_semana_letra;
		?>
        <br/>
		<?php	
			echo $dia_semana_numero;
		?>
		
    	
        
        
	</body>
</html>