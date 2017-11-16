
<html> 
<body> 
  
<?php 
$link = mysql_connect("localhost", "root",""); 
mysql_select_db("biblioteca", $link); 
$result = mysql_query("SELECT IdLibro, Tituulo FROM libro where IdLibro='1000';", $link); 

while ($row = mysql_fetch_row($result)){ 
       echo $row[0]; 
} 
 
?> 
  
</body> 
</html> 