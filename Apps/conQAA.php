<?php
require '../Connections/connect.php'; 
error_reporting();
if(mysqli_real_escape_string($localhost2,$_POST['QAA'])){

	$adm=mysqli_real_escape_string($localhost2,$_POST['userId']);
	$constituency=mysqli_real_escape_string($localhost2,$_POST['constituency']);
	$mini=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$ward=mysqli_real_escape_string($localhost2,$_POST['ward']);
	$pname=mysqli_real_escape_string($localhost2,$_POST['Pname']);
	$pdes=mysqli_real_escape_string($localhost2,$_POST['Pdesrc']);
	$fnsur=mysqli_real_escape_string($localhost2,$_POST['FNsur']);
	$lnsur=mysqli_real_escape_string($localhost2,$_POST['LNsur']);
	$csur=mysqli_real_escape_string($localhost2,$_POST['Csur']);
	$fnsup=mysqli_real_escape_string($localhost2,$_POST['FNsup']);
	$lnsup=mysqli_real_escape_string($localhost2,$_POST['LNsup']);
	$csup=mysqli_real_escape_string($localhost2,$_POST['Csup']);
	$fnpm=mysqli_real_escape_string($localhost2,$_POST['FNPM']);
	$lnpm=mysqli_real_escape_string($localhost2,$_POST['LNPM']);
	$cpm=mysqli_real_escape_string($localhost2,$_POST['CPM']);
	$fnpe=mysqli_real_escape_string($localhost2,$_POST['FNPE']);
	$lnpe=mysqli_real_escape_string($localhost2,$_POST['LNPE']);
	$cpe=mysqli_real_escape_string($localhost2,$_POST['CPE']);
	$fnpc=mysqli_real_escape_string($localhost2,$_POST['FNPC']);
	$lnpc=mysqli_real_escape_string($localhost2,$_POST['LNPC']);
	$cpc=mysqli_real_escape_string($localhost2,$_POST['CPC']);
	$ur="Supervisor";
	$ranStr = md5(microtime());
	$uname = substr($ranStr, 0, 6);
	$pass = substr($ranStr, 0, 6);
	
	
	

	




	if ($insert=$localhost2->query("INSERT INTO activity(Project_ID,Project_Name,Project_Description,Ministry,Constituency,Ward,FNsup,LNsup,Csup,FNsur,LNsur,Csur,FNPM,LNPM,CPM,FNPE,LNPE,CPE,FNPC,LNPC,CPC) 
		VALUES('$adm','$pname','$pdes','$mini','$constituency','$ward','$fnsup','$lnsup','$csup','$fnsur','$lnsur','$csur','$fnpm','$lnpm','$cpm','$fnpe','$lnpe','$cpe','$fnpc','$lnpc','$cpc')")) {

		$insert=$localhost2->query("INSERT INTO  notifications(Username,Password,Project_Name,User_role,Ministry,Company,FName,LName) 
			VALUES('$uname','$pass','$pname','$ur','$mini','$csup','$fnsup','$lnsup')");



	echo '<script>alert("Project Added Successfully")
	var newLocation = "../AdminAccess/Activity/A1.php";
	window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
	var newLocation = "../AdminAccess/Activity/A1.php";
	window.location = newLocation;</script>';
}

}
else 
	echo '<script>alert("Invalid Request")
var newLocation = "../AdminAccess/Activity/A1.php";
window.location = newLocation;</script>';



?>