<?php

	//comprobar que user y password tengan valores
	if(isset($_POST["user"]) && isset($_POST["password"]))
	{
		//comprobar que los valores pasados sean válidos
		if($_POST["user"] == "jose" && $_POST["password"] == "admin")
		{
			session_start(); //inicia la sesion en el navegador
			$_SESSION["autentificado"] = "si"; //genera un indice-valor dentro del array de la sesion			
			header("Location:aplication.php");//crea un head en el aplication.php			
		}else{
			header("Location:index.php?errorusuario=si");
		}
		
	}
	


?>