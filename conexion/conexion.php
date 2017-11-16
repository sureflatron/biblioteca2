<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexio = "localhost";
$database_conexio = "biblioteca";
$username_conexio = "root";
$password_conexio = "";
$conexion = mysql_pconnect($hostname_conexio, $username_conexio, $password_conexio) or trigger_error(mysql_error(),E_USER_ERROR); 
?>