<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localhost = "localhost";
$database_localhost = "souljaz_kcocps";
$username_localhost = "root";
$password_localhost = "";
$localhost1 = mysql_pconnect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_localhost, $localhost1);
?>