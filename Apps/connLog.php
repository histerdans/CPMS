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
session_start();


$colname_UserConn = "-1";
if (isset($_SESSION['MM_Username'])) {
	$colname_UserConn = $_SESSION['MM_Username'];

	mysql_select_db($database_localhost, $localhost1);
	$query_UserConn = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_UserConn, "text"));
	$UserConn = mysql_query($query_UserConn, $localhost1) or die(mysql_error());
	$row_UserConn = mysql_fetch_assoc($UserConn);
	$totalRows_UserConn = mysql_num_rows($UserConn);




	if ($row_UserConn['user_role']=="Admin")
	{


		header("location:../AdminAccess/Admin.php");
		exit;
	}

	elseif ($row_UserConn['user_role']=="Quality Assurance")
	{


		header("location:../AdminAccess/QA.php");
		exit;
	}
	elseif ($row_UserConn['user_role']=="Deputy Governor")
	{


		header("location:../AdminAccess/AdminDash.php");
		exit;
	}

	elseif ($row_UserConn['user_role']=="Governor")
	{


		header("location:../AdminAccess/AdminDash.php");
		exit;
	}
	elseif ($row_UserConn['user_role']=="County Secretary")
	{


		header("location:../AdminAccess/AdminDash.php");
		exit;
	}
	elseif ($row_UserConn['user_role']=="C.O")
	{


		header("location:../AdminAccess/AdminDash.php");
		exit;
	}
	elseif ($row_UserConn['user_role']=="C.E.C")
	{


		header("location:../AdminAccess/AdminDash.php");
		exit;
	}
	elseif ($row_UserConn['user_role']=="Administrator")
	{


		header("location:../AdminAccess/Admin.php");
		exit;
	}
	elseif ($row_UserConn['user_role']=="Sub-County Admin")
	{


		header("location:../AdminAccess/AdminDash1.php");
		exit;
	}
	elseif ($row_UserConn['user_role']=="Dept_Sub-County Admin")
	{


		header("location:../AdminAccess/AdminDash1.php");
		exit;
	}



	elseif ($row_UserConn['user_role']=="Supervisor")
	{


		header("location:../AdminAccess/Activity/A4.php");
		exit;
	}
	elseif ($row_UserConn['user_role']=="Finance Officer")
	{


		header("location:../AdminAccess/Activity/A5.php");
		exit;
	}
	
	
	else{
echo '<script>alert("Unauthorized user Access \nYou Do not have permission to view this page")
var newLocation = "../AdminAccess/login.php";
window.location = newLocation;</script>';

		

	}


	mysql_free_result($UserConn);		

}
	

?>
