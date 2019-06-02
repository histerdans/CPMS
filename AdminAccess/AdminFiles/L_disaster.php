
<?php include("../../Assets/Aheaderl.php");?>

<div id="main-content" class="clearfix">
	<div id="page-content" class="clearfix">

		<div class="page-header position-relative">
			<h1> <small><i class="icon-double-angle-right"></i> overview & status</small></h1>
		</div><!--/page-header-->
		<div class="row-fluid">
			
			<div class="table-header">
				Results for "Latest Disasters Reported"
			</div>
			
			<table id="table_AD1" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Date</th>
						<th>Subject</th>
						<th>Constituency</th>
						<th>Ward</th>
						<th class="hidden-480">Description</th>
						<th>comment</th>
						<th>Tasks</th>
						
					</tr>
				</thead>

				<tbody>
					<?php

					
					$query = "SELECT * FROM s_disaster where  fwd_to='$role' AND Q_comment='' AND f_Constituency='$cont' order by Agenda_id desc ";
					$results = mysql_query($query,$localhost1);
					while ($row = mysql_fetch_array($results)) {
						$Agenda_lidd = $row['Agenda_id'];
						$Constituency=$row['Constituency'];
						$ward=$row['Ward'];
						$date_saved=$row['date_saved'];
						$comment=$row['Q_comment'];
						$descrp=$row['description'];
						$issue=$row['issue'];





						echo '<tr>';
						echo	'<td>'.$Agenda_lidd.'</td>';
						echo	'<td>'.$date_saved.'</td>';
						echo	'<td>'.$issue.'</td>';
						echo	'<td>'.$Constituency.'</td>';
						echo	'<td>'.$ward.'</td>';
						echo	'<td class="hidden-480">'.$descrp.'</td>';

						echo    '<td>'.$comment.'</td>';
						echo	'<td>';
						echo		'<div class="hidden-phone visible-desktop btn-group">';
						echo "<a href=\"replydl.php?Agenda_lidd=$Agenda_lidd\">";
						echo			'<button class="btn btn-mini btn-success"><i class="icon-ok">Reply</i></button>';
						echo "</a>";
						

						echo		'</div>';
						echo	'</td>';
						
						echo'</tr>';


					} ?>
				</tbody>
			</table>

			<!-- Modal HTML -->



		</div>




		<!-- PAGE CONTENT ENDS HERE -->
		<?php include("../../Assets/Afooter.php"); ?>

		