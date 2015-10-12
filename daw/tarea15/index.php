<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea 15</title>
</head>

<body>

	<?php
		//array simple
		$deportes[] = "Futbol";
		$deportes[] = "Baloncesto";
		$deportes[] = "Petanca extrema";
		
		foreach ($deportes as $valor)
		{
			echo ("Me gusta jugar al $valor<br>");
		}
		
		echo "__________________________________________________________________________________<br><br>";
		
		//otro array simple
		$libros[0] = "El origen de la estupidez";
		$libros[1] = "No digas no sin preguntar";
		$libros[2] = "Recordarán nuestros nombres";
		
		foreach ($libros as $valor)
		{
			echo ("Libro interesante a leer: $valor<br>");
		}
		
		echo "__________________________________________________________________________________<br><br>";
		
		//hashes
		$pelicula = array("El silencio de los corderos"=>"Jonathan Demme",
							"El señor de los anillos"=>"Peter Jackson",
							"El padrino"=>"Francis Ford Coppola");
							
		foreach ($pelicula as $titulo => $director)
		{
			echo ("Pelicula: $titulo.   Director: $director<br>");	
		}
				
		echo "__________________________________________________________________________________<br><br>";				
		//hashes multidimensional
		$liga = array("Valencia" => array("Mendieta", "Piojo Lopez", "Ayala", "Carboni"),
						"R. Madrid" => array("Zidane", "Ronaldo", "Pavon", "Casillas"),
						"Barça" => array("Laudrup", "Figo", "De la Peña", "Zubizarreta")
						);
						
		foreach ($liga as $equipo => $jugadores)
		{
			foreach($jugadores as $jugador)
			{
				echo ("$jugador jugaba en el $equipo<br>");	
			}
		}
						
					
		
		
		
		
		
		
		
		
		
	?>
</body>
</html>