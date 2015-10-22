<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

	<?php
		
		//funcion que muestra un mensaje por pantalla
		function imprime_mensaje($str_objetivo, $str)
		{
			echo ("<tr><td>".$str_objetivo."</td><td>".$str."</td></tr>");
		}
		echo ("<table bgcolor='#00ff00' border='1'>");
		//utilizando la clase Date, obtener...
			
			//fecha actual simple mostrando el año completo
			imprime_mensaje("Fecha actual con el año completo",
					date("d-m-Y"));
			
			//fecha actual mostrando solamente los dos últimos dígitos del año
			imprime_mensaje("Fecha actual con los dos últimos dígitos del año",
					date("d-m-y"));
			
		//Utilizando la clase Datetime
			
			//crear un obj datetime y darle formato
			$date1 = new DateTime('2006-07-18');
			imprime_mensaje("Dar formato a un objeto DateTime",
					$date1->format('d-m-Y'));
			
			//añadir dos días a la fecha anterior
			$date1->add(new DateInterval('P2D'));
			imprime_mensaje("Incrementa en dos días la fecha anterior",
				$date1->format('d-m-Y'));
			
			//establecer fecha al  dateTime
			$date1->setDate(2011, 5, 9);//yyyy mm dd
			imprime_mensaje("Establece una fecha al objeto DateTime",
				$date1->format('d-m-Y'));
				
			//establecer una hora al objeto dateTime
			$date1->setTime(22, 35, 04);//hh mm ss				
			imprime_mensaje("Establece una hora al objeto DateTime",
				$date1->format('d-m-Y H:i:s'));
			
			//añadir un dia con la funcion modify
			$date1->modify('tomorrow');
			imprime_mensaje("Añade un día a la fecha utilizando la función modify",
				$date1->format('d-m-Y H:i:s'));
				
			//añadir una semana mediante date_modify
			date_modify($date1, '+7 day');
			imprime_mensaje("Añade una semana a la fecha utilizando la función date_modify",
				$date1->format('d-m-Y H:i:s'));
				
		//comparar fechas
		$date2 = new DateTime('2006-7-18');
		if ($date1 > $date2)
			{
				imprime_mensaje("Compara dos fechas", "La primera fecha es mayor que la segunda");
			}
		
		//Operaciones aritméticas con fechas
		
			//Restar a la fecha actual otra fecha
			$fecha_actual = new DateTime('today');
			$fecha_nacimiento = new DateTime('1977-5-8');
			$diferencia = $fecha_nacimiento->diff($fecha_actual);
			imprime_mensaje("Resta una fecha a la actual", $diferencia->format('%Y años %m meses y %d días'));
		
		//fechas por localizacion
			
			//recuperar mi localizacion
			$mi_zona = date_default_timezone_get();
			imprime_mensaje("Devuelve mi zona horaria", $mi_zona);
			
			//establecer una localizacion
			date_default_timezone_set('America/New_York');
			$date3 = new DateTime('today');
			imprime_mensaje("Cambiar la zona a New York", $date3->format('d-m-Y'));
		echo ("</table>");
	?>
</body>
</html>