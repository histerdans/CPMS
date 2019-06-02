<?php require_once('../Connections/localhost.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_logout = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_logout = $_SESSION['MM_Username'];
}
mysql_select_db($database_localhost, $localhost1);
$query_logout = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_logout, "text"));
$logout = mysql_query($query_logout, $localhost1) or die(mysql_error());
$row_logout = mysql_fetch_assoc($logout);
$totalRows_logout = mysql_num_rows($logout);

   header("location:../AdminAccess/login.php");
      
     exit;

mysql_free_result($logout);
// Finally, destroy the session.

?>
