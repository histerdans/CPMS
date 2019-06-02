<?php

include('../Connections/localhost.php');


if(isset($_GET['ID'])){
	$id=$_GET['ID'];
	$sql="SELECT * from notifications where ID='$id'";

	$query=mysql_query($sql,$localhost1);
	while ($row = mysql_fetch_array($query)) {


		$fname=$row['FName'];
		$lname=$row['LName'];
		$username=$row['Username'];
		$email=$row['Email'];
		$pname=$row['Project_Name'];
		$Date_s=$row['Date_s'];
		$password=$row["Password"];
		$company=$row['Company'];
		$urole=$row['User_role'];
		$min=$row['Ministry'];
		$sta=1;




		$insert = "INSERT INTO users(username,password,Email,Company,Project_Name,Department,firstname,lastname,user_role)VALUES('$username','$password','$email','$company','$pname','$min','$fname','$lname','$urole')";

		mysql_query($insert,$localhost1);

		$update=" UPDATE notifications SET status='$sta' where username='$username'";
		mysql_query($update,$localhost1);


		
		echo '<script>alert("User Registerded Successfully")
		var newLocation = "../AdminAccess/AdminFiles/users.php";
		window.location = newLocation;</script>';
		exit;


	}
}
else
	echo"error updating record";

?>