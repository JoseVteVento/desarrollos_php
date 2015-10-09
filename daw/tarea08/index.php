<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		//definición de variables			
		$cadena = "php for everybody";
		
		$color_R=0;
		$color_G=0;
		$color_B=0;
		
		//definicion de constantes
		define("SUBTITULO", "Ejemplos de uso de estructuras de control"); 
	
	?>
    
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Tarea 8</title>
	</head>

	<body>
    	<h1>
			<?php
				echo"$cadena";
			?>
        </h1>
        <h3>
        	<?php
				echo "".SUBTITULO."";
			?> 
        </h3>
        <br/>
        <table>
        	<?php for($color_B=0; $color_B<255; $color_B=$color_B+5){ ?>
        	<tr>
            	<td bgcolor="#<?php echo dechex($color_B);?>0000">
                <?php
					echo "".SUBTITULO."";
				?> 
                </td>
                <td bgcolor="#00<?php echo dechex($color_B);?>00">
                <?php
					echo "".SUBTITULO."";
				?> 
                </td>
                <td bgcolor="#0000<?php echo dechex($color_B);?>">
                <?php
					echo "".SUBTITULO."";
				?> 
                </td>
                <td bgcolor="#<?php echo dechex($color_B);?><?php echo dechex($color_B);?><?php echo dechex($color_B);?>">
                <?php
					echo "".SUBTITULO."";
				?> 
                </td>
             </tr>
             <?php } ?>
        </table>
		<?php
			echo "Variable entera = $Numero, y tambien a $numero<br/>";
			echo "Una variable decimal podria tener el valor $numero_decimal<br/>";
			echo "Y una variable boolean, puede tener valor $var_booleana<br/>";
		?>
        
        
	</body>
</html>