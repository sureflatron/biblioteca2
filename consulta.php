
<html> 
<body> 
  
<?php 
$link = mysql_connect("ec2-54-163-227-202.compute-1.amazonaws.com", "mmezrwddybukcb","216bab60c682b99ea742c4bdc7662ef1882fb5a6f8b228748d11ca6a830170ec"); 
mysql_select_db("ddajno52pm08fh", $link); 
$result = mysql_query("SELECT IdLibro, Tituulo FROM libro where IdLibro='1000';", $link); 

while ($row = mysql_fetch_row($result)){ 
       echo $row[0]; 
} 
 
?> 
  
</body> 
</html> 