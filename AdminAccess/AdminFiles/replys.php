
<?php include("../../Assets/Aheader.php");

?>



<div id="main-content" class="clearfix">
              <div id="page-content" class="clearfix">

                <div class="page-header position-relative">
                  <h1> <small><i class="icon-double-angle-right"></i> overview & status</small></h1>
                </div><!--/page-header-->
<form name="reply" action="../../Apps/connRply.php" method="POST">
  <?php 
  $Agenda_ids=$_GET['Agenda_ids'];
 echo'<input type="hidden" name="Agenda_ids" value="'.$Agenda_ids.'">';
 echo'<input type="hidden" name="role" value="'.$role.'">';
 echo'<input type="hidden" name="Status" value="Replied">';
 
  ?>
   <div class="span4 pull-right">
    <?php 
 
 
        $query = "SELECT * FROM s_suggestion WHERE Agenda_id=$Agenda_ids";
        $resultc = mysql_query($query,$localhost1);

        while ($row = mysql_fetch_array($resultc)) {
          
          $constituency=$row['Constituency'];
          $ward=$row['Ward'];
          $comment=$row['F_comment'];
          $descrp=$row['description'];
          
          $issue=$row['issue'];

          
           
          echo'<lable><b>Constituency</b></lable><div>'.$constituency.'</div><hr>';
          echo'<lable><b>Ward</lable></b><div>'.$ward.'</div><hr>';
          echo'<lable><b>Description</b></lable><div>'.$descrp.'</div><hr>';
          echo'<lable><b>Subject</b></lable><div>'.$issue.'</div><hr>';
           echo'<lable><b>QAs Comment</b></lable><div>'.$comment.'</div><hr>';
        

        }?>
      </div>
  <div class="span6 widget-container-span">
    <div class="widget-box">
      <div class="widget-header widget-header-large">
        <h4>Reply Agenda</h4>

        <div class="widget-toolbar">
          <a href="#" data-action="settings">
            <i class="icon-cog"></i>
          </a>

          <a href="#" data-action="reload">
            <i class="icon-refresh"></i>
          </a>

          <a href="#" data-action="collapse">
            <i class="icon-chevron-up"></i>
          </a>

          <a href="#" data-action="close">
            <i class="icon-remove"></i>
          </a>
        </div>
      </div>

      <div class="widget-body">
        <div class="row-fluid">
         <textarea id="form-field-20" name="Qcomment" class="autosize-transition span12" placeholder = "Draft your Comment here..." required></textarea>
       </div>
       <div class="btn-group btn-group-vertical">
         <button class="btn btn-small btn-primary" name="submit">Reply</button>
       </div>
       <div class="btn-group btn-group-vertical">
         <input type="reset"class="btn btn-small btn-danger" name="reset" Value="Cancel" onclick="history.back(-1)">
      </div>
    </div>
  </div>
</div>

<?php include("../../Assets/Afooter.php"); ?>









