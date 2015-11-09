<?php
	require "seguridad.php";
	require_once "cuerpoimagenes.php";
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Home</a>
          <a class="navbar-brand" href="index.php?img=true">Imagenes</a>
          <a class="navbar-brand" href="#">Contacto</a>
          <a class="navbar-brand" href="#">Facebook</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
        <!-- comprobar si se ha iniciado sesion
        	en caso afirmativo mostrará un saludo y un boton para cerrar sesion
            en caso negativo mostrará un formulario para logearse -->
          <?php
		  	if (isset ($_SESSION["autentificado"]))
			{
				if ($_SESSION["autentificado"] == "si")
				{
				
					echo "<form class='navbar-form navbar-right' method='post' action='salir.php'>";
     		        echo "<button type='submit' class='btn btn-success'>Log out</button>";
    		        echo "</form>";		
				}
					  
			}else{
					
					//muestra el formulario para logearse
					echo "<form class='navbar-form navbar-right' method='post' action='control.php'>";
         		    echo "<div class='form-group'>";
      		        echo "<input type='text' placeholder='Email' class='form-control' name='user'>";
      		        echo "</div>";
      		        echo "<div class='form-group'>";
       		        echo "<input type='password' placeholder='Password' class='form-control' name='password'>";
      		        echo " </div>";
     		        echo "<button type='submit' class='btn btn-success'>Sign in</button>";
    		        echo "</form>";		 						
			}
		  
		  ?>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
      </div>
      
      <?php 
	  	if (isset($_GET["img"]))
		{
			if ($_GET["img"] == "true")
			{
				$cuerpo = new cuerpoimagenes();
				echo $cuerpo->setTablaFotos("Playas de ensueño", 2, 3);
			}		
		}
	  ?>
      
    </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>