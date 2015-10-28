<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea 22</title>
</head>

<body>
	<br/>
	<form action="control.php" method="post"> 
    	<table align="center" border="0"  background="#111111" cellpadding="10px" cellspacing="10px">
        	<?php
				if (isset($_GET["errorusuario"]))
				{
					if ($_GET["errorusuario"] == "si")
					{
						echo ("<tr><td colspan='2'>Ususario y/o contraseña erróneos</td></tr>");
					}
				}
				
			?>
            <tr>
            	<td>User</td>
                <td><input name="user" type="text" size="20" maxlength="50"/></td>
            </tr>
            <tr>
            	<td>Password</td>
                <td><input name="password" type="password" size="20" maxlength="50"/></td>
            </tr>
            <tr>
            	<td align="center" colspan="2"><input type="submit" value="Entrar"/></td>                
            </tr>
        </table>
    </form>
</body>
</html>
