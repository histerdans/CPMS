<?php require_once('../../Connections/localhost.php'); ?>
<?php
error_reporting(0);
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
$admid=$row_QA['Adm_id'];
if($_SESSION['MM_Username']!=""){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Your Profile</title>

	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!--basic styles-->

	<link href="../../Assets/css/1bootstrap.min.css" rel="stylesheet" />
	<link href="../../../Assets/css/1bootstrap-responsive.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="../../Assets/css/font-awesome.min.css" />


<!--[if IE 7]>
  <link rel="stylesheet" href="../../Assets/css/font-awesome-ie7.min.css" />
  <![endif]-->

  <!--page specific plugin styles-->

  <link rel="stylesheet" href="../../Assets/css/jquery-ui-1.10.3.custom.min.css" />


  <link rel="stylesheet" href="../../Assets/css/bootstrap-editable.css" />
  <!--page specific plugin styles-->

  <link rel="stylesheet" href="../../Assets/css/jquery-ui-1.10.3.custom.min.css" />

  <link rel="stylesheet" href="../../Assets/css/datepicker.css" />

  <link rel="stylesheet" href="../../Assets/css/jquery.gritter.css" />

  <!--fonts-->

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

  <!--ace styles-->

  <link rel="stylesheet" href="../../Assets/css/ace.min.css" />
  <link rel="stylesheet" href="../../Assets/css/ace-responsive.min.css" />
  <link rel="stylesheet" href="../../Assets/css/ace-skins.min.css" />

<!--[if lte IE 8]>
  <link rel="stylesheet" href="../../Assets/css/ace-ie.min.css" />
  <![endif]-->

  <!--inline styles related to this page-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="#"><small>
					<img src = "../../Assets/image/logo.png" width = "50px" class = "img-circle">County  Permomance and Monitoring System (CPMS)</small> 
				</a>
				<label style="position: absolute; left: 890px;top:34px;width:300px; color:#efd506;"><?php echo $t;?>&nbsp;<?php echo $fname; ?>&nbsp;<?php echo $lname; ?> </label>

			</div><!--/.container-fluid-->
		</div><!--/.navbar-inner-->
	</div>

	<div class="main-container container-fluid">
		<a class="menu-toggler" id="menu-toggler" href="#">
			<span class="menu-text"></span>
		</a>

		<?php $role=$row_QA['user_role'];?>

		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="icon-home home-icon" ></i>
						<a onclick="history.back(-1)" class="badge-tooltip-error" title="click here to go back to previous page">Home</a>

						<span class="divider">
							<i class="icon-angle-right arrow-icon"></i>
						</span>
					</li>

					<li>
						<a href="profile.php">Your Profile</a>

						<span class="divider">
							<i class="icon-angle-right arrow-icon"></i>
						</span>
					</li>

				</ul><!--.breadcrumb-->


			</div>

			<div class="page-content">
				<div class="row-fluid">
					<div class="span12">
						<!--PAGE CONTENT BEGINS-->
						<form class="form-horizontal" action="../../Apps/connprofileUpdate.php" id="profileForm" method = "POST">

							<input type="hidden" name="Adm_id" value="<?php echo $admid;?>">
							<input type="hidden" name="sess" value="<?php echo $colname_QA;?>">
							<?php

							require_once('../../Connections/localhost.php');  

							$result = mysql_query("SELECT * FROM users where Adm_id = '$admid' ");
							while($row = mysql_fetch_array($result))
							{
								$username = $row['username'];
								$password = $row['password'];  
								$email = $row['Email']; 
								$firstname = $row['firstname']; 
								$lastname = $row['lastname'];
								$img = $row['img'];
								$gen=$row['Gender'];
								$Depart= $row['Department'];
								$user_role= $row['user_role'];
								$phoneno= $row['PhoneNo'];
								$Birthday=$row['Birthdate'];
								$Constituency=$row['Constituency'];
								$Bio=$row['Bio'];
								$t=$row['title'];

								

							}?>



							<div id="user-profile-3" class="user-profile row-fluid">
								<div class="offset1 span10">
									

									<div class="space"></div>


									<div class="tabbable">
										<ul class="nav nav-tabs padding-16">
											<li class="active">
												<a data-toggle="tab" href="#info">
													<i class="green icon-edit bigger-125"></i>
													Your information
												</a>
											</li>

											<li>
												<a data-toggle="tab" href="#edit-basic">
													<i class="purple icon-cog bigger-125"></i>
													
													Change your profile
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#edit-password">
													<i class="blue icon-key bigger-125"></i>
													Credentials
												</a>
											</li>
										</ul>







										<div class="tab-content profile-edit-tab-content">




											<div id="info" class="tab-pane in active">
												<h4 class="header blue bolder smaller">General</h4>

												<div class="row-fluid">
													<div class="span3 center">
														<div>
															<span class="profile-picture">
																<img id="avatar" class="editable" alt="Alex's Avatar" src="../../Assets/image/avatar.jpg" value="<?php echo $img;?>" name="img" />
															</span>

															<div class="space-4"></div>

															<div class="width-100 label label-info label-large arrowed-in arrowed-in-right">
																<div class="inline position-relative">
																	<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">

																		<span class="white middle bigger-120"><?php echo $username;?></span>
																	</a>


																</div>
															</div>
														</div>
													</div>

													<div class="vspace"></div>

													<div class="span8">
														<div class="control ">

															<p> <?php echo $t;?></p>
														</div>
														<div class="space"></div>

														<div class="control-group">
															<label class="control-label" for="form-field-first">Name</label>

															<div class="controls">
																<P><?php echo $firstname; ?></P>
																
																<p><?php echo $lastname; ?></p>
															</div>
														</div>
														<div class="space-10"></div>
														<div class="control-group">
															<label class="control-label" for="username">Username</label>

															<div class="controls">
																<p><?php echo $username; ?> </p>
															</div>
														</div>
														<div class="control-group" class="pull-right">
															<label class="control-label" for="username">Current Password</label>

															<div class="controls">
																<p><?php echo $password; ?> </p>
															</div>
														</div>
														


													</div>
												</div>

												<hr />
												<div class="control-group">
													<label class="control-label" for="form-field-date">Birth Date</label>

													<div class="controls">
														<div >
															<p><?php echo $Birthday;?></p>
															
														</div>
													</div>
												</div>

												<div class="control-group">
													<label class="control-label">Gender</label>

													<div class="controls">
														<div class="space-2"></div>

														<label class="inline">
															<p><?php echo $gen; ?></p>
														</label>

													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="comment">Bio</label>

													<div class="controls">
														<p><?php echo $bio; ?></p>
													</div>
												</div>

												<div class="space"></div>
												<h4 class="header blue bolder smaller">Contact</h4>

												<div class="control-group">
													<label class="control-label" for="form-field-email">Email</label>

													<div class="controls">
														<span class="input-icon input-icon-right">
															<p><?php echo $email; ?></p>
															
														</span>
													</div>
												</div>


												<div class="control-group">
													<label class="control-label" for="phone">Phone</label>

													<div class="row-fluid">
														<label for="form-field-mask-2">

															
														</label>

														<div class="controls">
															

															<p><?php echo $phoneno;?></p>
														</div>
													</div>
												</div>

												<div class="space"></div>
												<div class="control-group">
													<label class="control-label" for="selection">Your Constituency is</label>
													<div class="controls">
														<p><?php echo $Constituency; ?></p>
													</div></div>







													<div class="control-group">
														<label class="control-label" for="selection">Your Administrative Authority is</label>
														<div class="controls">
															<p><?php echo $role; ?></p>
														</div></div>



														<div class="control-group">
															<label class="control-label" for="selection">Your Department is</label>
															<div class="controls">
																<p><?php echo $Depart; ?></p>
															</div></div>





														</div>









														<div id="edit-basic" class="tab-pane">
															<h4 class="header bolder smaller">General</h4>

															<div class="row-fluid">
																<div class="span3 center">
																	<div>
																		<span class="profile-picture">
																			<img id="avatar" class="editable" alt="Alex's Avatar" src="../../Assets/image/avatar.jpg" value="<?php echo $img;?>" name="img" />
																		</span>

																		<div class="space-4"></div>

																		<div class="width-100 label label-info label-large arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																				<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">

																					<span class="white middle bigger-120"><?php echo $username;?></span>
																				</a>


																			</div>
																		</div>
																	</div>
																</div>

																<div class="vspace"></div>

																<div class="span8">
																	<div class="control ">

																		<select name = "Title" id = "select" class="span2">
																			<option value = "">Title</option>
																			<option value = "H.E.">H.E.</option>
																			<option value = "Hon.">Hon.</option>
																			<option value = "Prof.">Prof.</option>
																			<option value = "DR.">DR.</option>
																			<option value = "Mr.">Mr.</option>
																			<option value = "Mrs.">Mrs.</option>
																			<option value = "Ms.">Ms.</option>
																			<option value = "Eng.">Eng.</option>
																			<option value = "REV.">REV.</option>
																			<option value = "Pr.">Pr.</option>
																			<option value = "">NONE</option>
																		</select>
																	</div>
																	<div class="space"></div>

																	<div class="control-group">
																		<label class="control-label" for="form-field-first">Name</label>

																		<div class="controls">
																			<input type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>" />
																			<div class="space"></div>
																			<input type="text" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $lastname; ?>" />
																		</div>
																	</div>
																</div>
															</div>

															<hr />
															<div class="control-group">
																<label class="control-label" for="form-field-date">Birth Date</label>

																<div class="controls">
																	<div class="row-fluid input-append">
																		<input type="text" class="span4 date-picker" id="id-date-picker-1" name="bday"  value="<?php echo $Birthday;?>" data-date-format="dd-mm-yyyy" />

																	</div>
																</div>
															</div>

															<div class="control-group">
																<label class="control-label">Gender</label>

																<div class="controls">
																	<div class="space-2"></div>

																	<label class="inline">
																		<input  type="radio"  name="Gender" value="Male"/>
																		<span class="lbl" > Male</span>
																	</label>

																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
																		<input type="radio"  name="Gender" value="Female"/>
																		<span class="lbl" > Female</span>
																	</label>
																</div>
															</div>

															<div class="control-group">
																<label class="control-label" for="comment">Bio</label>

																<div class="controls">
																	<textarea id="comment" name="comment" value="<?php echo $bio; ?>"></textarea>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>

															<div class="control-group">
																<label class="control-label" for="form-field-email">Email</label>

																<div class="controls">
																	<span class="input-icon input-icon-right">
																		<input type="email" id="email" name="email" value="<?php echo $email; ?>" />
																		<i class="icon-envelope"></i>
																	</span>
																</div>
															</div>


															<div class="control-group">
																<label class="control-label" for="phone">Phone</label>

																<div class="row-fluid">
																	<label for="form-field-mask-2">

																		<small class="text-warning">&nbsp;&nbsp;&nbsp;(999) 999-9999</small>
																	</label>

																	<div class="input-prepend">
																		<span class="add-on">
																			<i class="icon-phone"></i>
																		</span>

																		<input class="input-medium input-mask-phone" name="PhoneNo" value="<?php echo $phoneno;?>" type="text" id="form-field-mask-2" />
																	</div>
																</div>
															</div>

															<div class="space"></div>
															<div class="control-group">
																<label class="control-label" for="selection">Your Constituency is</label>
																<div class="controls">
																	<input type="text"  disabled  value="<?php echo $Constituency; ?>" />
																</div></div>







																<div class="control-group">
																	<label class="control-label" for="selection">Your Administrative Authority is</label>
																	<div class="controls">
																		<input  type="text"  disabled  value="<?php echo $role; ?>" />
																	</div></div>



																	<div class="control-group">
																		<label class="control-label" for="selection">Your Department is</label>
																		<div class="controls" style="color:#efd506;">
																			<input class="span12" type="text"   disabled  value="<?php echo $Depart; ?>" />
																		</div>
																	</div>

																	<div class="form-actions" style="background-color:#ABD9F2 ;">
																		<button class="btn btn-info" type="submit">
																			<i class="icon-ok bigger-110"></i>
																			Save
																		</button>

																		&nbsp; &nbsp; &nbsp;
																		<button class="btn" type="reset">
																			<i class="icon-undo bigger-110"></i>
																			Reset
																		</button>
																	</div>



																</div>








																<div id="edit-password" class="tab-pane">
																	<div class="space-10"></div>
																	<div class="control-group">
																		<label class="control-label" for="username">Change Username</label>

																		<div class="controls">
																			<input type="text" id="Username" name="username" placeholder="Username" value="<?php echo $username; ?>" />
																		</div>
																	</div>
																	<div class="control-group" class="pull-right">
																		<label class="control-label" for="username">Change Password</label>

																		<div class="controls">
																			<input type="text" name="cpassword" value="<?php echo $password; ?>" />
																		</div>
																	</div>

																	<div class="form-actions" style="background-color:#ABD9F2 ;">
																		<button class="btn btn-info" type="submit">
																			<i class="icon-ok bigger-110"></i>
																			Save
																		</button>

																		&nbsp; &nbsp; &nbsp;
																		<button class="btn" type="reset">
																			<i class="icon-undo bigger-110"></i>
																			Reset
																		</button>
																	</div>



																</div>






															</div>
														</div>


													</form>
												</div><!--/span-->
											</div><!--/user-profile-->
											<!--PAGE CONTENT ENDS-->
										</div><!--/.span-->
									</div><!--/.row-fluid-->
								</div><!--/.page-content-->


								<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
									<i class="icon-double-angle-up icon-only bigger-110"></i>
								</a>

								<!--basic scripts-->



								<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


								<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


								<script type="text/javascript">
									window.jQuery || document.write("<script src='../../Assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
								</script>

								<script type="text/javascript">
									window.jQuery || document.write("<script src='../../Assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
								</script>
								<![endif]-->

								<script type="text/javascript">
									if("ontouchend" in document) document.write("<script src='../../Assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
								</script>
								<script src="../../Assets/js/bootstrap.min.js"></script>

								<!--page specific plugin scripts-->

								<script src="../../Assets/js/excanvas.min.js"></script>


								<script src="../../Assets/js/jquery-ui-1.10.3.custom.min.js"></script>
								<script src="../../Assets/js/jquery.gritter.min.js"></script>



								<script src="../../Assets/js/jquery.slimscroll.min.js"></script>



								<script src="../../Assets/js/bootstrap-datepicker.min.js"></script>

								<script src="../../Assets/js/bootstrap-editable.min.js"></script>
								<script src="../../Assets/js/ace-editable.min.js"></script>
								<script src="../../Assets/js/jquery.maskedinput.min.js"></script>

								<!--ace scripts-->

								<script src="../../Assets/js/ace-elements.min.js"></script>
								<script src="../../Assets/js/ace.min.js"></script>

								<!--inline scripts related to this page-->
								<script type="text/javascript">
									if("ontouchend" in document) document.write("<script src='../../Assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
								</script>
								<script src="../../Assets/js/bootstrap.min.js"></script>

								<!--page specific plugin scripts-->

<!--[if lte IE 8]>
  <script src="../../Assets/js/excanvas.min.js"></script>
  <![endif]-->

  <script src="../../Assets/js/jquery-ui-1.10.3.custom.min.js"></script>



  <!--ace scripts-->

  <script src="../../Assets/js/ace-elements.min.js"></script>
  <script src="../../Assets/js/ace.min.js"></script>

  <!--inline scripts related to this page-->


  <script type="text/javascript">
  	$(function() {

		//editables on first profile page
		$.fn.editable.defaults.mode = 'inline';
		$.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
		$.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>'+
		'<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';    
		
		//editables 
		
		
		
		
		
		// *** editable avatar *** //
		try {//ie8 throws some harmless exception, so let's catch it

			//it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
			//so let's have a fake appendChild for it!
			if( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ) Image.prototype.appendChild = function(el){}

				var last_gritter
			$('#avatar').editable({
				type: 'image',
				name: 'avatar',
				value: null,
				image: {
					//specify ace file input plugin's options here
					btn_choose: 'Change Avatar',
					droppable: true,
				
					//this will override the default before_change that only accepts image files
					before_change: function(files, dropped) {
						return true;
					},
				

					//and a few extra ones here
					name: 'avatar',//put the field name here as well, will be used inside the custom plugin
					max_size: 11000000,//~1Mb
					on_error : function(code) {//on_error function will be called when the selected file has a problem
						if(last_gritter) $.gritter.remove(last_gritter);
						if(code == 1) {//file format error
							last_gritter = $.gritter.add({
								title: 'File is not an image!',
								text: 'Please choose a jpg|gif|png image!',
								class_name: 'gritter-error gritter-center'
							});
						} else if(code == 2) {//file size rror
							last_gritter = $.gritter.add({
								title: 'File too big!',
								text: 'Image size should not exceed 1Mb!',
								class_name: 'gritter-error gritter-center'
							});
						}
						else {//other error
						}
					},
					on_success : function() {
						$.gritter.removeAll();
					}
				},
				url: function(params) {
					// ***UPDATE AVATAR HERE*** //
					//You can replace the contents of this function with examples/profile-avatar-update.js for actual upload


					var deferred = new $.Deferred

					//if value is empty, means no valid files were selected
					//but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
					//so we return just here to prevent problems
					var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
					if(!value || value.length == 0) {
						deferred.resolve();
						return deferred.promise();
					}


					//dummy upload
					setTimeout(function(){
						if("FileReader" in window) {
							//for browsers that have a thumbnail of selected image
							var thumb = $('#avatar').next().find('img').data('thumb');
							if(thumb) $('#avatar').get(0).src = thumb;
						}
						
						deferred.resolve({'status':'OK'});

						if(last_gritter) $.gritter.remove(last_gritter);
						last_gritter = $.gritter.add({
							title: 'Profile Picture Status',
							text: 'Profile picture Updated',
							class_name: 'gritter-info gritter-center'
						});
						
					} , parseInt(Math.random() * 800 + 800))

					return deferred.promise();
				},
				
				success: function(response, newValue) {
				}
			})
}catch(e) {}



		//another option is using modals
		$('#avatar2').on('click', function(){
			var modal = 
			'<div class="modal hide fade">\
			<div class="modal-header">\
				<button type="button" class="close" data-dismiss="modal">&times;</button>\
				<h4 class="blue">Change Avatar</h4>\
			</div>\
			\
			<form class="no-margin">\
				<div class="modal-body">\
					<div class="space-4"></div>\
					<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
				</div>\
				\
				<div class="modal-footer center">\
					<button type="submit" class="btn btn-small btn-success"><i class="icon-ok"></i> Submit</button>\
					<button type="button" class="btn btn-small" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>\
				</div>\
			</form>\
		</div>';


		var modal = $(modal);
		modal.modal("show").on("hidden", function(){
			modal.remove();
		});

		var working = false;

		var form = modal.find('form:eq(0)');
		var file = form.find('input[type=file]').eq(0);
		file.ace_file_input({
			style:'well',
			btn_choose:'Click to choose new avatar',
			btn_change:null,
			no_icon:'icon-picture',
			thumbnail:'small',
			before_remove: function() {
					//don't remove/reset files while being uploaded
					return !working;
				},
				before_change: function(files, dropped) {
					var file = files[0];
					if(typeof file === "string") {
						//file is just a file name here (in browsers that don't support FileReader API)
						if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
					}
					else {//file is a File object
						var type = $.trim(file.type);
						if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
								|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
								) return false;

						if( file.size > 1100000 ) {//~1Mb
							return false;
						}
					}

					return true;
				}
			});

		form.on('submit', function(){
			if(!file.data('ace_input_files')) return false;

			file.ace_file_input('disable');
			form.find('button').attr('disabled', 'disabled');
			form.find('.modal-body').append("<div class='center'><i class='icon-spinner icon-spin bigger-150 orange'></i></div>");

			var deferred = new $.Deferred;
			working = true;
			deferred.done(function() {
				form.find('button').removeAttr('disabled');
				form.find('input[type=file]').ace_file_input('enable');
				form.find('.modal-body > :last-child').remove();

				modal.modal("hide");

				var thumb = file.next().find('img').data('thumb');
				if(thumb) $('#avatar2').get(0).src = thumb;

				working = false;
			});


			setTimeout(function(){
				deferred.resolve();
			} , parseInt(Math.random() * 800 + 800));

			return false;
		});

	});



		//////////////////////////////
		$('#profile-feed-1').slimScroll({
			height: '250px',
			alwaysVisible : true
		});

		$('.profile-social-links > a').tooltip();

		$('.easy-pie-chart.percentage').each(function(){
			var barColor = $(this).data('color') || '#555';
			var trackColor = '#E2E2E2';
			var size = parseInt($(this).data('size')) || 72;
			$(this).easyPieChart({
				barColor: barColor,
				trackColor: trackColor,
				scaleColor: false,
				lineCap: 'butt',
				lineWidth: parseInt(size/10),
				animate:false,
				size: size
			}).css('color', barColor);
		});

		///////////////////////////////////////////


		$.mask.definitions['~']='[+-]';
		$('.input-mask-date').mask('99/99/9999');
		$('.input-mask-phone').mask('(999) 999-9999');
		$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
		$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
		
		
		
		

		
		$('.date-picker').datepicker().next().on(ace.click_event, function(){
			$(this).prev().focus();
		});

		///////////////////////////////////////////
		
		



		////////////////////
		//change profile
		$('[data-toggle="buttons-radio"]').on('click', function(e){
			var target = $(e.target);
			var which = parseInt($.trim(target.text()));
			$('.user-profile').parent().hide();
			$('#user-profile-'+which).parent().show();
		});
	});

</script>
<?php mysql_free_result($ADM);
								}
else
	echo '<script>alert("You are not logged in please login to proceed")
var newLocation = "../login.php";
window.location = newLocation;</script>';
			?></body>
</html>
