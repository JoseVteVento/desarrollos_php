<?php

require "gestordb.php";

	//conectar a la base de datos si hay datos en el formulario
	$conexion = new gestordb("root", "admin", "Daw");
	$conexion->connect_to_db();	
	
	
	//comprobar que user y password tengan valores
	if(isset($_POST["user"]) && isset($_POST["password"]))
	{				
		//validar los datos en la base de datos
		if ($conexion->autenticar($_POST["user"],$_POST["password"])){		
			session_start(); //inicia la sesion en el navegador
			$_SESSION["autentificado"] = "si"; //genera un indice-valor dentro del array de la sesion			
			header("Location:aplication.php");//crea un head en el aplication.php			
		}else{
			header("Location:index.php?errorusuario=si");
		}		
	}
?>