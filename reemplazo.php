<?php
	
$cadena = "Esta es la cadena de ejemplo para sustituir un caracter";
echo "</br>";
echo $cadena;
echo "</br>";
$resultado = str_replace(" ", "%20", $cadena);
echo "</br>";
echo "La cadena resultante es: " . $resultado;
 echo "</br>";
$cadena2 = "Esta es la cadena de ejemplo para sustituir una cadena";
echo "</br>";
echo $cadena2;
echo "</br>";
$resultado2 = str_replace("cadena", "CADENA", $cadena2);
echo "</br>";
echo "La cadena resultante es: " . $resultado2;

?>