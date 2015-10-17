<?php
	require "pagina.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <META http-equiv="Content-Style-Type" content="text/css">
        <link href="css/styles.css" rel="stylesheet" type="text/css" >
		<title>Proyecto 03</title>
	</head>
    <body>
		<?php 
			$pagina = new pagina();
			$pagina->setCuerpoFotos("Fotos de la playa de Pinedo", 2, 3);
			$pagina->getPagina();
		?>
	
	</body>
	</html>