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
	$_SESSION['MM_projectid']=NULL;
	unset($_SESSION['MM_Username']);
	unset($_SESSION['MM_UserGroup']);
	unset($_SESSION['PrevUrl']);
	unset($_SESSION['MM_projectid']);
	
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
	$MMID=$_SESSION['MM_projectid'];
}
mysql_select_db($database_localhost, $localhost1);
$query_QA = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_QA, "text"));
$QA = mysql_query($query_QA, $localhost1) or die(mysql_error());
$row_QA = mysql_fetch_assoc($QA);
$totalRows_QA = mysql_num_rows($QA);
$fname=$row_QA['firstname'];
$lname=$row_QA['lastname'];
$t=$row_QA['title'];
$min=$row_QA['Department'];
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


								<a class="user-menu dropdown-toggle badge-tooltip-error" title="Click the OFF icon to Make changes to your profile and/or log out the system to user Homepage" href="QA.php" data-toggle="dropdown">

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
						<a href="QA.php" id="menu-toggler"><span></span></a><!-- menu toggler -->

						<div id="sidebar">
							<div class="media user-media hidden-phone">
								<a href="" class="user-link">
									<img src="<?php echo $row_QA['img']; ?>" alt="<?php echo $row_QA['firstname']; ?>" class="media-object img-polaroid user-img" width="40px">
									<span class="label user-label"></span>
								</a>
								<div class="media-body hidden-tablet">
									<h5 class="media-heading"></h5>
									<ul class="unstyled user-info">
										<li>Logged in as: <br/><?php echo $row_QA['user_role'];
											$min=$row_QA['Department']; ?><br/><?php echo $min;?></li>
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

										<li >
											<a href="ActivityA.php">
												<i class="icon-dashboard"></i>
												<span>Dashboard</span>

											</a>
										</li>
										<li>
											<a href="index.html#" class="dropdown-toggle" >
												<i class="icon-bar-chart"></i>
												<span>Resource Managenment</span>
												<b class="arrow icon-angle-down"></b>
											</a>
											<ul class="submenu">
												<li><a href="Activity/A5.php"><i class="icon-double-angle-right"></i>Budget Allocation</a></li>
												<li><a href="AdminFiles/Budgettlb.php"><i class="icon-double-angle-right"></i>Budget Details</a></li>

											</ul>
										</li>
									</ul><!--/.nav-list-->

									<div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


								</div><!--/#sidebar-->



							</div><!--/#sidebar-->


							<div id="main-content" class="clearfix">

								<div id="breadcrumbs">
									<ul class="breadcrumb">
										<li><i class="icon-home"></i> <a href="#">Dashboard</a><span class="divider"><i class="icon-angle-right"></i></span></li>
										<li class="active">Activity Feed</li>
									</ul><!--.breadcrumb-->
								</div><!--#breadcrumbs-->



								<div id="page-content" class="clearfix">

									<div class="page-header position-relative">
										<h1>Activity Feed<small><i class="icon-double-angle-right"></i>Performance</small></h1>
									</div><!--/page-header-->

									<!-- PAGE CONTENT BEGINS HERE -->

									<?php

									require_once('../Connections/localhost.php');  
									



									$result = mysql_query("SELECT * FROM budget 
										");
									while($row = mysql_fetch_array($result))
									{

										$BM = $row['BudgetM']; 
										$BR = $row['BudgetR']; 
										$Depart= $row['Ministry'];



									}?>

									<div class="span6">
										<a class="muted" href="#comp" data-toggle="tab">
											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right"><?php echo $comp?>%</span>
											</div>
											<div class="progress progress-striped ">
												<div class="bar bar-success" style="width: 35%;" data-percent="70%"></div>
												<div class="bar bar-inverse" style="width: 20%;"></div>
												<div class="bar bar-danger " style="width: 10%;"></div>
												<div class="bar bar-warning" style="width: 20%;"></div>
											</div>
										</a>


										<a class="muted" href="#sugg" data-toggle="tab">

											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">$corr%</span>
											</div>
											<div class="progress ">
												<div class="bar bar-success" style="width: 35%;"></div>
												<div class="bar bar-inverse" style="width: 20%;"></div>
												<div class="bar bar-danger " style="width: 10%;"></div>
												<div class="bar bar-warning" style="width: 20%;"></div>
											</div>


										</a>

										<a class="muted" href="#inqr" data-toggle="tab">

											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress progress-striped">
												<div class="bar bar-success" style="width: 35%;"></div>
												<div class="bar bar-inverse" style="width: 20%;"></div>
												<div class="bar bar-danger " style="width: 10%;"></div>
												<div class="bar bar-warning" style="width: 20%;"></div> 
											</div>

										</a>



										<a class="muted" href="#recmm" data-toggle="tab">


											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress progress-striped ">
												<div class="bar bar-success" style="width: 35%;"></div>
												<div class="bar bar-inverse" style="width: 20%;"></div>
												<div class="bar bar-danger " style="width: 10%;"></div>
												<div class="bar bar-warning" style="width: 20%;"></div>
											</div>

										</a>

										<a class="muted" href="#disas" data-toggle="tab">


											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress progress-striped">
												<div class="bar bar-success" style="width: 35%;"></div>
												<div class="bar bar-inverse" style="width: 20%;"></div>
												<div class="bar bar-danger " style="width: 10%;"></div>
												<div class="bar bar-warning" style="width: 20%;"></div>
											</div>

										</a>
										<a class="muted" href="#corr" data-toggle="tab">


											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress ">
												<div class="bar bar-success" style="width: 35%;" data-percent="70%"></div>
												<div class="bar bar-inverse" style="width: 20%;"></div>
												<div class="bar bar-danger " style="width: 10%;"></div>
												<div class="bar bar-warning" style="width: 20%;"></div>


											</div>

										</a>



									</div>

								</div>

								<!--/#page-content-->
								<div class="span11">

									<div class="widget-box transparent">

										<div class="widget-body">
											<div class="widget-main no-padding">
												<div class="tab-content no-padding">

													<div id="comp" class="tab-pane">
														<div class="widget-header">
															<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Corruption</h4>
														</div>
														<?php
														$query = "SELECT * FROM s_corruption where Q_comment = '' AND Status=''  order by date_saved desc  ";
														$results = mysql_query($query,$localhost1);
														while($row=mysql_fetch_array($results)){ 
														}?> 
														<div class="span4 center">
															<div class="progress progress-success progress-striped active ">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
															<hr />
															<div class="progress progress-inverse  progress-striped active">
																<div class="bar" style="width: 40% " data-percent="40%"></div>
															</div>

															<hr />
															<div class="progress progress-danger progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div><hr />
															<div class="progress progress-warning progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
														</div><!--/span-->
													</div>


													<div id="disas" class="tab-pane">
														<div class="widget-header">
															<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Corruption</h4>
														</div>
														<?php
														$query = "SELECT * FROM s_corruption where Q_comment = '' AND Status=''  order by date_saved desc  ";
														$results = mysql_query($query,$localhost1);
														while($row=mysql_fetch_array($results)){ 
														}?> 
														<div class="span4 center">
															<div class="progress progress-success progress-striped active ">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
															<hr />
															<div class="progress progress-inverse  progress-striped active">
																<div class="bar" style="width: 40% " data-percent="40%"></div>
															</div>

															<hr />
															<div class="progress progress-danger progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div><hr />
															<div class="progress progress-warning progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
														</div><!--/span-->
													</div>


													<div id="inqr" class="tab-pane">
														<div class="widget-header">
															<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Corruption</h4>
														</div>
														<?php
														$query = "SELECT * FROM s_corruption where Q_comment = '' AND Status=''  order by date_saved desc  ";
														$results = mysql_query($query,$localhost1);
														while($row=mysql_fetch_array($results)){ 
														}?> 
														<div class="span4 center">
															<div class="progress progress-success progress-striped active ">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
															<hr />
															<div class="progress progress-inverse  progress-striped active">
																<div class="bar" style="width: 40% " data-percent="40%"></div>
															</div>

															<hr />
															<div class="progress progress-danger progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div><hr />
															<div class="progress progress-warning progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
														</div><!--/span-->
													</div>


													<div id="recmm" class="tab-pane">
														<div class="widget-header">
															<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Corruption</h4>
														</div>
														<?php
														$query = "SELECT * FROM s_corruption where Q_comment = '' AND Status=''  order by date_saved desc  ";
														$results = mysql_query($query,$localhost1);
														while($row=mysql_fetch_array($results)){ 
														}?> 
														<div class="span4 center">
															<div class="progress progress-success progress-striped active ">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
															<hr />
															<div class="progress progress-inverse  progress-striped active">
																<div class="bar" style="width: 40% " data-percent="40%"></div>
															</div>

															<hr />
															<div class="progress progress-danger progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div><hr />
															<div class="progress progress-warning progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
														</div><!--/span-->
													</div>


													<div id="sugg" class="tab-pane">
														<div class="widget-header">
															<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Corruption</h4>
														</div>
														<?php
														$query = "SELECT * FROM s_corruption where Q_comment = '' AND Status=''  order by date_saved desc  ";
														$results = mysql_query($query,$localhost1);
														while($row=mysql_fetch_array($results)){ 
														}?> 
														<div class="span4 center">
															<div class="progress progress-success progress-striped active ">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
															<hr />
															<div class="progress progress-inverse  progress-striped active">
																<div class="bar" style="width: 40% " data-percent="40%"></div>
															</div>

															<hr />
															<div class="progress progress-danger progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div><hr />
															<div class="progress progress-warning progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
														</div><!--/span-->
													</div>


													<div id="corr" class="tab-pane">
														<div class="widget-header">
															<h4 class="lighter smaller"><i class="icon-rss orange"></i>The Most Recent Corruption</h4>
														</div>
														<?php
														$query = "SELECT * FROM s_corruption where Q_comment = '' AND Status=''  order by date_saved desc  ";
														$results = mysql_query($query,$localhost1);
														while($row=mysql_fetch_array($results)){ 
														}?> 
														<div class="span4 center">
															<div class="progress progress-success progress-striped active ">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
															<hr />
															<div class="progress progress-inverse  progress-striped active">
																<div class="bar" style="width: 40% " data-percent="40%"></div>
															</div>

															<hr />
															<div class="progress progress-danger progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div><hr />
															<div class="progress progress-warning progress-striped active">
																<div class="bar" style="width: 40%" data-percent="40%"></div>
															</div>
														</div><!--/span-->
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
								<script src="../Assets/js/jquery.easy-pie-chart.min.js"></script>
								<script src="../Assets/js/jquery.slimscroll.min.js"><?php
									mysql_free_result($QA);
								}
								else
									echo '<script>alert("You are not logged in please login to proceed")
								var newLocation = "../AdminAccess/login.php";
								window.location = newLocation;</script>';
								?>


								<script type="text/javascript">
									$(function() {

										var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
										$('.easy-pie-chart.percentage').each(function(){
											$(this).easyPieChart({
												barColor: $(this).data('color'),
												trackColor: '#EEEEEE',
												scaleColor: false,
												lineCap: 'butt',
												lineWidth: 8,
												animate: oldie ? false : 1000,
												size:75
											}).css('color', $(this).data('color'));
										});

										$('[data-rel=tooltip]').tooltip();
										$('[data-rel=popover]').popover({html:true});

									}

								</script>

								<?php 
								if ($result = $mysqli->query("SELECT Code, Name FROM Country ORDER BY Name")) {

									/* determine number of rows result set */
									$row_cnt = $result->num_rows;

									printf("Result set has %d rows.\n", $row_cnt);

									/* close result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
$query = $mysqli->prepare("SELECT * FROM table1");
$query->execute();
$query->store_result();

$rows = $query->num_rows;

echo $rows;

// Return 4 for example
								
								?>

							</body>
							</html>
