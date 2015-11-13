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
		function __construct()
    	{
			//__construct($server, $user, $pass, $database)
			//$this->server = $server;
			//$this->user = $user;
			//$this->pass = $pass;
			//$this->database = $database;
			//$this->connected = false;
			//$this->info = "";	
			
			//utilizando func_num_args se recoge el numero de argumentos que se han pasado
			//Luego, en funcion del numero de args hará una cosa u otra
			if(func_num_args()==1){
				$this->user = func_get_arg(0);
				$this->conectado=false;
				$this->info="";
			}elseif(func_num_args()==2){
				$this->user = func_get_arg(0);
				$this->pass = func_get_arg(1);
				$this->conectado=false;
				$this->info="";			
			}elseif(func_num_args()==3){
				$this->user = func_get_arg(0);
				$this->pass = func_get_arg(1);
				$this->database = func_get_arg(2);
				$this->conectado=false;
				$this->info="";
			}elseif(func_num_args()==3){
				$this->user = func_get_arg(0);
				$this->pass = func_get_arg(1);
				$this->database = func_get_arg(2);
				$this->server = func_get_arg(3);
				$this->conectado=false;
				$this->info="";
			}			
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
		// Autenticar el ususario
		//		
		public function autenticar($usuarioAPP,$passwordAPP){
			
		$passMD5=md5($passwordAPP);//codifica el password pasado usando el algoritmo md5
		error_log("SELECT * FROM usuarios where usuario='".$usuarioAPP."' AND password='".$passMD5."'");
		if($resultado = $this->descriptor->query("SELECT * FROM usuarios where usuario='".$usuarioAPP."' AND password='".$passMD5."'")){
			// compruebo llamada
			//error_log($this->descriptor->affected_rows);
			if($this->descriptor->affected_rows>0){//si ha obtenido algún resultado...
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
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