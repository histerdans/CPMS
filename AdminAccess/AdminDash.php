<?php 
error_reporting();
require_once('../Connections/localhost.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
	session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
	$logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
	$_SESSION['MM_Username'] = NULL;
	$_SESSION['MM_UserGroup'] = NULL;
	$_SESSION['PrevUrl'] = NULL;
	unset($_SESSION['MM_Username']);
	unset($_SESSION['MM_UserGroup']);
	unset($_SESSION['PrevUrl']);
	
	$logoutGoTo = "../index.php";
	if ($logoutGoTo) {
		header("Location: $logoutGoTo");
		exit;
	}
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
	{
		if (PHP_VERSION < 6) {
			$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
		}

		$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

		switch ($theType) {
			case "text":
			$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
			break;    
			case "long":
			case "int":
			$theValue = ($theValue != "") ? intval($theValue) : "NULL";
			break;
			case "double":
			$theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
			break;
			case "date":
			$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
			break;
			case "defined":
			$theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
			break;
		}
		return $theValue;
	}
}

$colname_QA = "-1";
if (isset($_SESSION['MM_Username'])) {
	$colname_QA = $_SESSION['MM_Username'];
}
mysql_select_db($database_localhost, $localhost1);
$query_QA = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_QA, "text"));
$QA = mysql_query($query_QA, $localhost1) or die(mysql_error());
$row_QA = mysql_fetch_assoc($QA);
$totalRows_QA = mysql_num_rows($QA);
$fname=$row_QA['firstname'];
$lname=$row_QA['lastname'];
$t=$row_QA['title'];


