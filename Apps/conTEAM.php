<?php
require '../Connections/connect.php';

if(mysqli_real_escape_string($localhost2,$_POST['PName'])){

	$project=mysqli_real_escape_string($localhost2,$_POST['PName']);
	$PM=mysqli_real_escape_string($localhost2,$_POST['PMinistry']);
	$BM=mysqli_real_escape_string($localhost2,$_POST['BMinistry']);
	$fname=mysqli_real_escape_string($localhost2,$_POST['Fname']);
	$lname=mysqli_real_escape_string($localhost2,$_POST['Lname']);
	$dcost=mysqli_real_escape_string($localhost2,$_POST['dCost']);
	$fcost=mysqli_real_escape_string($localhost2,$_POST['fCost']);
	$lcost=mysqli_real_escape_string($localhost2,$_POST['lCost']);
	$tbudget=mysqli_real_escape_string($localhost2,$_POST['tBudget']);
	$trbudget=mysqli_real_escape_string($localhost2,$_POST['RemBudget']);
	$ptt=mysqli_real_escape_string($localhost2,$_POST['pTT']);
	$bd=intval($BM);
	$tb=intval($tbudget);
	$trb=intval($trbudget);
	$btR=($bd-$tb);
if ($trb='0') {
	$trb=$tbudget;
}
else 
$trb=($tbudget+$trb);

	


	if ($update=$localhost2->query("UPDATE activity SET C_Cost='$dcost',C_Facilities='$fcost', C_Labor='$lcost', C_tBudget='$tbudget', C_Duration='$ptt', CPBudget='$btR',CPRBudget='$tb' WHERE Project_Name='$project' AND Ministry='$PM' AND FNsup='$fname' AND LNsup='$lname'")) {
		echo '<script>alert("Project Details Added Successfully")
		var newLocation = "../AdminAccess/Activity/A4.php";
		window.location = newLocation;</script>';
	}
}
else 
	echo '<script>alert("Invalid Request")
var newLocation = "../AdminAccess/Activity/A4.php";
window.location = newLocation;</script>';


?>