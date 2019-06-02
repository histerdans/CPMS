
<?php require_once('../../Connections/localhost.php'); ?>
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
  $sess=$_SESSION['MM_Username'];
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
  <html>
  <title></title>
  <head>
   <meta charset="utf-8" />
   <title>KCOCPS</title>
   <meta name="KCOCPS" content="Team Project" />

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
 </head>
 <body class="container">

  <div >

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">



          <h4 class="modal-title">Reply a Feedback</h4>

        </div>

        <div class="modal-body">
          <form id="contact-form" class="form-horizontal" action="../../Apps/connfeedr.php" method="post" >
            <fieldset>
              <?php

              require_once('../../Connections/localhost.php');  
              $ID=$_GET['fid'];
              $query = "SELECT * FROM feedbacks  where fid = '$ID' order by fid desc ";
              $resultc = mysql_query($query,$localhost1);
              while ($row = mysql_fetch_assoc($resultc)) {
                $fid=$row['fid'];
                $name=$row['Name'];
                $email=$row['Email'];
                $msg=$row['Message'];
                $datp=$row['Date_posted'];
              }?>
              <div class="Container">
                <div class="control-group">
                  <label class="control-label" for="form-field-1">Sender Name:</label>
                  <div class="controls">
                    <label class="control-label" for="form-field-1"><?php echo $name; ?></label>

                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="form-field-1">Sender Email:</label>
                  <div class="controls">
                    <label class="control-label" for="form-field-1"><?php echo $email; ?></label>

                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="form-field-1">Feedback Message:</label>
                  <div class="controls">
                    <p for="form-field-1"><?php echo $msg; ?></p>

                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="form-field-1">Posted On:</label>

                  <div class="controls">
                  <label class="control-label" for="form-field-1"><?php echo $datp; ?></label>
                    <input type="hidden" name="sess" value="<?php echo $sess; ?>">
                    <input type="hidden" name="ID" value="<?php echo $ID; ?>"> 
                    <input type="hidden" name="own" value="Admin :">
                  </div>
                </div>       


                <div class="control-group">
                  <label class="control-label" for="message">Enter Post Content</label>
                  <div class="controls">
                    <textarea class="input-xxlarge" name="content" id="content" rows="3" placeholder = "Draft the Reply here ..."required></textarea> 
                  </div>
                </div>

              </div>


            </div></fieldset>




          </div>

        </div>
        <div class="control-group btn span5">

          <button type="button" class="btn btn-danger btn-mini"  onclick="history.back(-1)">Close</button>



          <button type="submit" class="btn btn-info btn-mini">Reply</button>

        </div>
      </div>

    </div>

  </form>
</div></div></div></div></body>
<?php include("../../Assets/Afooter.php"); ?>
<?php
}
else
  echo '<script>alert("You are not logged in please login to proceed")
var newLocation = "../login.php";
window.location = newLocation;</script>';
?>

<!-- Modal HTML -->



</div>
<?php include("../../Assets/Afooter.php"); ?>

