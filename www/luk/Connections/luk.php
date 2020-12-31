<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_luk = "localhost";
$database_luk = "luk";
$username_luk = "root";
$password_luk = "root1234";
$luk = mysql_pconnect($hostname_luk, $username_luk, $password_luk) or trigger_error(mysql_error(),E_USER_ERROR); 
?>