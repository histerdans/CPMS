<?php

include('../Connections/connect.php');


if(mysqli_real_escape_string($localhost2,$_POST['Agenda_idc'])){
	$Agenda_idc=htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['Agenda_idc'])) ;
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);


if ($update=$localhost2->query("UPDATE s_complains SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_idc")) {
	header("location:../AdminAccess/AdminFiles/Q_complains.php");
exit;
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_idcr'])){
	$Agenda_idcr=htmlspecialchars(mysqli_real_escape_string($localhost2,$_POST['Agenda_idcr'])) ;
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);


if ($update=$localhost2->query("UPDATE s_corruption SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_idcr")) {
	header("location:../AdminAccess/AdminFiles/Q_corruption.php");
exit;
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_idd'])){
	$Agenda_idd=mysqli_real_escape_string($localhost2,$_POST['Agenda_idd']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_disaster SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_idd")) {
	header("location:../AdminAccess/AdminFiles/Q_disaster.php");
exit;
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_idi'])){
	$Agenda_idi=mysqli_real_escape_string($localhost2,$_POST['Agenda_idi']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_inquiries SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_idi")) {
	header("location:../AdminAccess/AdminFiles/Q_inquiry.php");
exit;
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_ids'])){
	$Agenda_ids=mysqli_real_escape_string($localhost2,$_POST['Agenda_ids']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_suggestion SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_ids")) {
	header("location:../AdminAccess/AdminFiles/Q_suggestion.php");
exit;
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_idr'])){
	$Agenda_idr=mysqli_real_escape_string($localhost2,$_POST['Agenda_idr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_recommendation SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_idr")) {
	header("location:../AdminAccess/AdminFiles/Q_recommendation.php");
exit;
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fidc'])){
	$Agenda_fidc=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidc']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_complains SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_fidc")) {
header("location:../AdminAccess/AdminFiles/f_complains.php");
exit;
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fidd'])){
	$Agenda_fidd=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidd']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_disaster SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_fidd")) {
	header("location:../AdminAccess/AdminFiles/f_disaster.php");
exit;
}

}
elseif($_POST['Agenda_fidi']){
	$Agenda_fidi=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidi']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_inquiries SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_fidi")) {
	header("location:../AdminAccess/AdminFiles/f_inquiry.php");
exit;
}

}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fids'])){
	$Agenda_fids=mysqli_real_escape_string($localhost2,$_POST['Agenda_fids']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_suggestion SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_fids")) {
header("location:../AdminAccess/AdminFiles/f_suggestion.php");
exit;
}

}
elseif($_POST['Agenda_fidr']){
	$Agenda_fidr=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_recommendation SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_fidr")) {
	header("location:../AdminAccess/AdminFiles/f_recommendation.php");
exit;
}

} 
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fidcr'])){
	$Agenda_fidcr=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidcr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$User_role=mysqli_real_escape_string($localhost2,$_POST['User_role']);
	$ministry=mysqli_real_escape_string($localhost2,$_POST['Ministry']);
	$Constituency=mysqli_real_escape_string($localhost2,$_POST['Constituency']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_corruption SET F_comment='$comment',fwd_to='$User_role',f_Ministry='$ministry',f_Constituency='$Constituency',Status='$status' WHERE Agenda_id=$Agenda_fidcr")) {
header("location:../AdminAccess/AdminFiles/f_corruption.php");
exit;
}

}
else {
echo"error updating record";

}

?>