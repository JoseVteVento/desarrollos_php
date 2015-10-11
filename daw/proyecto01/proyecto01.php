<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <META http-equiv="Content-Style-Type" content="text/css">
        <link href="styles.css" rel="stylesheet" type="text/css" >
        <?php
        //variables
		$fotografia = "foto";
		$extension = ".JPG";		
		//constantes
		define ("foto", "Foto");
		define ("titulo", "Titulo");
        ?>
		<title>Proyecto 01</title>        
	</head>

	<body>
    	<h1 align="center"><?=titulo ?></h1>
        <br/>
		<table align="center">
        	<tr>            	
            	<?php
					//aqui debe construir el nombre de la foto a mostrar, además de comprobar que
					//es la primera o la segunda foto
					//Si es la tercera o cuarta, deberá mostrarlas en otra fila
					for ($j = 1; $j < 5; $j++){
						$nombre_fichero = $fotografia.$j.$extension; //monta el nombre del fichero
						if ($j < 3){
							//las dos primeras imagenes deben aparecer en la primera fila de la tabla							
							echo "<td class=\"celda\"><img src=\"".$nombre_fichero."\"><br/>";
							echo "<a href=\"".$fotografia.$j.".html\">".$nombre_fichero."</a></td>";														
						}elseif($j == 3){
							//las dos restantes, deben aparecer en la segunda fila de la tabla							
							echo "</tr>";
							echo "<tr>";
							echo "<td class=\"celda\"><img src=\"".$nombre_fichero."\"><br/>";
							echo "<a href=\"".$fotografia.$j.".html\">".$nombre_fichero."</a></td>";							
						}elseif($j == 4){
							echo "<td class=\"celda\"><img src=\"".$nombre_fichero."\"><br/>";
							echo "<a href=\"".$fotografia.$j.".html\">".$nombre_fichero."</a></td>";
							echo "</tr>";
						}						
					}					
				?>            
            </tr>        
        </table>
	</body>
</html>