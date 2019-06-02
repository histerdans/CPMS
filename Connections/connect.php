<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localhost = "localhost";
$database_localhost = "souljaz_kcocps";
$username_localhost = "root";
$password_localhost = "";
$dberror1="Could not Connect to Database";
$dberror2="Table not found";
$localhost2 = mysqli_connect($hostname_localhost, $username_localhost, $password_localhost, $database_localhost)or die($dberror1);
if ($localhost2->connect_error) {
    die("Connection failed: " . $localhost2->connect_error);
}

?>