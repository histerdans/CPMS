<?php

include('../Connections/localhost.php');

$query = "SELECT * FROM budget";
$resultc = mysql_query($query,$localhost1);
$result=array();

while ($row = mysql_fetch_array($resultc)) {
	array_push($result, array('Budget_id'=> $row[0],
		'Ministry'=> $row[1],
		'BudgetM'=> $row[2],
		'BudgetR'=> $row[3],
		));
	echo json_encode(array("result"=>$result));






}
?>