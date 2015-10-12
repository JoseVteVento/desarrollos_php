<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

     <table>
          <?php
 			 echo "<tr>";
			for($foto=1;$foto<=4;$foto++){
			if($foto<3){
				echo "<td>";
				//echo "<img src=\"foto_0".$foto.".jpg\" width=200 height=200>";
				echo "<img src=\"foto_01.jpg\" width=200 height=200>";
				echo "<br>";
				echo "<a href=\"foto_0".$foto.".jpg\">foto_0".$foto."</a>";
				echo "</td>";
			}else{
				if($foto==3){	
					echo "</tr>";
					echo "<tr>";
					echo "<td>";
					echo "<img src=\"foto_0".$foto.".jpg\" width=200 height=200>";
					echo "<br>";
					echo "<a href=\"foto_0".$foto.".jpg\">foto_0".$foto."</a>";	
					echo "</td>";	
				}else{
					echo "<td>";
					echo "<img src=\"foto_0".$foto.".jpg\" width=200 height=200>";
					echo "<br>";
					echo "<a href=\"foto_0".$foto.".jpg\">foto_0".$foto."</a>";	
					echo "</td>";
					echo "</tr>";
}
}
}
?>
      </table>   
</body>
</html>