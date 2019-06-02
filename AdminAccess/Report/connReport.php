<?php
if ($_POST) {
	$agenda=$_POST['category'];
	$select=$_POST['selection'];
	
	if ($agenda=="Complains" && $select=="Pending") {
	header("location:Pcomplain.php");
exit;
	}
	elseif ($agenda=="Disaster" && $select=="Pending") {
	header("location:Pdisaster.php");
exit;
	}
	elseif ($agenda=="Recommendations" && $select=="Pending") {
	header("location:Precommendation.php");
exit;
	}
	elseif ($agenda=="Suggestions" && $select=="Pending") {
	header("location:Psuggestion.php");
exit;
	}
	elseif ($agenda=="Inquiries" && $select=="Pending") {
	header("location:Pinquiry.php");
exit;
	}
		elseif ($agenda=="Complains" && $select=="Replied") {
	header("location:Rcomplain.php");
exit;
	}
		elseif ($agenda=="Disaster" && $select=="Replied") {
	header("location:Rdisaster.php");
exit;
	}
		elseif ($agenda=="Recommendations" && $select=="Replied") {
	header("location:Rrecommendation.php");
exit;
	}
		elseif ($agenda=="Suggestions" && $select=="Replied") {
	header("location:Rsuggestion.php");
exit;
	}
		elseif ($agenda=="Inquiries" && $select=="Replied") {
	header("location:Rinquiry.php");
exit;
	}
		

}


?>