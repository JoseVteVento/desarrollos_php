<?php
	require "pagina.php";
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
			//construir un contenido para el item facebook en el que se incluya un mensaje y una imagen 
			$str = "";
			$str = $str."<div>";
			$str = $str."<h3 class=\"mensaje\">Facebook. The original!!!</h3>";
			$str = $str."<img class=\"foto_sencilla\" src=\"images/face.jpg\">";
			$str = $str."</div>";
			
			
			$pagina = new pagina();
			$pagina->setCuerpoContenido("Contacto", $str);
			$pagina->getPagina();
		?>
	
	</body>
	</html>