<?php

	class gestordb
	{
		private $descriptor; //to manage the connection
		private $connected;
		private $server, $user, $pass, $database;
		private $info;
		
		//
		//	Constructor
		//
		function __construct($server, $user, $pass, $database)
    	{
			$this->server = $server;
			$this->user = $user;
			$this->pass = $pass;
			$this->database = $database;
			$this->connected = false;
			$this->info = "";			
    	}
		
		//
		//	Conecta con la Base de Datos
		//
		public function connect_to_db()
		{
			//stablish the connection to the data base
			$this->descriptor = new mysqli(
				$this->server, $this->user, $this->pass, $this->database);
				
			//check if the connection is successfull
			if ($this->descriptor->connect_errno)
			{
				$this->info = "Error al conectar con la base de datos mysql: (".$this->descriptor->errno.")  ".$this->				descriptor->connect_error;
				$this->connected = false;
			}else
			{
				$this->info = "Conexión realizada con éxito( ".$this->descriptor->host_info.")"; 
				$this->connected = true;
			}
			
			return $this->connected;
		}
		
		//
		// Devuelve el estado de la conexion actual
		//
		public function getInfo()
		{
			return $this->info;
		}
		
		//
		// Devuleve una tabla html con el contenido de la busqueda lanzada sobre la tabla lugares
		//
		public function getLugares()
		{
			$str = "";
			if ($resultado = $this->descriptor->query("SELECT * FROM lugares"))
			{
				$str = $str."<table border=1 align=\"center\"><tr bgcolor='#00ff00'><th>Id</th><th>Nombre</th><th>Población</th><th>Nota</th></tr>";
				foreach ($resultado as $registro)
				{
					$str = $str."<tr>";
					$str = $str."<td>".$registro['id']."</td>";
					$str = $str."<td>".$registro['nombre']."</td>";
					$str = $str."<td>".$registro['poblacion']."</td>";
					$str = $str."<td>".$registro['nota']."</td>";
					$str = $str."</tr>";
				}
				
				$str = $str."</table>";
			}else
			{
				$str = "Error en la consulta a la base de datos";
			}
			return $str;				
		}
		
		//
		// añade un nuevo registro
		//
		public function addRow($nombre, $poblacion, $nota)
		{
			$sentencia = "INSERT INTO lugares (nombre, poblacion, nota) VALUES ('$nombre','$poblacion',$nota)";
			if ($resultado = $this->descriptor->query($sentencia))
			{
				return "Registro insertado con éxito</br>";
			}else
			{
				echo "Error al intentar insertar un nuevo registro</br><h6>".$sentencia."</h6>";
			}
		}
	
				
	}
?>