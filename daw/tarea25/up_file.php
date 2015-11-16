<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="tarea 25 del módulo Desarrollo de aplicaciones servidor" content="">
    <meta name="JV Vento" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tarea 25</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
	
			if (isset($_FILES))
		  {	
			if($_FILES['archivo']['error'] > 0)
			{
				$str = "";								
				$str = $str. ("<h2>Error: " .$_FILES['archivo']['error']. "</h2></br>");				
			}else{	
				$str = "<div class='center-block' >";		
				$str = $str. ("<h2>Nombre: " .$_FILES['archivo']['name']. "</h2></br>");
				$str = $str. ("<h2>Tipo: " .$_FILES['archivo']['type']. "</h2></br>");
				$str = $str. ("<h2>Tamaño: " .($_FILES['archivo']['size']/1024). "KB</h2></br>");
				//el fichero lo guarda en una carpeta temporal de php
				$str = $str. ("<h2>Carpeta temporal: " .$_FILES['archivo']['tmp_name']. "</h2></br>");	
				$str = $str. ("</div>");
				//luego guardamos el fichero en la carpeta que queramos
				move_uploaded_file($_FILES['archivo']['tmp_name'], "files/".$_FILES['archivo']['name']);
				
				echo  $str;								
			}
		  }		
	?>
    
    <form class='center-block' method="post" action="index.php">
    	<button class='btn-lg btn-primary' type='submit'>Volver</button>
    </form>
</html>