<?php
require '../Connections/connect.php';

if(mysqli_real_escape_string($localhost2,$_POST['Bid'])){
	$bib=mysqli_real_escape_string($localhost2,$_POST['Bid']);
	$Min=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$BM=mysqli_real_escape_string($localhost2,$_POST['Bm']);
	$BR=mysqli_real_escape_string($localhost2,$_POST['Br']);
	

if ($update=$localhost2->query("UPDATE budget SET BudgetM='$BM', Ministry='$Min',BudgetR='$BR' where Budget_id='$bib'")) {
	echo '<script>alert("Budget Details Added Successfully")
var newLocation = "../AdminAccess/AdminFiles/Budgettlb.php";
window.location = newLocation;</script>';
}
else echo '<script>alert("invalid Request")
var newLocation = "../AdminAccess/AdminFiles/Budgettlb.php";
window.location = newLocation;</script>';
}
else 
echo '<script>alert("Invalid Request")
var newLocation = "../AdminAccess/AdminFiles/Budgettlb.php";
window.location = newLocation;</script>';


?>