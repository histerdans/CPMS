<?php include("../../Assets/AheaderP.php"); 
?>

<div id="main-content" class="clearfix">
	<div id="page-content" class="clearfix">

		<div class="page-header position-relative">
			<h1> <small><i class="icon-double-angle-right"></i> overview & status</small></h1>
		</div><!--/page-header-->
		<div class="row-fluid">
			
			<div class="table-header">
				Results for "Latest Complains Passed"
			</div>
			
			<table id="table_Progress" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="hidden-480">Project ID</th>
						<th>Project Name</th>
						<th>Project Description</th>
						<th>Ministry</th>
						<th>Constituency</th>
						<th>Ward</th>
						<th>Supervisor</th>
						<th>Progress %</th>
						
					</tr>
				</thead>

				<tbody>
					<?php
					require_once('../../Connections/connect.php');
					
					$query = "SELECT * FROM activity order by Project_ID asc";
					$result = $localhost2->query($query);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
							$Project_id = $row['Project_ID'];
							$PName=$row['Project_Name'];
							$PDescr=$row['Project_Description'];
							$Constituency=$row['Constituency'];
							$ward=$row['Ward'];
							$Ministry=$row['Ministry'];
							$Fname=$row['FNsup'];
							$Lname=$row['LNsup'];
							$Supervisor=$Lname.' '.$Fname;
							$progress=$row['Progress'];




							echo '<tr>';
							echo'<td>'.$Project_id.'</td>';
							echo'<td class="hidden-480">'.$PName.'</td>';
							echo'<td class="hidden-480">'.$PDescr.'</td>';
							echo'<td class="hidden-480">'.$Ministry.'</td>';
							echo'<td>'.$Constituency.'</td>';
							echo'<td>'.$ward.'</td>';

							echo'<td class="hidden-480">'.$Supervisor.'</td>';
							echo'<td class="hidden-480">'.$progress.'</td>';
							
							echo'</tr>';


						} }?>
					</tbody>
				</table>

				<!-- Modal HTML -->



			</div>




			<!-- PAGE CONTENT ENDS HERE -->
			<?php include("../../Assets/Afooter.php"); ?>
