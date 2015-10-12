<?php
//clase que representa las capitales de provincia de España

class ciudades
{
	public $comunidades;
	
	function __construct()
	{
		$this->comunidades = array(
			"Comunidad Valenciana" => array ("Castellón" => "Castellon de la Plana",
											"Alicante" => "Alacant",
											"Valencia" => "València"), 
			"Aragon" => array ("Teruel" => "Teruel", 
								"Zaragoza" => "Zaragoza", 
								"Huesca" => "Huesca"), 
			"Murcia" => array ("Murcia" => "Murcia"),
			"Cataluña" => array ("Tarragona" => "Tarragona",
								"Barcelona" => "Barcelona",
								"Lérida" => "Lleida",
								"Gerona" => "Gerona")
			);
	}
	
	function imprimirComunidades()
	{
		$str = "";
		foreach ($this->comunidades as $comunidad => $provincias)
		{
			$str = $str."Comunidad autónoma: ".$comunidad."<br>";	
			foreach ($provincias as $provincia => $capital)
			{
				$str = $str.$provincia." - ".$capital."<br>";	
			}
			$str = $str."<br>";
		}
		
		echo "$str";
	}
}
?>