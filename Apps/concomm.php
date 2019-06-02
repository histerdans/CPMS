<?php

require '../Connections/connect.php'; 
error_reporting(0);
if($_POST['inquiry']){

	
	$com=$_POST['message'];
	


	if ($insert=$localhost2->query("INSERT INTO s_inquiries(Comments) 
		VALUES('$com')")) {
		echo '<script>alert("Comment Posted")
var newLocation = "../UserAccess/Inquiry.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured<br/>  Please refresh page and try again")
var newLocation = "../UserAccess/Inquiry.php";
window.location = newLocation;</script>';
}

}
elseif($_POST['complain']){

	
	$com=$_POST['message'];


	if ($insert=$localhost2->query("INSERT INTO s_complains(Comments) 
		VALUES('$com')")) {
		echo '<script>alert("Comment Posted")
var newLocation = "../UserAccess/complain.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured<br/>  Please refresh page and try again")
var newLocation = "../UserAccess/complain.php";
window.location = newLocation;</script>';
}

}
elseif($_POST['disaster']){
	
	$com=$_POST['message'];

	if ($insert=$localhost2->query("INSERT INTO s_disaster(Comments) 
		VALUES('$com')")) {
		echo '<script>alert("Comment Posted")
var newLocation = "../UserAccess/Disaster.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured<br/>  Please refresh page and try again")
var newLocation = "../UserAccess/Disaster.php";
window.location = newLocation;</script>';
}

}

elseif($_POST['suggestion']){


	$com=$_POST['message'];

	if ($insert=$localhost2->query("INSERT INTO s_suggestion(Comments) 
		VALUES('$com')")) {
		echo '<script>alert("Comment Posted")
var newLocation = "../UserAccess/suggestion.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured<br/>Please refresh page and try again")
var newLocation = "../UserAccess/suggestion.php";
window.location = newLocation;</script>';
}

}
elseif($_POST['recommendation']){

	
$com=$_POST['message'];

	if ($insert=$localhost2->query("INSERT INTO s_recommendation(Comments) 
		VALUES('$com')")) {
		echo '<script>alert("Comment Posted")
var newLocation = "../UserAccess/recommendation.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured<br/> Please refresh page and try again")
var newLocation = "../UserAccess/recommendation.php";
window.location = newLocation;</script>';
}

}


else{
	echo '<script>alert("Database connection lost<br/>Please refresh page and try again")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}
	



?>

