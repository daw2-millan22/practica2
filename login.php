<?php
	session_unset()
?>
<html>
	<head>
		<title>Please Log In</title>
	</head>
	<body>
		<form method="post" action="logeado.php">
			<p>Introduce tu nombre de usuario: 
	   			<input type="text" name="user"/>
	  		</p>
	  		<p>Introduce tu contraseña: 
	   			<input type="password" name="pass"/>
	  		</p>	  
	  		<p>
	   			<input type="submit" name="submit" value="Submit"/>
	  		</p>
	 	</form>
	</body>
</html>