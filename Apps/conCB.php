<?php
require '../Connections/connect.php'; 
error_reporting();
if(mysqli_real_escape_string($localhost2,$_POST['CBid'])){

	
	$bM=mysqli_real_escape_string($localhost2,$_POST['BudgetM']);
	
	



	if ($insert=$localhost2->query("INSERT INTO budget(MBudget) 
		VALUES('$bM')")) {

	

		

		echo '<script>alert("Budget Added Successfully")
	var newLocation = "../AdminAccess/Activity/A6.php";
	window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
	var newLocation = "../AdminAccess/Activity/A6.php";
	window.location = newLocation;</script>';
}

}
else
echo '<script>alert("Invalid Request")
	var newLocation = "../AdminAccess/Activity/A6.php";
	window.location = newLocation;</script>';
?>