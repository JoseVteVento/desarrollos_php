<?php
	require_once "gestordb.php";	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea 21</title>
</head>

<body>
	<?php //comprueba que el formulario contenga datos en todos los campos
		//e inserta la información en la base de datos. Seguidamente fuerza el flujo
		//hacia form.php
		if (isset($_POST["lugar"]) && isset($_POST["poblacion"]) && isset($_POST["nota"]))
		{
			$db = new gestordb("localhost", "root", "admin", "Daw");
		  	$db->connect_to_db();
			echo $db->getInfo();
			$db->addRow($_POST["lugar"], $_POST["poblacion"], $_POST["nota"]);			
		}
	
	?>

	<div id="form" style="font-family:Verdana, Geneva, sans-serif; text-transform:capitalize">
    	<form method="post" action="index.php">
        	Lugar <input type="text" name="lugar"/><br/>
			Población <input type="text" name="poblacion"/><br/>
            Nota <input type="number" name=		"nota" /><br/><br/>
            <input type="submit" name="Enviar"/>                    
        </form>
    </div>
</body>
</html>