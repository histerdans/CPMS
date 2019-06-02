<?php

include('../Connections/connect.php');


if(mysqli_real_escape_string($localhost2,$_POST['Agenda_idc'])){
	$Agenda_idc=mysqli_real_escape_string($localhost2,$_POST['Agenda_idc']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_complains SET Q_comment='$comment', Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_idc limit 2")) {
	header("location:../AdminAccess/AdminFiles/Q_complains.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_idcr'])){
	$Agenda_idcr=mysqli_real_escape_string($localhost2,$_POST['Agenda_idcr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_corruption SET Q_comment='$comment', Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_idcr limit 2")) {
	header("location:../AdminAccess/AdminFiles/Q_corruption.php");
exit;
}
}

elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_idd'])){
	$Agenda_idd=mysqli_real_escape_string($localhost2,$_POST['Agenda_idd']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_disaster SET Q_comment='$comment' ,Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_idd limit 2")) {
	header("location:../AdminAccess/AdminFiles/Q_disaster.php");
exit;
}
}

elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_idi'])){
	$Agenda_idi=mysqli_real_escape_string($localhost2,$_POST['Agenda_idi']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_inquiries SET Q_comment='$comment',Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_idi limit 2")) {
header("location:../AdminAccess/AdminFiles/Q_inquiry.php");
exit;	
}
}

elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_ids'])){
	$Agenda_ids=mysqli_real_escape_string($localhost2,$_POST['Agenda_ids']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_suggestion SET Q_comment='$comment',Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_ids limit 2")) {
	header("location:../AdminAccess/AdminFiles/Q_suggestion.php");
exit;
}
}

elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_idr'])){
	$Agenda_idr=mysqli_real_escape_string($localhost2,$_POST['Agenda_idr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_recommendation SET Q_comment='$comment',Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_idr limit 2")) {
	header("location:../AdminAccess/AdminFiles/Q_recommendation.php");
exit;
}
}

elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_lidc'])){
	$Agenda_lidc=mysqli_real_escape_string($localhost2,$_POST['Agenda_lidc']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_complains SET Q_comment='$comment', Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_lidc limit 2")) {
	header("location:../AdminAccess/AdminFiles/L_complain.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_lidcr'])){
	$Agenda_lidcr=mysqli_real_escape_string($localhost2,$_POST['Agenda_lidcr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_corruption SET Q_comment='$comment', Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_lidcr limit 2")) {
	header("location:../AdminAccess/AdminFiles/L_corruption.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_lids'])){
	$Agenda_lids=mysqli_real_escape_string($localhost2,$_POST['Agenda_lids']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_suggestion SET Q_comment='$comment', Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_lids limit 2")) {
	header("location:../AdminAccess/AdminFiles/L_suggestion.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_lidr'])){
	$Agenda_lidr=mysqli_real_escape_string($localhost2,$_POST['Agenda_lidr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_recommendation SET Q_comment='$comment', Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_lidr limit 2")) {
	header("location:../AdminAccess/AdminFiles/L_recommendation.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_lidi'])){
	$Agenda_lidi=mysqli_real_escape_string($localhost2,$_POST['Agenda_lidi']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_inquiries SET Q_comment='$comment', Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_lidi limit 2")) {
	header("location:../AdminAccess/AdminFiles/L_inquiry.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_lidd'])){
	$Agenda_lidd=mysqli_real_escape_string($localhost2,$_POST['Agenda_lidd']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_disaster SET Q_comment='$comment', Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_lidd limit 2")) {
	header("location:../AdminAccess/AdminFiles/L_disaster.php");
exit;
}
}


elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fidc'])){
	$Agenda_fidc=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidc']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=$_POST['Status'];

if ($update=$localhost2->query("UPDATE s_complains SET Q_comment='$comment' , Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_fidc limit 2")) {
header("location:../AdminAccess/AdminFiles/f_complains.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fidcr'])){
	$Agenda_fidcr=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidcr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_corruption SET Q_comment='$comment' , Responded_by='$role',Status='$status' WHERE Agenda_id=$Agenda_fidcr limit 2")) {
header("location:../AdminAccess/AdminFiles/f_corruption.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fidd'])){
	$Agenda_fidd=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidd']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_disaster SET Q_comment='$comment', Responded_by='$role',Status='$status'  WHERE Agenda_id=$Agenda_fidd limit 2")) {
	header("location:../AdminAccess/AdminFiles/f_disaster.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fidi'])){
	$Agenda_fidi=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidi']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_inquiries SET Q_comment='$comment', Responded_by='$role',Status='$status'  WHERE Agenda_id=$Agenda_fidi limit 2")) {
	header("location:../AdminAccess/AdminFiles/f_inquiry.php");
exit;
}


}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fids'])){
	$Agenda_fids=mysqli_real_escape_string($localhost2,$_POST['Agenda_fids']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);
if ($update=$localhost2->query("UPDATE s_suggestion SET Q_comment='$comment', Responded_by='$role',Status='$status'  WHERE Agenda_id=$Agenda_fids limit 2")) {
	header("location:../AdminAccess/AdminFiles/f_suggestion.php");
exit;
}
}
elseif(mysqli_real_escape_string($localhost2,$_POST['Agenda_fidr'])){
	$Agenda_fidr=mysqli_real_escape_string($localhost2,$_POST['Agenda_fidr']);
	$comment=mysqli_real_escape_string($localhost2,$_POST['Qcomment']);
	$role=mysqli_real_escape_string($localhost2,$_POST['role']);
	$status=mysqli_real_escape_string($localhost2,$_POST['Status']);

if ($update=$localhost2->query("UPDATE s_recommendation SET Q_comment='$comment', Responded_by='$role',Status='$status'  WHERE Agenda_id=$Agenda_fidr limit 2")) {
	
header("location:../AdminAccess/AdminFiles/f_recommendation.php");
exit;
}
}

else
echo"error updating record";

?>