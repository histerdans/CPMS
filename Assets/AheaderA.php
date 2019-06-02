<?php
error_reporting(0);
require_once('../../Connections/localhost.php'); ?>
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
	
	$logoutGoTo = "../../index.php";
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

$colname_AdminPanel_recordset = "-1";
if (isset($_SESSION['MM_Username'])) {
	$colname_AdminPanel_recordset = $_SESSION['MM_Username'];
}
mysql_select_db($database_localhost, $localhost1);
$query_AdminPanel_recordset = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_AdminPanel_recordset, "text"));
$AdminPanel_recordset = mysql_query($query_AdminPanel_recordset, $localhost1) or die(mysql_error());
$row_AdminPanel_recordset = mysql_fetch_assoc($AdminPanel_recordset);
$totalRows_AdminPanel_recordset = mysql_num_rows($AdminPanel_recordset);
$fname=$row_AdminPanel_recordset['firstname'];
$lname=$row_AdminPanel_recordset['lastname'];
$t=$row_AdminPanel_recordset['title'];
if($_SESSION['MM_Username']!=""){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta http-equiv=content-type content="text/html;
charset=UTF-8">
		<title>CPMS</title>
		<meta name="CPMS" content="Team Project" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->
		<!-- basic styles -->
		<link href="../../Assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../Assets/css/bootstrap-responsive.min.css" rel="stylesheet" />

		<link rel="stylesheet" href="../../Assets/css/font-awesome.min.css" />
		<!-- styles -->
		<link rel="stylesheet" href="../../Assets/css/main.min.css" />
		<link rel="stylesheet" href="../../Assets/css/responsive.min.css" />
		<link rel="stylesheet" href="../../Assets/css/skins.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="../../Assets/image/stamp.png">
		<script type="text/javascript">
        function populate(s1,s2){
          var s1=document.getElementById(s1);
          var s2=document.getElementById(s2);
          s2.innerHTML="";


          if(s1.value=="Ainamoi"){
            var optionArray=["|","kapsoit|Kapsoit","ainamoi Ward|Ainamoi Ward","kapkugerwet|Kapkugerwet","kipchebor|Kipchebor","kipchimchim|Kipchimchim","kapsaos|Kapsaos"]


          } 
           else if(s1.value=="Belgut"){
            var optionArray=["|","Kabianga|Kabianga","Waldai|Waldai","Chaik|Chaik","Cheptororiet/Seretut|Cheptororiet/Seretut","Kapsuser|Kapsuser"]


          }
           else if(s1.value=="Kipkelion West"){
            var optionArray=["|","Chilchila|Chilchila","Kipkelion Ward|Kipkelion Ward","Kamasian|Kamasian","Kunyak|Kunyak"]


          }
          else if(s1.value=="Kipkelion East"){
            var optionArray=["|","Kedowa/Kimugul|Kedowa/Kimugul","Chepseon|Chepseon","Londiani|Londiani","Tendeno/Sorget|Tendeno/Sorget"]


          }else if(s1.value=="Bureti"){
            var optionArray=["|","Letin|Letin","Chemosot|Chemosot","Cheplanget|Cheplanget","Kisiara|Kisiara","Cheboin|Cheboin","Kapkatet|Kapkatet","Tebesonik|Tebesonik"]


          } 
          else if (s1.value=="Soin/Sigowet"){
            var optionArray=["|","Sigowet Ward|Sigowet Ward","Kaplelartet|Kaplelartet","Soin Ward|Soin Ward","Soliat|Soliat"];
          }


          for (var option in optionArray){
            var pair=optionArray[option].split("|");
            var newOption=document.createElement("option");
            newOption.value=pair[0];
            newOption.innerHTML=pair[1];
            s2.options.add(newOption);

          }
        }
      </script>
	</head>
	<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">

					<!-- Team Project Brand Name-->
					<div class = "span8">
						<a class="brand" href="#"><small>
							<img src="../../Assets/image/logo.png" style="position: absolute; left: 4px;top:0px;width:50px;" alt="CPMS Logo"> </img> County  Permomance and Monitoring System </small> 
						</a></div>
						
						<label style="position: absolute; left:890px;top:24px;width:300px; color:#efd506;"><?php echo $t;?>&nbsp;<?php echo $fname; ?>&nbsp;<?php echo $lname; ?> </label>
						<ul class="nav ace-nav pull-right"><p>
						<li class="light-blue user-profile">


							<a class="user-menu dropdown-toggle" href="index.html#" data-toggle="dropdown">
								
								<span id="user_info">
									<small>Welcome Back<br/><?php echo $row_AdminPanel_recordset['username']; ?>
									</small> 
									
								</span>
								<i class="icon-caret-down"></i>
							</a>
							<ul id="user_menu" class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="../AdminFiles/profile.php">
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
				<!-- PAGE CONTENT BEGINS HERE -->
				<div class="container-fluid" id="main-container">
					<a href="index.html#" id="menu-toggler"><span></span></a><!-- menu toggler -->

					<div id="sidebar">

						<div id="sidebar-shortcuts">
							<div id="sidebar-shortcuts-large">
								<i class="icon-leaf">CPMS</i>
							</div>
							<div id="sidebar-shortcuts-mini">
								<i class="icon-leaf">CPMS</i>
							</div>
						</div><!-- #sidebar-shortcuts -->
						<div class="media user-media hidden-phone">
							<a href="" class="user-link">
								<img src="<?php echo $row_AdminPanel_recordset['img']; ?>" class="media-object img-polaroid user-img" width="40px">
								<span class="label user-label"></span>
							</a>
							<div class="media-body hidden-tablet">
								<h5 class="media-heading"></h5>
								<ul class="unstyled user-info">
									<li>Logged in as <?php echo $row_AdminPanel_recordset['user_role'];
										echo "</br>";
										echo $row_AdminPanel_recordset['Department'];
										$dep=$row_AdminPanel_recordset['Department'];
										$role=$row_AdminPanel_recordset['user_role'];?><br/><?php echo $Dep ?></li>
										<li class="divider"></li>
										<li><br/>Today's Date<small><i class="icon-calendar"></i></small><br/><?php
											$dt = new DateTime();
											echo $dt->format('d-m-Y');
											?>
											<li class="divider"></li>
										</ul>
									</div>
								</div>
								<ul class="nav nav-list">

									<li >
										<a href="../Activity.php">
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
											<li><?php echo "<a href=\"A2.php?Dep=$min\">"; echo '<i class="icon-double-angle-right"></i>Resource Planning</a>';?></li>
										<li><?php echo "<a href=\"A2.php?Dep=$min\">"; echo '<i class="icon-double-angle-right"></i>Resource Allocation</a>';?></li>
										</ul>
									</li>
								</ul><!--/.nav-list-->

								<div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


							</div><!--/#sidebar-->

							<?php
							mysql_free_result($AdminPanel_recordset);

						}
						else
							echo '<script>alert("You are not logged in please login to proceed")
						var newLocation = "../../AdminAccess/login.php";
						window.location = newLocation;</script>';
						?>
