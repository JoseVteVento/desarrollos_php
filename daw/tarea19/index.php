<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea19</title>
</head>

<body>
	<?php
		//muestra las variables que se colocan en el url 
		//estas variables quedan almacenadas en el hash $_GET
		//ejemplo de url http://192.168.1.50/daw/tarea19/index.php?nombre=Jose&apellido=Vento&email=jvvento@gmail.com
		echo ("Variables de la url:</br>");
		foreach ($_GET as $indice=>$valor)
		{
			echo ("Indice: ".$indice."          Valor: ".$valor."</br>");			
		}	
	?>
</body>
</html>