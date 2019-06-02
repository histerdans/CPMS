<?php
require('mysql_table.php');
require_once('../../Connections/localhost.php');
//initialize the session
if (!isset($_SESSION)) {
	session_start();
}

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


?>
<?php
class PDF extends PDF_MySQL_Table
{
	function Header()
	{
	//Title
		$this->SetFont('Arial','',18);
		$this->Image('../../Assets/image/rlogo.png',0,0);
		$this->Cell(0,6,'Pending Complain Report',0,1,'C');
		$this->Ln(10);
	//Ensure table header is output
		parent::Header();
	}
}

//filter database
$colname_CS = "-1";
if (isset($_SESSION['MM_Username'])) {
	$colname_CS = $_SESSION['MM_Username'];
}
mysql_select_db($database_localhost, $localhost1);
$query_CS = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_CS, "text"));
$CS = mysql_query($query_CS, $localhost1) or die(mysql_error());
$row_CS = mysql_fetch_assoc($CS);
$totalRows_CS = mysql_num_rows($CS);
$role=$row_CS['user_role'];
$dep=$row_CS['Department'];
$const=$row_CS['f_Constituency']; 
//close filter
$pdf=new PDF('L');
$pdf->AddPage('L');
//First table: put all columns automatically
$prop=array('HeaderColor'=>array(255,150,100),
	'color1'=>array(210,245,255),
	'color2'=>array(255,255,210),
	'padding'=>0);


$pdf->Table("SELECT Constituency,Ward,issue,description,date_saved from s_complains where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep' AND f_Constituency='$const' order by date_saved",$prop);
$pdf->AddPage('L');
//Second table: specify 3 columns
$pdf->AddCol('Constituency',10,'','L');
$pdf->AddCol('Ward',10,'','L');
$pdf->AddCol('issue',60,'','L');
$pdf->AddCol('description',80,'','L');
$pdf->AddCol('date_saved',35,'','L');


$pdf->Output($downloadfilename."PendingComplains.pdf"); 




header('Location: '.$downloadfilename."PendingComplains.pdf");
?>
