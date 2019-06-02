<?php include("../../Assets/Aheader.php"); 
?>


		<div id="main-content" class="clearfix">
			<div id="page-content" class="clearfix">

				<div class="page-header position-relative">
					<h1> <small><i class="icon-double-angle-right"></i> overview & status</small></h1>
				</div><!--/page-header-->
				<div class="row-fluid">

					<div class="table-header">
						Results for "Latest Suggestions Passed"
					</div>

					<table id="table_QA" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Subject</th>
								<th>Constituency</th>
								<th>Ward</th>
								<th class="hidden-480">Description</th>
<th>comment</th>
						<th>Status</th>
						<th>Action By</th>
						<th>Tasks</th>							</tr>
						</thead>

						<tbody>
							<?php

require_once('../../Connections/connect.php');
							$query = "SELECT * FROM s_suggestion order by date_saved desc";
										$result = $localhost2->query($query);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
								$Agenda_ids = $row['Agenda_id'];
								$Constituency=$row['Constituency'];
								$ward=$row['Ward'];
								$date_saved=$row['date_saved'];
								$comment=$row['Q_comment'];
								$descrp=$row['description'];
								$status=$row['Status'];
								$issue=$row['issue'];
								$resp=$row['Responded_by'];
								$fwd=$row['fwd_to'];
								$fmnsty=$row['f_Ministry'];
								$fcont=$row['f_Constituency'];




								echo '<tr>';
								echo	'<td>'.$Agenda_ids.'</td>';
								echo	'<td>'.$issue.'</td>';
								echo	'<td>'.$Constituency.'</td>';
								echo	'<td>'.$ward.'</td>';
								echo'<td class="hidden-480">'.$descrp.'</td>';

						echo'<td>'.$comment.'</td>';?>
						<td><span class="label label-success arrowed-in arrowed-in-right"><?php echo $status ;?></span></td>
						<td><span class="label label-info arrowed-right arrowed-in">Replied by:</span><?php echo $resp ;?><span class="label label-info arrowed-right arrowed-in"> Forwaded to:</span><?php echo "$fwd" .$fmnsty." .." .$fcont ;?></td>
						<?php 
								echo	'<td>';echo		'<div class="hidden-phone visible-desktop btn-group">';
								echo "<a href=\"replys.php?Agenda_ids=$Agenda_ids\">";
								echo			'<button class="btn btn-mini btn-success"><i class="icon-ok">Reply</i></button>';
								echo "</a>";
								echo "<a href=\"forwards.php?Agenda_ids=$Agenda_ids\">";
								echo			'<button class="btn btn-mini btn-info"><i class="icon-edit">forward</i></button>';
								echo "</a>";
								echo "<a href=\"../../Apps/connDel.php?Agenda_ids=$Agenda_ids\">";?>
								<button class="btn btn-mini btn-danger" onclick="return confirm('Once deleted cannot be retrieved')"><i class = "icon-trash">Delete</i></button>
								<?php  echo "</a>";

								echo		'</div>';
								echo	'</td>';
								echo'</tr>';


							} }?>
						</tbody>
					</table>

					<!-- Modal HTML -->



				</div>




				<!-- PAGE CONTENT ENDS HERE -->
				<?php include("../../Assets/Afooter.php"); ?>
