<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea16</title>
</head>

<body>
	<?php
		//Ejemplo de uso de algunas funciones que devuelven arrays o que trabajan con arrays
		
				
		//La funcion range devuelve un array con los los valores indicados por parámetro y con el 
		//incremento especificado(opcional)
		$numeros = range(1, 20,2);
		foreach($numeros as $valor)
		{
			echo ("Nº: ".$valor."<br>");
		}
		echo ("<br>");
		
		
		$nombres = ("Jose Rosana Ana Nuria");
		
		//La funcion explode trocea una cadena y devuelve un array con el resultado
		$array_nombres = explode(" ", $nombres);
		foreach ($array_nombres as $nombre)
		{
			echo ($nombre."<br>");
		}
		
		//La funcion count devuelve el numero de elementos de un array
		echo("<br>El array contiene ".count($array_nombres)." elementos<br>");
		
		//La funcion in_array compara el valor con los que contiene el array y devuelve el 
		//resultado en forma boolean
		if (in_array("Ana", $array_nombres))
		{
			echo("<br>Está en el array<br>");
		}else
		{
			echo("<br>No está en el array<br>");
		}
	
		//la funcion asort toma un array como parametro y devuelve ordenado
		asort($array_nombres);
		echo ("<br>Array ordenado: ");
		foreach($array_nombres as $nombre)
		{
			echo($nombre." ");
		}
		echo ("<br>");
			
		//La funcion array_search devuelve el indice del elemento dentro del array
		$indice = array_search("Nuria", $array_nombres);
		echo ("Nuria está en la posicion ".$indice);
		
	
	?>

</body>
</html>