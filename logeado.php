<?php
	session_start();
	$_SESSION['username'] = $_POST['user'];
	$_SESSION['userpass'] = $_POST['pass'];
	$_SESSION['authuser'] = 0;

	//checkeamos el usuario y la contraseña
	if(($_SESSION['username'] == 'Ricardo') and ($_SESSION['userpass'] == '123456')){
		$_SESSION['authuser'] = 1;
		echo'Bienvenido ';
		echo $_SESSION['username'];
		echo '<br>';
		$myUrlLink = urlencode("Este es el mensaje de la URL");
		echo "<a href='link.php?urlLink=$myUrlLink'>";
		echo "Este es el link";
		echo "</a>";
	}
	else{
		echo 'Lo siento pero el nombre de usuario o la contraseña estan incorrectos';
		exit();
	}
?>