<?php
require '../Connections/connect.php'; 
error_reporting();
if(mysqli_real_escape_string($localhost2,$_POST['Ministry'])){

	
	
	$mini=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$bid=mysqli_real_escape_string($localhost2,$_POST['Bid']);
	$bM=mysqli_real_escape_string($localhost2,$_POST['BudgetM']);
	$bd=intval($bid);
	$bm=intval($bM);
	$bR=$bd-$bm;

	
	
	



	if ($insert=$localhost2->query("INSERT INTO Budget(Ministry,BudgetM,BudgetR,MBudget) 
		VALUES('$mini','$bM','$bR','$bR')")) {

		$update=$localhost2->query("UPDATE activity SET MBudget='$bM' WHERE Ministry='$mini'");

		

		echo '<script>alert("Budget Added Successfully")
	var newLocation = "../AdminAccess/Activity/A5.php";
	window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
	var newLocation = "../AdminAccess/Activity/A5.php";
	window.location = newLocation;</script>';
}

}
else
echo '<script>alert("Invalid Request")
	var newLocation = "../AdminAccess/Activity/A5.php";
	window.location = newLocation;</script>';
?>