if($_SESSION['MM_Username']!=""){
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>KCOCPS</title>
		<meta name="KCOCPS" content="Team Project" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->
		<link href="../Assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../Assets/css/bootstrap-responsive.min.css" rel="stylesheet" />

		<link rel="stylesheet" href="../Assets/css/font-awesome.min.css" />
		<!-- styles -->
		<link rel="stylesheet" href="../Assets/css/main.min.css" />
		<link rel="stylesheet" href="../Assets/css/responsive.min.css" />
		<link rel="stylesheet" href="../Assets/css/skins.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="../Assets/image/stamp.png">

	</head>
	<body>
		<div class="navbar  nav navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">

					<!-- Team Project Brand Name-->
					<div class = "span8">
						<a class="brand" href="#"><small><img src="../Assets/image/logo.png" style="position: absolute; left: 4px;top:0px;width:50px;" alt="CPMS Logo"> </img> .............. County  Online Citizens' Participation System</small> </a></div>
						<label style="position: absolute; left: 890px;top:34px;width:300px; color:#efd506;"><?php echo $t;?>&nbsp;<?php echo $fname; ?>&nbsp;<?php echo $lname; ?> </label>
						<ul class="nav ace-nav pull-right"><p>
							<li class="light-blue user-profile">


								<a class="user-menu dropdown-toggle badge-tooltip-error" title="Click the OFF icon to Make changes to your profile and/or log out the system to user Homepage" href="AdminDash.php" data-toggle="dropdown">

									<span id="user_info">
										<small>Welcome Back &nbsp;&nbsp;&nbsp;<i class=" icon-off"></i><br/><?php echo $row_QA['username']; ?> </small> 

									</span>

								</a>
								<ul id="user_menu" class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
									<li>
										<a href="AdminFiles/profile.php">
											<i class="icon-user icon-white"></i>
											<span>Profile</span>

										</a>
									</li>
									<li class="divider"></li>
									<li><a href="<?php echo $logoutAction ?>"><i class="icon-off"></i> Logout</a></li>
								</ul>
							</li></p>
						</ul>
					</div></div></div>

					<div class="container-fluid" id="main-container">
						<a href="AdminDash.php" id="menu-toggler"><span></span></a><!-- menu toggler -->

						<div id="sidebar">
							<div class="media user-media hidden-phone">
								<a href="" class="user-link">
									<img src="<?php echo $row_QA['img']; ?>" alt="<?php echo $row_QA['firstname']; ?>" class="media-object img-polaroid user-img" width="40px">
									<span class="label user-label"></span>
								</a>
								<div class="media-body hidden-tablet">
									<h5 class="media-heading"></h5>
									<ul class="unstyled user-info">
										<li>Logged in as:<br/><?php echo $row_QA['user_role'];
										$role=$row_QA['user_role'];
										$dep=$row_QA['Department'];?><br/><?php echo $dep ?></li>
										<li class="divider"></li>
										<li><br/>Today's Date<small><i class="icon-calendar"></i></small><br/><?php
											$dt = new Datetime();
											echo $dt->format('d-m-Y');
											?>
											<li class="divider"></li>
										</ul>
									</div>
								</div>
								<div id="sidebar-shortcuts">
									<div id="sidebar-shortcuts-large">
										<i class="icon-leaf">KCOCPS</i>
									</div>
									<div id="sidebar-shortcuts-mini">
										<i class="icon-leaf">KCOCPS</i>
									</div>
								</div><!-- #sidebar-shortcuts -->


								<ul class="nav nav-list">

									<li class="active">
										<a href="AdminDash.php" class="dropdown-toggle badge-tooltip-error" title="Your Dashboard, Contains all the new Notification">
											<i class="icon-dashboard"></i>
											<span>Dashboard</span>

										</a>
									</li>
									<li>
										<a href="#report" data-toggle="modal">
											<i class="icon-filter"></i>
											<span>Generate Report</span>

										</a>

									</a>
								</li>
								<li>
									<a href="AdminDash.php" class="dropdown-toggle dropdown-toggle badge-tooltip-error" title="Tables of Recent forwarded Agendas" >
									<i class="icon-globe"></i>
										<span>Forwarded Agendas</span>
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
										<li><a href="AdminFiles/f_complains.php"><i class="icon-double-angle-right"></i>Complains</a></li>
										<li><a href="AdminFiles/f_suggestion.php"><i class="icon-double-angle-right"></i>Suggestions</a></li>
										<li><a href="AdminFiles/f_inquiry.php"><i class="icon-double-angle-right"></i>Inquiries</a></li>
										<li><a href="AdminFiles/f_recommendation.php"><i class="icon-double-angle-right"></i>Recommendations</a></li>
										<li><a href="AdminFiles/f_corruption.php"><i class="icon-double-angle-right"></i>Reported Corruption</a></li>
										<li><a href="AdminFiles/f_disaster.php"><i class="icon-double-angle-right"></i>Reported Disasters</a></li>
									</ul>
								</li>
							<li>
									<a href="index.html#" class="dropdown-toggle" >
										<i class="icon-bar-chart"></i>
										<span>Resource Managenment</span>
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">

										<li><?php echo "<a href=\"Activity/A3.php?Dep=$dep\">"; echo '<i class="icon-double-angle-right"></i>Resource Allocation</a>';?></li>
										<li><?php echo "<a href=\"AdminFiles/PCEC.php?Dep=$dep\">"; echo '<i class="icon-double-angle-right"></i>Project Planning</a>';?></li>


									</ul>
								</li>
									
									
									
								</ul><!--/.nav-list-->

								<div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


							</div><!--/#sidebar-->


							<div id="main-content" class="clearfix">

								<div id="breadcrumbs">
									<ul class="breadcrumb">
										<li><i class="icon-home"></i> <a href="#">Home</a><span class="divider"><i class="icon-angle-right"></i></span></li>
										<li class="active">Dashboard</li>
									</ul><!--.breadcrumb-->
								</div><!--#breadcrumbs-->



								<div id="page-content" class="clearfix">

									<div class="page-header position-relative">
										<h1>Dashboard <small><i class="icon-double-angle-right"></i> overview & status</small></h1>
									</div><!--/page-header-->

									<!-- PAGE CONTENT BEGINS HERE -->
									<div class="alert alert-block alert-success">
										<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
										<i class="icon-ok green"></i> Welcome to <strong class="green">County  Permomance and Monitoring System <small>(CPMS)</small></strong>,
										County  Permomance and Monitoring System (CPMS) is a public system that allows the county government to monitor and access their services rendered to the .............. Community. It allows the public to participate by connecting and passing their complains, inquiries or opinions anonymously thus creation of a democratic channel of management of the county resources.
									</div>
									<?php 		include_once('../Connections/localhost.php'); 
									$resultc = mysql_query("SELECT * FROM s_complains where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep'");
									$comp =mysql_num_rows($resultc);
									$resultcr = mysql_query("SELECT * FROM s_corruption where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep'");
									$corr =mysql_num_rows($resultcr);
									$resulti = mysql_query("SELECT * FROM s_inquiries where Q_comment ='' AND fwd_to='$role' AND f_Ministry='$dep'");
									$inqr =mysql_num_rows($resulti);
									$results = mysql_query("SELECT * FROM s_suggestion  where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep'");
									$sugg =mysql_num_rows($results);
									$resultr = mysql_query("SELECT * FROM s_recommendation  where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep'");
									$recmm =mysql_num_rows($resultr);
									$resultd = mysql_query("SELECT * FROM s_disaster where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep'");
									$dis =mysql_num_rows($resultd);
									?>
									<a class="muted" href="#comp" data-toggle="tab">
										<div class="infobox infobox-red">
											<div class="infobox-icon"><i class="icon-comments-alt" ></i></div>
											<div class="infobox-data" >
												<span class="infobox-data-number"><?php echo $comp?></span>
												<span class="infobox-content">New Complains</span>
											</div>

										</div></a>


										<a class="muted" href="#sugg" data-toggle="tab">
											<div class="infobox infobox-blue">
												<div class="infobox-icon"><i class=" icon-exclamation-sign"></i></div>
												<div class="infobox-data">
													<span class="infobox-data-number"><?php echo $sugg?></span>
													<span class="infobox-content">New Suggestions</span>
												</div>
											</div></a>

											<a class="muted" href="#inqr" data-toggle="tab">
												<div class="infobox infobox-pink">
													<div class="infobox-icon"><i class="icon-info-sign"></i></div>
													<div class="infobox-data">
														<span class="infobox-data-number"><?php echo $inqr?></span>
														<span class="infobox-content">New Inquiries</span>
													</div>
												</div></a>



												<a class="muted" href="#recmm" data-toggle="tab">
													<div class="infobox infobox-red">
														<div class="infobox-icon"><i class=" icon-lightbulb"></i></div>
														<div class="infobox-data">
															<span class="infobox-data-number"><?php echo $recmm?></span>
															<span class="infobox-content">New Recommendations</span>
														</div>
													</div></a>

													<a class="muted" href="#disas" data-toggle="tab">
														<div class="infobox infobox-red">
															<div class="infobox-icon"><i class="icon-fire"></i></div>
															<div class="infobox-data">
																<span class="infobox-data-number"><?php echo $dis?></span>
																<span class="infobox-content">New Disasters<br/>Reported</span>
															</div>
														</div></a>
														<a class="muted" href="#corr" data-toggle="tab">
															<div class="infobox infobox-red">
																<div class="infobox-icon"><i class="icon-fire"></i></div>
																<div class="infobox-data">
																	<span class="infobox-data-number"><?php echo $corr?></span>
																	<span class="infobox-content">New Corruptions<br/>Reported</span>
																</div>
															</div></a>

														</div>

														<!--/#page-content-->
														<div class="span11">

															<div class="widget-box transparent">

																<div class="widget-body">
																	<div class="widget-main no-padding">
																		<div class="tab-content no-padding">

																			<div id="comp" class="tab-pane">
																				<div class="widget-header">
																					<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Complains</h4>
																				</div>
																				<?php
																				$query = "SELECT * FROM s_complains where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep' order by date_saved desc ";
																				$resultc = mysql_query($query,$localhost1);
																				while($row=mysql_fetch_array($resultc)){ 

																					$date_saved=$row['date_saved'];
																					$issue=$row['issue'];
																					$message=$row['description'];

																					echo		'<div id="task-tab" class="tab-pane active">';
																					echo			'<div class="itemdiv dialogdiv"><br>';
																					echo			'<div class="user">';
																					echo						'<img alt="Avatar" src="../Assets/image/avatar2.png" />';
																					echo			'</div>';
																					echo		'<div class="body">';
																					echo '<div class="time"><i class="icon-time"></i> <span class="green">'.$date_saved.'</span>
																				</div>';
																				echo '<div class = "name"><span class="label label-info arrowed arrowed-in-right">'.$issue .'</span></div>';
																				echo '<div class="text">'.$message .'</div>';
																				echo '<div class="tools">
																				<a href="AdminFiles/f_complains.php" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
																			</div>';
																			echo '</div>';
																			echo '</div>';
																			echo '</div>';

																		} 
																		?> 
																	</div>
																	<div id="disas" class="tab-pane">
																		<div class="widget-header">
																			<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Disaster Reports</h4>
																		</div>
																		<?php
																		$query = "SELECT * FROM s_disaster where Q_comment = ''AND fwd_to='$role' AND f_Ministry='$dep'  order by date_saved desc";
																		$resultd = mysql_query($query, $localhost1);
																		while($row=mysql_fetch_array($resultd)){ 

																			$date_saved=$row['date_saved'];
																			$issue=$row['issue'];
																			$message=$row['description'];

																			echo		'<div id="task-tab" class="tab-pane active">';
																			echo			'<div class="itemdiv dialogdiv"><br>';
																			echo			'<div class="user">';
																			echo						'<img alt="Avatar" src="../Assets/image/avatar2.png" />';
																			echo			'</div>';
																			echo		'<div class="body">';
																			echo '<div class="time"><i class="icon-time"></i> <span class="green">'.$date_saved.'</span>
																		</div>';
																		echo '<div class = "name"><span class="label label-info arrowed arrowed-in-right">'.$issue .'</span></div>';
																		echo '<div class="text">'.$message .'</div>';
																		echo '<div class="tools">
																		<a href="AdminFiles/f_disaster.php" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
																	</div>';
																	echo '</div>';
																	echo '</div>';
																	echo '</div>';

																} 
																?> 
															</div>
															<div id="inqr" class="tab-pane">
																<div class="widget-header">
																	<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Inquiries</h4>
																</div>
																<?php
																$query = "SELECT * FROM s_inquiries where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep' order by date_saved desc ";
																$resulti = mysql_query($query,$localhost1);

																while($row=mysql_fetch_array($resulti)){ 

																	$date_saved=$row['date_saved'];
																	$issue=$row['issue'];
																	$message=$row['description'];

																	echo		'<div id="task-tab" class="tab-pane active">';
																	echo			'<div class="itemdiv dialogdiv"><br>';
																	echo			'<div class="user">';
																	echo						'<img alt="Avatar" src="../Assets/image/avatar2.png" />';
																	echo			'</div>';
																	echo		'<div class="body">';
																	echo '<div class="time"><i class="icon-time"></i> <span class="green">'.$date_saved.'</span>
																</div>';
																echo '<div class = "name"><span class="label label-info arrowed arrowed-in-right">'.$issue .'</span></div>';
																echo '<div class="text">'.$message .'</div>';
																echo '<div class="tools">
																<a href="AdminFiles/f_inquiry.php" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
															</div>';
															echo '</div>';
															echo '</div>';
															echo '</div>';

														} 
														?> 
													</div>
													<div id="recmm" class="tab-pane">
														<div class="widget-header">
															<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Recommendations</h4>
														</div>
														<?php
														$query = "SELECT * FROM s_recommendation where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep'  order by date_saved desc  ";
														$resultr = mysql_query($query,$localhost1);
														while($row=mysql_fetch_array($resultr)){ 

															$date_saved=$row['date_saved'];
															$issue=$row['issue'];
															$message=$row['description'];

															echo		'<div id="task-tab" class="tab-pane active">';
															echo			'<div class="itemdiv dialogdiv"><br>';
															echo			'<div class="user">';
															echo						'<img alt="Avatar" src="../Assets/image/avatar2.png" />';
															echo			'</div>';
															echo		'<div class="body">';
															echo '<div class="time"><i class="icon-time"></i> <span class="green">'.$date_saved.'</span>
														</div>';
														echo '<div class = "name"><span class="label label-info arrowed arrowed-in-right">'.$issue .'</span></div>';
														echo '<div class="text">'.$message .'</div>';
														echo '<div class="tools">
														<a href="AdminFiles/f_recommendation.php" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
													</div>';
													echo '</div>';
													echo '</div>';
													echo '</div>';

												}?> 
											</div>
											<div id="sugg" class="tab-pane">
												<div class="widget-header">
													<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Suggestions</h4>
												</div>
												<?php
												$query = "SELECT * FROM s_suggestion where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep' order by date_saved desc  ";
												$results = mysql_query($query,$localhost1);
												while($row=mysql_fetch_array($results)){ 

													$date_saved=$row['date_saved'];
													$issue=$row['issue'];
													$message=$row['description'];

													echo		'<div id="task-tab" class="tab-pane active">';
													echo			'<div class="itemdiv dialogdiv"><br>';
													echo			'<div class="user">';
													echo						'<img alt="Avatar" src="../Assets/image/avatar2.png" />';
													echo			'</div>';
													echo		'<div class="body">';
													echo '<div class="time"><i class="icon-time"></i> <span class="green">'.$date_saved.'</span>
												</div>';
												echo '<div class = "name"><span class="label label-info arrowed arrowed-in-right">'.$issue .'</span></div>';
												echo '<div class="text">'.$message .'</div>';
												echo '<div class="tools">
												<a href="AdminFiles/f_suggestion.php" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
											</div>';
											echo '</div>';
											echo '</div>';
											echo '</div>';

										}  ?> 
									</div>
									<div id="corr" class="tab-pane">
										<div class="widget-header">
											<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Corruption</h4>
										</div>
										<?php
										$query = "SELECT * FROM s_corruption where Q_comment = '' AND fwd_to='$role' AND f_Ministry='$dep'  order by date_saved desc  ";
										$results = mysql_query($query,$localhost1);
										while($row=mysql_fetch_array($results)){ 

											$date_saved=$row['date_saved'];
											$issue=$row['issue'];
											$message=$row['description'];

											echo		'<div id="task-tab" class="tab-pane active">';
											echo			'<div class="itemdiv dialogdiv"><br>';
											echo			'<div class="user">';
											echo						'<img alt="Avatar" src="../Assets/image/avatar2.png" />';
											echo			'</div>';
											echo		'<div class="body">';
											echo '<div class="time"><i class="icon-time"></i> <span class="green">'.$date_saved.'</span>
										</div>';
										echo '<div class = "name"><span class="label label-info arrowed arrowed-in-right">'.$issue .'</span></div>';
										echo '<div class="text">'.$message .'</div>';
										echo '<div class="tools">
										<a href="AdminFiles/f_corruption.php" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
									</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';

								}  ?> 
							</div>

						</div>
					</div>
				</div>

				<!--/widget-body-->

			</div><!--/widget-box-->
		</div><!--/span-->
		
		<!--/#page-content-->

		<!-- PAGE CONTENT ENDS HERE -->


		<script type="text/javascript">
			window.jQuery || document.write("<script src='../Assets/js/jquery-1.10.2.min.js'>\x3C/script>");
		</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<script src="../Assets/js/bootstrap.min.js"></script>

		<!--scripts -->
		<script src="../Assets/js/ace-elements.min.js"></script>
		<script src="../Assets/js/ace.min.js"></script>
		<script src="../Assets/js/date.js"></script>
		<script src="../Assets/js/jquery.slimscroll.min.js"><?php
			mysql_free_result($QA);
		}
		else
			echo '<script>alert("You are not logged in please login to proceed")
		var newLocation = "../AdminAccess/login.php";
		window.location = newLocation;</script>';
		?>
	</script>
</body>
</html>
	<?php include("../Assets/rptmodal.php"); ?>