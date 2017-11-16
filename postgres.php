<?php
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=ec2-54-163-227-202.compute-1.amazonaws.com dbname=ddajno52pm08fh user=mmezrwddybukcb password=216bab60c682b99ea742c4bdc7662ef1882fb5a6f8b228748d11ca6a830170ec")
    or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = 'SELECT * FROM libro';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

// Imprimiendo los resultados en HTML
echo "<table>\n";
while ($line = pg_fetch_array($result)) {
  
   echo $line[0];
    }
   



// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);
?>