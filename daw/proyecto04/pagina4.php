<?php
	require "pagina.php";
	require "gestordb.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <META http-equiv="Content-Style-Type" content="text/css">
        <link href="css/styles.css" rel="stylesheet" type="text/css" >
		<title>Proyecto 04</title>
	</head>
    <body>
		<?php 
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
			
			
			$pagina = new pagina();
			$pagina->setCuerpoContenido("Contacto", $str);
			$pagina->getPagina();
		?>
	
	</body>
	</html>