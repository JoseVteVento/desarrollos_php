<?php
	require "pagina.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <META http-equiv="Content-Style-Type" content="text/css">
        <link href="css/styles.css" rel="stylesheet" type="text/css" >
		<title>Tarea 20</title>
	</head>
    <body>
		<?php 
			//construir un contenido para contacto
			$str = "";
			$str = $str."<div>";
			$str = $str."<h3>Puede mandar un email a tarantantaran@gmail.com</h3>";
			$str = $str."</div>";
			
			
			$pagina = new pagina();
			$pagina->setCuerpoContenido("Contacto", $str);
			$pagina->getPagina();

		?>
	
	</body>
	</html>