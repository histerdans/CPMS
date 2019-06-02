<?php
require '../Connections/connect.php';

if(mysqli_real_escape_string($localhost2,$_POST['ProjectName'])){

	$project=mysqli_real_escape_string($localhost2,$_POST['ProjectName']);
	$PM=mysqli_real_escape_string($localhost2,$_POST['PMinistry']);
	$BM=mysqli_real_escape_string($localhost2,$_POST['BMinistry']);
	$dcost=mysqli_real_escape_string($localhost2,$_POST['dCost']);
	$fcost=mysqli_real_escape_string($localhost2,$_POST['fCost']);
	$lcost=mysqli_real_escape_string($localhost2,$_POST['lCost']);
	$tbudget=mysqli_real_escape_string($localhost2,$_POST['tBudget']);
	$ptt=mysqli_real_escape_string($localhost2,$_POST['pTT']);
	$bd=intval($BM);
	$tb=intval($tbudget);
	$btR=($bd-$tb);






	if ($update=$localhost2->query("UPDATE activity SET E_Cost='$dcost', E_Facilities='$fcost',E_Labor='$lcost',E_tBudget='$tbudget',E_Duration='$ptt',CMBudget='$btR',PBudget='$tbudget' WHERE Project_Name='$project' AND Ministry='$PM'")) {
		echo '<script>alert("Project Details Added Successfully")
		var newLocation = "../AdminAccess/Activity/A3.php";
		window.location = newLocation;</script>';
	}


}
else 
	echo '<script>alert("Invalid Request")
var newLocation = "../AdminAccess/Activity/A3.php";
window.location = newLocation;</script>';

?>