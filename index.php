<?php

session_start();
error_reporting(E_ALL);
include('Connections/connect.php');
$cap = 'notEq';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['captcha'] == $_SESSION['cap_code']) {

    $name=htmlspecialchars(mysqli_escape_string($localhost2,$_POST['Name']));
    $email=htmlspecialchars(mysqli_escape_string($localhost2,$_POST['Email']));
    $comm=htmlspecialchars(mysqli_escape_string($localhost2,$_POST['comments']));
    if ($update=$localhost2->query("INSERT INTO feedbacks(Name,Email,Message) 
      VALUES('$name','$email','$comm')")) {
     echo '<script>alert("Your feedback has being received Successfully. Thank you for your contribution")
   var newLocation = "index.php";
   window.location = newLocation;</script>';
 }


 $cap = 'Eq';
} else {
 echo '<script>alert("Your feedback was not send. Verification code was wrong please try again!!!")
 var newLocation = "index.php";
 window.location = newLocation;</script>';
 $cap = '';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CPMS User Panel</title>
  <!--basic styles-->

  <link href="Assets/css/bootstrap.css" rel="stylesheet" />
   <link href="Assets/css/ace.min.css" />
     <link href="Assets/css/ace.css" />

  <link rel="stylesheet" href="Assets/css/font-awesome.min.css" />


    <!--[if IE 7]>
      <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
      <![endif]-->

      <!--page specific plugin styles-->

      <!--fonts-->

      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

      <!--ace styles-->

      <link href="UserAccess/css/menu.css" rel="stylesheet" type="text/css" />
      <link rel="shortcut icon" type="image/x-icon" href="Assets/image/stamp.png">

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->

      <!--inline styles related to this page-->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    </head>

    <body style="margin-left:10px; margin-top:10px;background-image:url('Assets/image/ele.png');"> <table border="0" width="100%" class="wrap">
      <tr><td width="100%" colspan="4" >
        <div>
          <?php include('UserAccess/nav.html');?>
        </div>
      </td></tr>
      <tbody>
        <tr>
          <td colspan="4" width="100%" style="background-image:url('Assets/image/brick.png');"><div style="margin-left:330px; margin-right:20px;"  >
            <?php include('UserAccess/header.php');?>
          </div>

          <div  class="scroll1" u="caption" t="T|IE*IE" t2="B*IB" style="">
           <center><b><u><marquee style="color:#b5bfef"> WELCOME CITIZEN TO....</marquee></u></b></center><strong><p style="color:#b5bfef">County  Permomance and Monitoring System (CPMS) is a public system that allows the county government to monitor and access their services rendered to the County Citizens. It allows the public to participate by connecting and passing their complains, inquiries or opinions anonymously thus creation of a democratic channel of management of the county resources.</p></strong>
           <div class="lable" style="background-color:#a2fff3;color:#0a0503"><h5>Governor mission statements</h5> </div>
           <hr/>
           <div class="lable" style="background-color:#a2fff3;color:#0a0503"><H5>County Updates</H5></div>
         </div>



       </td>
     </tbody>



     <tfoot>
      <tr  style="background-color:#0C090A;"><td colspan="3" ><div>
        <h3 class="page-header" style="color:#ABD9F2;"><strong>Keep in Touch with us</strong></h3>
        <h5 style="color:#ABD9F2;"><strong>And tell us what you think about this new system</strong></h5>
        <form id="contact" class="col-sm-5" action="index.php" method="post">

          <div class="form-group">
            <label class="control-label" for="contact-name" style="color:#ABD9F2;">Name</label>
            <div class="controls">
              <input id="contact-name" name="Name" placeholder="My name is..."  class="form-control input-sm " required>
            </div>
          </div><!-- End name input -->

          <div class="form-group">
            <label class="control-label" for="contact-mail" style="color:#ABD9F2;">Email</label>
            <div class=" controls">
              <input id="contact-mail" name="Email" placeholder="Please respond at..." class="form-control input-sm " required>
            </div>
          </div><!-- End email input -->

          <div class="form-group">
            <label class="control-label" for="contact-message" style="color:#ABD9F2;">Message</label>
            <div class="controls">
              <textarea id="contact-message" name="comments"  placeholder="I wanna talk about..." class="form-control input-sm " required></textarea>
            </div>
          </div><!-- End textarea -->

          <table style="color:#ABD9F2;">

            <tr>
              <td colspan="2"><label>Enter the contents of image</label><label class="mandat"> *</label></td>
            </tr>
            <tr>
              <td width="60px">                           
                <input type="text" name="captcha" id="captcha" maxlength="6" size="6" style="color:#000000;"/></td>
                <td><img src="captcha.php"/></td>
              </tr>
              <tr>
                <td><input type="submit" value="Send FeedBack" id="submit" class="btn btn-theme btn-sm" style="color:#000;"/></td>
                <td> <div class="cap_status"></div></td>
              </tr>


            </table>


          </div>
        </form><!-- End contact-form --></td><td>
        <div class="verticalLine1" >
        </div>
        <div class="quote">
          <h4>Your Views</h4>
        </div>
        <div class="scroll">
          <?php
          include('Connections/connect.php');

          $sql = "SELECT * FROM feedbacks order by fid desc";
          $result =$localhost2->query($sql);

          if ($result->num_rows > 0) {
    // output data of each row
           while($row = $result->fetch_array()) {
            $stat=$row['status'];
            $fid=$row['fid'];
            $name=$row['Name'];
            $email=$row['Email'];
            $msg=$row['Message'];
            $rpy=$row['Reply'];


            ?> 

            <div class="user">
             <img src="Assets/image/user.png" class="img-circle pull-left" style="width:20px"><h5 style="color:#000000"><?php echo $name;?></h5>
             <h6 class="text-info"><?php echo $msg;?></h6><?php echo $stat." ".$rpy;?><h6><p>..........................................................................................</p></h6>
             
           </div>  

           <?php     }
         } else {
          echo "No Feedbacks";
        }
        $localhost2->close();?>
      </div>
      <div class="adds">
        <?php
        include('Connections/connect.php');

       
        $sql1 = "SELECT ID, Post, Content, Date_s FROM articles order by ID desc";
        $resulta =$localhost2->query($sql1);

        if ($resulta->num_rows > 0) {
    // output data of each row
         while($row = $resulta->fetch_array()) {
          $post=$row['Post'];
          $cont=$row['Content'];
          $date=$row['Date_s'];
            ?> 
         

<i class="icon-bell-alt icon-animated-bell">Announcement(<?php echo $date;?>)</i>
          <div class="alert alert-block alert-success">
         <h5>Title:<?php echo $post;?></h5>
          <h6 class="text-info">Bulleting: <?php echo $cont;?></h6>

          </div>



          <?php    }
        } else {
          echo "0 results";
        }
        $localhost2->close();?>
      </div>
      <div class="verticalLine" >
      </div>
      <div class="row">
       <div >

        <p style="position: absolute; left:835px;top:530px;width:300px;height:25px;color:#ABD9F2;"><strong>Connect with us</strong> and share your ideas. we value your feedback:</p>
        <strong>
          <address style="color:#ABD9F2;position: absolute; left: 840px;top:585px;width:500px;">
           <b><strong> Address:</strong></b><br/>
           County Government of .......<br/>
           ........Highway,<br/>
           P.o Box 112-20100,<br/>
           Nakuru-Kenya.
         </address></strong>
         <p style="color:#ABD9F2; position: absolute; left: 850px;top:690px;width:500px;"><b>OR</b>&nbsp;&nbsp; Email us @</p><strong><address style="color:#ABD9F2;position: absolute; left: 1000px;top:690px;width:300px;">info@-county.org</address></strong>
       </div><div><p style="color:#ABD9F2; position: absolute; left: 850px;top:720px;width:300px;">Visit our website @</p><strong><address style="color:#ABD9F2;position: absolute; left: 1000px;top:720px;width:300px;">www.county.go.ke/</address></strong>
     </div>


   </div></td></tr><tr><td><footer style="color:#ABD9F2;background-image:url('Assets/image/tasky.png');">


   <center><p>Copyright 2015©county powered by <a href="">webtech masterz</a></p></center>

 </footer></td></tr>
</tfoot>

</table>






</body>

<style> 
  .wrap {
    width: 25em; 
    word-wrap: break-word;
  }
  .verticalLine {
    border:solid 1px;
    color:#4464FF;
    position: absolute;
    left: 830px;
    top: 520px;
    height: 430px;
  }
  .verticalLine1 {
    border:solid 1px;
    color: #4464FF;
    position: absolute;
    left: 550px;
    top: 520px;
    height:430px;
  }
  .quote{
    position: absolute;
    left:635px;
    top:540px;
    width:300px;
    height:405px;
    color:#ABD9F2;

  }
  .scroll{
    position: absolute;
    left:553px;
    top:576px;
    width:276px;
    overflow-y: auto;
    height: 374px;
    background-image:url('Assets/image/vbk.png'); 
  }
  .scroll1{
    position: absolute;
    left:35px;
    top:120px;
    width:300px;
    overflow-y: auto;
    height: 380px;
    position: absolute; 
    font-size:17px;
    color:#00050f;
    line-height:30px; 
    text-align:left;
  } .adds{
    position: absolute;
    left:832px;
    top:750px;
    width:500px;
    overflow-y: auto;
    height: 200px;
    background-image:url('Assets/image/vbk.png'); 
    margin-left:2px;
    margin-right:3px; 
  }
</style>
</html>