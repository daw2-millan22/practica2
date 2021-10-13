<?php
	session_start();


	//chequeamos que el usuario haya iniciado session en la pagina anterior
	if ($_SESSION['authuser'] != 1){
    echo "Lo siento, no tienes permiso para esta pagina";
    exit();
	}
	$_COOKIE["username"] = $_SESSION['username'];
	echo "El mensaje que hay en la en la url es =========>";
	echo $_GET['urlLink'];
	echo "<br>";
	echo "Este es el mensaje de la cookie====>";
	echo $_COOKIE["username"];
	$myUrlLink = urlencode("ricardo ha puesto otro mensaje con la variable GET<br>");
	echo "<a href='nulos.php?urlLink=$myUrlLink'>";
		echo "Este es el link";
		echo "</a>";
?>