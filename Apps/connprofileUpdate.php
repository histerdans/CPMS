<?php
error_reporting();
include('../Connections/connect.php');

if (isset($_POST['sess'])!='') {
	if(isset($_POST['Adm_id'])){

		$ADM= htmlspecialchars( mysqli_real_escape_string($localhost2,$_POST['Adm_id'])); 
		$bday=htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['bday']));
		$username = htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['username']));
		$pass = htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['cpassword'])); 		
		$email = htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['email'])); 
		$firstname = htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['firstname'])); 
		$lastname = htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['lastname']));
		$Bio=htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['comment']));
		$gen=htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['Gender']));
		$T=htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['Title']));
		$phoneno= htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['PhoneNo']));


		
	session_start();
		$_SESSION['MM_Username'] = NULL;
		$_SESSION['MM_UserGroup'] = NULL;
		$_SESSION['PrevUrl'] = NULL;
		unset($_SESSION['MM_Username']);
		unset($_SESSION['MM_UserGroup']);
		unset($_SESSION['PrevUrl']);
		$_SESSION['MM_Username'] = $username;

		$update=$localhost2->query("UPDATE users SET username = '$username', password = '$pass', Email = '$email', firstname = '$firstname', 
			lastname = '$lastname', Birthdate = '$bday', Gender='$gen', PhoneNo = '$phoneno', Bio='$Bio', title='$T' where Adm_id= '$ADM' ");

		 echo '<script>alert("Profile updated successfully")
		var newLocation = "../AdminAccess/AdminFiles/profile.php";
		window.location = newLocation;</script>';

		
	}else	

	 echo '<script>alert("Sorry an ERROR occuredpleasetry again )
		var newLocation = "../AdminAccess/AdminFiles/profile.php";
		window.location = newLocation;</script>';	
		
}	
else
	echo '<script>alert("An ERROR occured Updating Your Profile )
		var newLocation = "../AdminAccess/AdminFiles/profile.php";
		window.location = newLocation;</script>';

?>