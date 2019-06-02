<?php require_once('../Connections/localhost.php'); ?>
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

$colname_ADM = "-1";
if (isset($_SESSION['MM_Username'])) {
	$colname_ADM = $_SESSION['MM_Username'];
}
mysql_select_db($database_localhost, $localhost1);
$query_ADM = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_ADM, "text"));
$ADM = mysql_query($query_ADM, $localhost1) or die(mysql_error());
$row_ADM = mysql_fetch_assoc($ADM);
$totalRows_ADM = mysql_num_rows($ADM);
$fname=$row_ADM['firstname'];
$lname=$row_ADM['lastname'];
$t=$row_ADM['title'];
$Dep=$row_ADM['Department'];
if($_SESSION['MM_Username']!=""){
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>CPMS</title>
		<meta name="CPMS" content="Team Project" />

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
						<a class="brand" href="#"><small><img src="../Assets/image/logo.png" style="position: absolute; left: 4px;top:0px;width:50px;" alt="CPMS Logo"> </img>  County  Permomance and Monitoring System</small> </a></div>
						<label style="position: absolute; left:890px;top:34px;width:300px; color:#efd506;"><?php echo $t;?>&nbsp;<?php echo $fname; ?>&nbsp;<?php echo $lname; ?> </label>
						<ul class="nav ace-nav pull-right"><p>
							<li class="light-blue user-profile">


								<a class="user-menu dropdown-toggle" href="Admin.php" data-toggle="dropdown">

									<span id="user_info">
										<small>Welcome Back<br/><?php echo $row_ADM['username']; ?> </small> 

									</span>
									<i class="icon-caret-down"></i>
								</a>
								<ul id="user_menu" class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
									<li>
										<a href="AdminFiles/profile.php" data-toggle="modal">
											<i class="icon-edit icon-white"></i>
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
						<a href="Admin.php" id="menu-toggler"><span></span></a><!-- menu toggler -->

						<div id="sidebar">
							<div class="media user-media hidden-phone">
								<a href="" class="user-link">
									<img src="<?php echo $row_ADM['img']; ?>" alt="<?php echo $row_ADM['firstname']; ?>" class="media-object img-polaroid user-img" width="40px">
									<span class="label user-label"></span>
								</a>
								<div class="media-body hidden-tablet">
									<h5 class="media-heading"></h5>
									<ul class="unstyled user-info">
										<li>Logged in as <br/><?php echo $row_ADM['user_role']; ?></li>
										<li class="divider"><br/><?php echo $Dep ?></li>
										<li><br/>Last Logged in At <small><i class="icon-calendar"></i></small><br/><?php
											$dt = new DateTime();
											echo $dt->format('l d, M,Y');
											?>
											<li class="divider"></li>
										</ul>
									</div>
								</div>
								<div id="sidebar-shortcuts">
									<div id="sidebar-shortcuts-large">
										<i class="icon-leaf">CPMS</i>
									</div>
									<div id="sidebar-shortcuts-mini">
										<i class="icon-leaf">CPMS</i>
									</div>
								</div><!-- #sidebar-shortcuts -->


								<ul class="nav nav-list">

									<li>
										<a href="Admin.php" class="dropdown-toggle" >
											<i class="icon-briefcase"></i>
											<span>Content</span>
											<b class="arrow icon-angle-down"></b>
										</a>
										<ul class="submenu">
											<li><a href="AdminFiles/Post.php"><i class="icon-double-angle-right"></i>New Article</a></li>
											<li><a href="AdminFiles/PostM.php"><i class="icon-double-angle-right"></i>Manage Articles</a></li>
											<li><a href="AdminFiles/Feedbacks.php"><i class="icon-double-angle-right"></i>Feedbacks</a></li>
										</ul>
									</li>
									<li>
										<a href="Admin.php" class="dropdown-toggle" >
											<i class="icon-group"></i>
											<span>Users</span>
											<b class="arrow icon-angle-down"></b>
										</a>
										<ul class="submenu">
											<li><a href="AdminFiles/users.php"><i class=" icon-info-sign"></i>New Users</a></li>
											<li><a href="AdminFiles/userM.php"><i class="icon-double-angle-right"></i>Manage Users</a></li>
										</ul>
									</li>


									<li>
										<a href="Admin.php" class="dropdown-toggle" >
											<i class="icon-cogs"></i>
											<span>Settings</span>
											<b class="arrow icon-angle-down"></b>
										</a>
										<ul class="submenu">
											<li><a href="https://197.248.5.5:2083"><i class="icon-double-angle-right"></i>C-panel</a></li>
											<li><a href="http://localhost/phpmyadmin"><i class="icon-double-angle-right"></i>Login to Database</a></li>

										</ul>
									</li>
								</ul><!--/.nav-list-->

								<div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


							</div><!--/#sidebar-->


							<div id="main-content" class="clearfix">

								<div id="breadcrumbs">
									<ul class="breadcrumb">
										<li><i class="icon-home"></i> <a href="Admin.php">Admin Panel</a><span class="divider"><i class="icon-angle-right"></i></span></li>
										<li class="active">Dashboard</li>
									</ul><!--.breadcrumb-->
								</div><!--#breadcrumbs-->



								<div id="page-content" class="clearfix">

									<div class="page-header position-relative">
										<h1>Dashboard <small><i class="icon-double-angle-right"></i>List of Notifications</small></h1>
									</div><!--/page-header-->

									<!-- PAGE CONTENT BEGINS HERE -->

									<?php 		include_once('../Connections/localhost.php'); 
									$result = mysql_query("SELECT * FROM notifications WHERE status=''");
									$notf =mysql_num_rows($result);
									$resultf = mysql_query("SELECT * FROM feedbacks WHERE status=''");
									$feed =mysql_num_rows($resultf);
									?>
									<a class="muted" href="#comp" data-toggle="tab">
										<div class="infobox infobox-red">
											<div class="infobox-icon"><i class="icon-user" ></i></div>
											<div class="infobox-data" >
												<span class="infobox-data-number"><?php echo $notf?></span>
												<span class="infobox-content">New Users</span>
											</div>

										</div></a>
										<a class="muted" href="#feed" data-toggle="tab">
											<div class="infobox infobox-red">
												<div class="infobox-icon"><i class="icon-comments" ></i></div>
												<div class="infobox-data" >
													<span class="infobox-data-number"><?php echo $feed?></span>
													<span class="infobox-content">Feedbacks</span>
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
																	<h4 class="lighter smaller"><i class="icon-rss orange"></i>New Users Most Recent Requests</h4>
																</div>
																<?php
																$query = "SELECT * FROM notifications WHERE status ='' order by Date_s desc ";
																$resultc = mysql_query($query,$localhost1);
																while($row=mysql_fetch_array($resultc)){ 

																	$username=$row['Username'];
																	$email=$row['Email'];
																	$password=$row['Password'];
																	$Date_s=$row['Date_s'];

																	echo		'<div id="task-tab" class="tab-pane active">';
																	echo			'<div class="itemdiv dialogdiv"><br>';
																	echo			'<div class="user">';
																	echo						'<img alt="Avatar" src="../Assets/image/avatar2.png" />';
																	echo			'</div>';
																	echo		'<div class="body">';
																	echo '<div class = "name"><span class="label label-info arrowed arrowed-in-right">'.$Date_s.'</span></div>';																			
																	echo '<div class = "name"><span >'.$username.'</span></div>';
																	echo '<div class = "name"><span >'.$email.'</span></div>';
																	echo '<div class="text">'.$password .'</div>';
																	echo '<div class="tools">
																	<a href="AdminFiles/users.php" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
																</div>';
																echo '</div>';
																echo '</div>';
																echo '</div>';

															} 
															?> 
														</div>
														<div id="feed" class="tab-pane">
															<div class="widget-header">
																<h4 class="lighter smaller"><i class="icon-rss orange"></i>New Users Most Recent Requests</h4>
															</div>
															<?php
															$query = "SELECT * FROM feedbacks order by fid desc ";
															$resultc = mysql_query($query,$localhost1);
															while($row=mysql_fetch_array($resultc)){ 
																$fid=$row['fid'];
																$name=$row['Name'];
																$email=$row['Email'];
																$msg=$row['Message'];
																$Date_ss=$row['Date_posted'];

																echo		'<div id="task-tab" class="tab-pane active">';
																echo			'<div class="itemdiv dialogdiv"><br>';
																echo			'<div class="user">';
																echo						'<img alt="Avatar" src="../Assets/image/avatar2.png" />';
																echo			'</div>';
																echo		'<div class="body">';
																echo '<div class = "name"><span class="label label-info arrowed arrowed-in-right">'.$Date_ss.'</span></div>';																			
																echo '<div class = "name"><span >'.$name.'</span></div>';
																echo '<div class = "name"><span >'.$email.'</span></div>';
																echo '<div class="text">'.$msg.'</div>';
																echo '<div class="tools">
																<a href="AdminFiles/Feedbacks.php" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
															</div>';
															echo '</div>';
															echo '</div>';
															echo '</div>';

														} 
														?> 
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
								<script src="../Assets/js/jquery.slimscroll.min.js"><?php
									mysql_free_result($ADM);
								}
								else
									echo '<script>alert("You are not logged in please login to proceed")
								var newLocation = "../AdminAccess/login.php";
								window.location = newLocation;</script>';
								?>
							</script>
						</body>
						</html>
