<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
	class Layout
	{
		var $titulo = "Tarea 10";
		
		function getCabecera(){
			return $this->titulo;
		}
	}
?>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Tarea 10</title>
	</head>

	<body>
		<?php 
			$myLayout = new Layout();
			echo "<h1 align=\"center\">".$myLayout->getCabecera()."</h1>";
		?>
	</body>
</html>