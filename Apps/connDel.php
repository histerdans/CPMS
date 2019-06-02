<?php

include_once('../Connections/localhost.php');


if(isset($_GET['Agenda_idc'])){
	$agenda=$_GET['Agenda_idc'];
	


$sql = "DELETE FROM s_complains where Agenda_id=$agenda";


mysql_query($sql,$localhost1);
session_start();
$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/Q_complains.php");
exit;

}
elseif(isset($_GET['IDbudget'])){
	$BID=$_GET['IDbudget'];
	


$sql = "DELETE FROM budget where Budget_id=$BID";


mysql_query($sql,$localhost1);
session_start();
$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/Budgettlb.php");
exit;
}
elseif(isset($_GET['Agenda_idcr'])){
	$agenda=$_GET['Agenda_idcr'];
	


$sql = "DELETE FROM s_corruption where Agenda_id=$agenda";


mysql_query($sql,$localhost1);
session_start();
$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/Q_corruption.php");
exit;

}

elseif(isset($_GET['Agenda_idd'])){
	$agenda=$_GET['Agenda_idd'];
	


$sql = "DELETE FROM s_disaster where Agenda_id=$agenda";


mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/Q_disaster.php");
exit;
}
elseif(isset($_GET['Agenda_idi'])){
	$agenda=$_GET['Agenda_idi'];
	


$sql = "DELETE FROM s_inquiries where Agenda_id=$agenda";


mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/Q_Inquiry.php");
exit;
}
elseif(isset($_GET['Agenda_idr'])){
	$agenda=$_GET['Agenda_idr'];
	


$sql = "DELETE FROM s_recommendation where Agenda_id=$agenda";


mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/Q_recommendation.php");
exit;
}
elseif(isset($_GET['Agenda_ids'])){
	$agenda=$_GET['Agenda_ids'];
	


$sql = "DELETE FROM s_suggestion where Agenda_id=$agenda";


mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/Q_suggestion.php");
exit;
}
elseif(isset($_GET['ID'])){
	$ID=$_GET['ID'];
	


$sql = "DELETE FROM notifications where ID=$ID";

 
mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/users.php");
exit;
}
elseif(isset($_GET['Project_id'])){
	$ID=$_GET['Project_id'];
	


$sql = "DELETE FROM activity where Project_ID=$ID";

 
mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/PCEC.php");
exit;
}
elseif(isset($_GET['Projectid'])){
	$ID=$_GET['Projectid'];
	


$sql = "DELETE FROM activity where Project_ID=$ID";

 
mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/QAtlb.php");
exit;
}
elseif(isset($_GET['IDM'])){
	$IDM=$_GET['IDM'];
	


$sql = "DELETE FROM users where Adm_id=$IDM";

 
mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/userM.php");
exit;
}
elseif(isset($_GET['IDMa'])){
	$IDM=$_GET['IDMa'];
	


$sql = "DELETE FROM articles where ID=$IDM";

 
mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/PostM.php");
exit;
}
elseif(isset($_GET['fid'])){
	$FID=$_GET['fid'];
	


$sql = "DELETE FROM feedbacks where fid=$FID";

 
mysql_query($sql,$localhost1);

$_SESSION['messagedel'] = "Successfully Deleted";

header("location:../AdminAccess/AdminFiles/Feedbacks.php");
exit;
}
else
echo"error deleteing ";


?>

