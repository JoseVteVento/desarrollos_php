<?php 
	require_once "gestordb.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

	
<body>
<?php
		$gestor = new gestordb("localhost", "root", "admin", "Daw");
		$gestor->connect_to_db();
		$gestor->addRow("Puerta del Sol", "Madrid", "9");
		echo $gestor->getInfo();
		echo "</br>";
		echo $gestor->getLugares();
		
		
	?>
</body>
</html>