<?php
// Obntener el valor de $_GET['nulo'] y devolver 'este valor es nulo'
// si no existe.
$controldenulos = $_GET['nulo'] ?? ' este valor es nulo';
// Esto equivale a:
$controldenulos = isset($_GET['nulo']) ? $_GET['nulo'] : ' este valor es nulo';

// La fusión se puede encadenar: esto devolverá el primer
// valor definido de $_GET['nulo'], $_POST['nulo'],
// y 'este valor es nulo'.
$controldenulos = $_GET['nulo'] ?? $_POST['nulo'] ?? ' este valor es nulo';
echo $_GET['urlLink'];

echo $controldenulos;
echo "<br>";
echo "<a href='dias.php'>";
echo "quieres sabes cuantos dias tiene el mes en el que estamos ?";
echo "</a>";

?>