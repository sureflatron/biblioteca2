<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexio = "ec2-54-163-227-202.compute-1.amazonaws.com";
$database_conexio = "ddajno52pm08fh";
$username_conexio = "mmezrwddybukcb";
$password_conexio = "216bab60c682b99ea742c4bdc7662ef1882fb5a6f8b228748d11ca6a830170ec";
$conexion = mysql_pconnect($hostname_conexio, $username_conexio, $password_conexio) or trigger_error(mysql_error(),E_USER_ERROR); 
?>