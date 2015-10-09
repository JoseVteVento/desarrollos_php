<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		//definición de variables
		$numero = 20;
		$Numero = 30;		
		$numero_decimal = 2.32;		
		$var_booleana = true;		
		$cadena = "Hello World";
		
		//definicion de constantes
		define("SUBTITULO", "primeros pasos con php"); 
	
	?>
    
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Documento sin título</title>
	</head>

	<body>
    	<h1>
			<?php
				echo"$cadena";
			?>
        </h1>
        <h3>
        	<?php
				echo "".SUBTITULO."";
			?> 
        </h3>
        <br/>
        <?php
			echo "Variable entera = $Numero, y tambien a $numero<br/>";
			echo "Una variable decimal podria tener el valor $numero_decimal<br/>";
			echo "Y una variable boolean, puede tener valor $var_booleana<br/>";
		?>
	</body>
</html>