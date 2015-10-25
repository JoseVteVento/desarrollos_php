<?php
	require "pagina.php";
	require "gestordb.php"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <link href="css/styles.css" rel="stylesheet" type="text/css" >
		<title>Tarea 20</title>
	</head>
    <body>
		<?php 
			//crea el objeto pagina y lo rellena en funcion del GET
			$pagina = new pagina();
			if (isset($_GET))
			{
				switch ($_GET["id"])
				{					
					case 1:
						$pagina->setCuerpoFotos("Fotos de la playa de Pinedo", 2, 3);
					break;	
					case 2:
						$str = "";
						$str = $str."<div>";
						$str = $str."<h3>Puede mandar un email a tarantantaran@gmail.com</h3>";
						$str = $str."</div>";
						$pagina->setCuerpoContenido("Contacto", $str);
					break;
					case 3:
						$str = "";
						$str = $str."<div>";
						$str = $str."<h3 class=\"mensaje\">Facebook. The original!!!</h3>";
						$str = $str."<img class=\"foto_sencilla\" src=\"images/face.jpg\">";
						$str = $str."</div>";
						$pagina->setCuerpoContenido("Contacto", $str);
					break;
					case 4:
						//conecta a la base de datos a traves de la clase gestor (gestor.php)
						$gestor = new gestordb("localhost", "root", "admin", "Daw");
						$gestor->connect_to_db();
					
						//construir una tabla con el contenido de la base de datos
						$str = "";
						$str = $str."</br><section class='cuerpo'>";
						$str = $str."<div><h3>Tabla de resultados</h3></div>";
						$str = $str."<div>";
						$str = $str.$gestor->getLugares();			
						$str = $str."</br></br></div></section>";
						$pagina->setCuerpoContenido("Base de Datos", $str);					
					break;						
					default:
						$str = "";
						$str = $str."<section class='cuerpo'><div>";
						$str = $str."<h3 class=\"mensaje\">Home</h3>";
						$str = $str."</div><section>";
						$pagina->setCuerpoContenido("Home", $str);
					break;
					
				}
			}
		
		
			
			$pagina->getPagina();
		?>
	
	</body>
	</html>