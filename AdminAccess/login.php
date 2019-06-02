<?php require_once('../Connections/localhost.php'); ?>
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

$colname_Login = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Login = $_SESSION['MM_Username'];
}
mysql_select_db($database_localhost, $localhost1);
$query_Login = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_Login, "text"));
$Login = mysql_query($query_Login, $localhost1) or die(mysql_error());
$row_Login = mysql_fetch_assoc($Login);
$totalRows_Login = mysql_num_rows($Login);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Username'])) {
  $loginUsername=htmlspecialchars(mysql_real_escape_string($_POST['Username']));

  $password=htmlspecialchars(mysql_real_escape_string($_POST['Password'])); 

  $MMprojectID=$loginUsername.$password;
  $MM_fldUserAuthorization = "user_role";
  $MM_redirectLoginSuccess = "../Apps/connLog.php";
  $MM_redirectLoginFailed = "../Apps/connLogO.php";
  $MM_redirecttoReferrer = true;
  mysql_select_db($database_localhost, $localhost1);
  
  $LoginRS__query=sprintf("SELECT username, password, user_role FROM users WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
  
  $LoginRS = mysql_query($LoginRS__query, $localhost1) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'user_role');
    
    if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	
    $_SESSION['MM_projectid'] = $MMprojectID;

    $MMID=$_SESSION['MM_projectid'];

    if (isset($_SESSION['PrevUrl']) && true) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../Assets/css/login.min.css">
  <link rel="stylesheet" href="../Assets/css/login.css">
  <link rel="stylesheet" href="../Assets/magic.css">   
  <link rel="shortcut icon" type="image/x-icon" href="../Assets/image/stamp.png">
  
</head>
<body>
 <div class="container">
   
  <div class="text-center"><br/><br/><br/>
   <img src="../Assets/image/logo.png" style="position: absolute; left: 620px;top:10px;width:120px;" alt="CPMS Logo"> </img><label><h1 style="color:#ffffff;">County  Permomance and Monitoring <br/>System (CPMS)</h1></label>
 </div>
 
 <div class="tab-content">
   
   <div id="login" class="tab-pane active">
     <form action="<?php echo $loginFormAction; ?>" method="POST" name="LoginForm" class="form-signin" id="LoginForm">
      <p style="color:#ffffff;"class="muted text">
        Enter your username and password
      </p>
      <input type="text" placeholder="Username" class="input-block-level" name="Username" id="Username" required>
      <input type="password" placeholder="Password" class="input-block-level" name="Password" id="Password" required>
      <button class="btn btn-large btn-primary btn-block" type="submit" name="submit">Sign in</button>
    </form>
  </div>
  <div id="forgot" class="tab-pane">
   <form action="../Apps/connForgot.php" class="form-signin" method="POST" name="RequestForm">
     <input type="hidden"  name="urli"value="Admin/login.php">
     <p class="muted text-center">
      Enter your valid e-mail
    </p>
    <input type="email" placeholder="Email eg.Username@domain.com" required class="input-block-level" name="Email">
    <br>
    <br>
    <button class="btn btn-large btn-danger btn-block" type="submit" name="Submit">Recover Password</button>
  </form>
</div>
<div id="signup" class="tab-pane">
  <form action="../Apps/connSignup.php" class="form-signin" method="Post" name="SignupForm">
    <input type="hidden"  name="urli1" value="Admin/login.php">
    <input type="text" placeholder="Username" class="input-block-level" name="NUsername" id="Username" required>
    <input type="email" placeholder="Email eg.Username@domain.com" name="Email" id="Email" class="input-block-level" required>
    <input type="password" placeholder="Password" class="input-block-level" name="Password" id="Password" required>
    <button class="btn btn-large btn-success btn-block" type="submit" name="submit">Send Request</button>

  </form>
</div>
</div>
<div class="text-center">
  <ul class="inline" >
    <li ><a class="muted" href="#login" data-toggle="tab"><div style="color:#ffffff;">Login</div></a></li>
    <li><a class="muted" href="#forgot" data-toggle="tab"><div style="color:#ffffff;">Forgot Password</div></a></li>
    <li><a class="muted" href="#signup" data-toggle="tab"><div style="color:#ffffff;">Signup</div></a></li>
  </ul>
</div>




</div> 


<!-- /container -->
<script src="../Assets/js/jquery-1.10.2.min.js"></script>
<script>window.jQuery || document.write('<script src="../Assets/js/jquery-1.10.1.min.js"><\/script>')</script>
<script type="text/javascript" src="../Assets/js/login.min.js"></script>

<script>
  $('.inline li > a').click(function() {
    var activeForm = $(this).attr('href=connect.php') + ' > form';
                //console.log(activeForm);
                $(activeForm).addClass('magictime swap');
                //set timer to 1 seconds, after that, unload the magic animation
                setTimeout(function() {
                  $(activeForm).removeClass('magictime swap');
                }, 1000);
              });

</script>

</body>
</html>
<?php
mysql_free_result($Login);

?>
