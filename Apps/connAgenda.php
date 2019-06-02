<?php

require '../Connections/connect.php'; 
error_reporting(0);
if(mysqli_real_escape_string($localhost2,$_POST['inquiry'])){

	
	$constituency=mysqli_real_escape_string($localhost2,$_POST['constituency']);
	$ward=mysqli_real_escape_string($localhost2,$_POST['ward']);
	$issue=mysqli_real_escape_string($localhost2,$_POST['issue']);
	$description=mysqli_real_escape_string($localhost2,$_POST['description']);


	if ($insert=$localhost2->query("INSERT INTO s_inquiries(Constituency,Ward,issue,description) 
		VALUES('$constituency','$ward','$issue','$description')")) {
		echo '<script>alert("Thank you Question Asked Successfully")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['complain'])){

	
	$constituency=mysqli_real_escape_string($localhost2,$_POST['constituency']);
	$ward=mysqli_real_escape_string($localhost2,$_POST['ward']);
	$issue=mysqli_real_escape_string($localhost2,$_POST['issue']);
	$description=mysqli_real_escape_string($localhost2,$_POST['description']);


	if ($insert=$localhost2->query("INSERT INTO s_complains(Constituency,Ward,issue,description) 
		VALUES('$constituency','$ward','$issue','$description')")) {

		echo '<script>alert("Thank you Complain Successfully Passed")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['corruption'])){

	
	$constituency=mysqli_real_escape_string($localhost2,$_POST['constituency']);
	$ward=mysqli_real_escape_string($localhost2,$_POST['ward']);
	$issue=mysqli_real_escape_string($localhost2,$_POST['issue']);
	$description=mysqli_real_escape_string($localhost2,$_POST['description']);


	if ($insert=$localhost2->query("INSERT INTO s_corruption(Constituency,Ward,issue,description) 
		VALUES('$constituency','$ward','$issue','$description')")) {

		echo '<script>alert("Thank you The Corruption has been Reported Successfully")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured..Please refresh page and try again")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['disaster'])){
	
$constituency=mysqli_real_escape_string($localhost2,$_POST['constituency']);
	$ward=mysqli_real_escape_string($localhost2,$_POST['ward']);
	$issue=mysqli_real_escape_string($localhost2,$_POST['issue']);
	$description=mysqli_real_escape_string($localhost2,$_POST['description']);


	if ($insert=$localhost2->query("INSERT INTO s_disaster(Constituency,Ward,issue,description) 
		VALUES('$constituency','$ward','$issue','$description')")) {
		echo '<script>alert("Thank you Disaster has been Reported Successfully")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}

}

elseif(mysqli_real_escape_string($localhost2,$_POST['suggestion'])){


	$constituency=mysqli_real_escape_string($localhost2,$_POST['constituency']);
	$ward=mysqli_real_escape_string($localhost2,$_POST['ward']);
	$issue=mysqli_real_escape_string($localhost2,$_POST['issue']);
	$description=mysqli_real_escape_string($localhost2,$_POST['description']);

	if ($insert=$localhost2->query("INSERT INTO s_suggestion(Constituency,Ward,issue,description)
		VALUES('$constituency','$ward','$issue','$description')")) {
		echo '<script>alert("Thank you Suggestion Successfully Raised")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured  Please refresh page and try again")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['recommendation'])){

	
	$constituency=mysqli_real_escape_string($localhost2,$_POST['constituency']);
	$ward=mysqli_real_escape_string($localhost2,$_POST['ward']);
	$issue=mysqli_real_escape_string($localhost2,$_POST['issue']);
	$description=mysqli_real_escape_string($localhost2,$_POST['description']);

	if ($insert=$localhost2->query("INSERT INTO s_recommendation(Constituency,Ward,issue,description)
		VALUES('$constituency','$ward','$issue','$description')")) {
		echo '<script>alert("Thank you Recommendation Sent Successfully")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}

}


else{
	echo '<script>alert("Database connection lost Please refresh page and try again")
var newLocation = "../index.php";
window.location = newLocation;</script>';
}
	



?>

