    

<?php include("../../Assets/Aheader.php");?>

<div id="main-content" class="clearfix">
  <div id="page-content" class="clearfix">

    <div class="page-header position-relative">
      <h1> <small><i class="icon-double-angle-right"></i> overview & status</small></h1>
    </div><!--/page-header-->
    <form name="forward" action="../../Apps/connfwd.php" method="POST">
      <div class="span4 pull-right">
        <?php 
        $Agenda_idcr=$_GET['Agenda_idcr'];
        $query = "SELECT * FROM s_corruption WHERE Agenda_id=$Agenda_idcr";
       $resultc = mysql_query($query,$localhost1);

        while ($row = mysql_fetch_array($resultc)) {
          
          
          $constituency=$row['Constituency'];
          $ward=$row['Ward'];
          $comment=$row['F_comment'];
          $descrp=$row['description'];
          
          $issue=$row['issue'];

          echo'<input type="hidden" name="Agenda_idcr" value="'.$Agenda_idcr.'">';
          echo'<input type="hidden" name="Status" value="Forwarded">';
          
          echo'<lable><b>Constituency</b></lable><div>'.$constituency.'</div><hr>';
          echo'<lable><b>Ward</lable></b><div>'.$ward.'</div><hr>';
          echo'<lable><b>Description</b></lable><div>'.$descrp.'</div><hr>';
          echo'<lable><b>Subject</b></lable><div>'.$issue.'</div><hr>';
          

        }  ?>
      </div>
      <div class="span6 widget-container-span ">
        <div class="widget-box">
          <div class="widget-header widget-hetader-large">
            <h4>Forward Agenda</h4>

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
           

            <fieldset>
             
              <div class="control-group">
                <div class="control-group">
                  <label class="control-label" for="message">Add Additional Comment </label>
                  <br/><div class="row-fluid">
                  <textarea id="form-field-20" name="Qcomment" class="autosize-transition span12" placeholder = "Draft your Comment here..." ></textarea>
                </div>
              </div>
              <div class="control-group pull-right">
                <i>Select your Constituency</i>
                <label class="control-label" for="selection"></label>
                <div class="controls">
                  
                  <select name = "Constituency" id = "constituency" class="input-xlarge">
                    <option value = "">Select your Constituency</option>
                    <option value = "Ainamoi">Ainamoi</option>
                    <option value = "Belgut">Belgut</option>
                    <option value = "Kipkelion West">Kipkelion West</option>
                    <option value = "Kipkelion East">Kipkelion East</option>
                    <option value = "Bureti">Bureti</option>
                    <option value = "Soin/Sigowet">Soin/Sigowet</option>
                  </select>
                </div>
              </div>


              <label class="control-label" for="selection">Select Administrative Authority</label>
              <div class="controls">
                <select name = "User_role" id = "user_role" onchange="checkifempty(this.id,'ministry','constituency')">
                  <option value = "">Forward To:</option>
                  <option value = "Sub-County Admin">Sub County Administartor</option>
                  <option value = "Dept_Sub-County Admin">Deputy Sub County Administartor</option>
                  <option value = "County Secretary">County Secretary</option>
                  <option value = "C.O">Chief Officer</option>
                  <option value = "C.E.C">C.E.C Minister of</option>
                  <option value = "Deputy Governor">Deputy Governor</option>
                  <option value = "Governor">Governor</option>

                  
                </select>
              </div></div>


              <div class="control-group">
                <label class="control-label" for="selection">Choose Ministry:</label>
                <div class="controls">
                  <select name = "Ministry" id = "ministry">
                    <option value = "">Ministry of:...</option>
                    <option value = "Finance & Economic Planning">Finance & Economic Planning</option>
                    <option value = "Agriculture, Livestock & Fisheries">Agriculture, Livestock & Fisheries</option>
                    <option value = "Health Services">Health Services</option>
                    <option value = "Education, Youth affairs, Culture & Social Services">Education, Youth affairs, Culture & Social Services</option>
                    <option value = "Land, Housing & Physical Planning">Land, Housing & Physical Planning</option>
                    <option value = "Public Works, Roads & Transport">Public Works, Roads & Transport</option>
                    <option value = "Water, Energy, Forestry, Environment and Natural Resources">Water, Energy, Forestry, Environment and Natural Resources</option>
                    <option value = "Public Service Management">Public Service Management</option>
                    <option value = "Trade, Industrialization, Co-operate  Management & Wildlife">Trade, Industrialization, Co-operate  Management & Wildlife</option>
                    <option value = "Information, Communication & E-Government">Information, Communication & E-Government</option>
                  </select>
                </div></div>
              </div>
              <div class="btn-group btn-group-vertical">
               <button class="btn btn-small btn-primary" name="submit">Forward</button>
             </div>
             <div class="btn-group btn-group-vertical">
               <input type="reset"class="btn btn-small btn-danger" name="reset" Value="Cancel" onclick="history.back(-1)">

             </div>

           </fieldset>
         </form>






         <?php include("../../Assets/Afooter.php"); ?>









