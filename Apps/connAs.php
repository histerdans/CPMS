<?php
error_reporting();
include('../Connections/connect.php');


if (isset($_POST['sess'])!='') {
	$pT = htmlspecialchars(mysqli_escape_string($localhost2,$_POST['pTitle'])); 
	$cont = htmlspecialchars(mysqli_escape_string($localhost2,$_POST['content'])); 
	if ($insert=$localhost2->query("INSERT INTO articles (Post,Content) 
		VALUES('$pT','$cont')")) {
		echo '<script>alert("Posted Successfully")
var newLocation = "../AdminAccess/AdminFiles/PostM.php";
window.location = newLocation;</script>';
}else{
	echo '<script>alert("Sorry an error occured Please refresh page and try again")
var newLocation = "../AdminAccess/AdminFiles/Post.php"";
window.location = newLocation;</script>';
}
}
?>