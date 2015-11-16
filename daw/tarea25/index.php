
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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://192.168.1.50/daw/tarea25/index.php?view=up">Subir fichero</a>
          <a class="navbar-brand" href="http://192.168.1.50/daw/tarea25/files">Ver ficheros</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Tarea 25</h1>
        <p>Esta tarea tiene como objeto el aprendizaje del uso de la variable $_FILE.</p>
        <p>Así pues, se podrá subir pequeños ficheros al servidor, para luego poder visualizar un listado de los mismos.</p>
        <p>Para la realización de esta area, he utilizado bootstrap.</p>
       
      </div>
    </div>
    
    <hr>

	<div class="jumbotron">
      <div class="container">
      
     
      <?php
	  	if (isset($_GET["view"]))
		{
			switch ($_GET["view"])
			{
				case "up":
					//echo ("<p>Vista de subida de ficheros</p>");
					echo (" <form class='form-signin' role='form' enctype='multipart/form-data' method='post' action='up_file.php'> ");
      				echo ("<h2 class='form-signin-heading'>Subir un fichero</h2>");
       			    echo ("<label class='sr-only' for='inputFile'>Fichero</label>");	
       				echo ("<input class='file' type='file' name='archivo' id='archivo'/>");
        			echo ("<button class='btn-lg btn-block btn-primary' type='submit'>Enviar</button> ");           	
    				echo ("</form>");
					
					//$uploader = new up_file();//subira el fichero
					//echo ($uploader->up());
				break;
				
				case "list"://queda como via de ampliacion. De momento listará los ficheros llamando al directorio
					echo ("<p>Vista de listado de ficheros</p>");
				break;	
			}
		}
		
	  ?>
      
      </div>
    </div>
   

      <hr>

      <footer>
        <p>© Tarea 25 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>