<?php
class pagina
{
	private $pagina="";
	
	function __construct($elementos)
	{
		$this->pagina = "<div class=\"menu\">";	
		$this->pagina = $this->pagina."<ul class=\"nav\">";
		for ($j=1; $j<6; $j++){
			$this->pagina = $this->pagina."<li><a href=\"index".$j.".php\">Pagina".$j."</a></li>";
		}		
		$this->pagina = $this->pagina."</ul></div>";		
	}
	
	function __toString()
	{
		return $this->pagina;
	}
}

?>