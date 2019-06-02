


<?php include("../Assets/Uheader.php");?> 


<nav class="navbar-inverse" style="background-image:url('../Assets/image/real.png'); position: relative; left:0px;top:0px;width:1348.5px; height:50px;">


    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <!-- ================================================== -->
  
    <a href="../index.php">  
    <div>
    <img src="../Assets/image/logo.png" style="position: absolute; left: 200px;top:0px;width:50px;" alt="CPMS Logo">
    </div>
    </a>

    <h1 class="text-center"><p style="color:#ABD9F2;">County Permomance and Monitoring System </p> </h1> </nav>
 <a href="../index.php"> 
  <div>
    <img src="../Assets/image/logo.png" style="position: absolute; left: 1100px;top:10px;width:50px;" alt="CPMS Logo">
    </div>
</a>

<div style="background-color:#ABD9F2;position: absolute; left: 30px;top:80px;width:650px;">
  
  <form action="../Apps/connAgenda.php" id="contact-form" class="form-horizontal" method = "POST">
         
            <legend class="text-center">Report A Disaster</legend>
             
              <input  type="hidden" name="disaster" value="disaster">
             
               <div class="control-group"style="position: absolute; left: 10px;top:80px;width:600px;background-color:#ABD9F2;">
                <label class="control-label" for="select" >Select a Category</label>

                <div class="controls">

                  <select name = "issue" id = "issue" class="input-xlarge" required>
                    <option value = "">Report about? </option>
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
                    <option value = "Other">Other</option>
                  </select>
                </div>
              </div><br/>
              <div class="control-group" style="position: absolute; left: 10px;top:130px;width:600px;background-color:#ABD9F2;">
                <label class="control-label" for="selection">Select your Constituency</label>
               <div class="controls">

          <select name = "constituency" id = "constituency" class="input-xlarge" onchange="populate(this.id, 'ward')" required>
            <option value = "">Your Constituency</option>
            <option value = "Ainamoi">Ainamoi</option>
            <option value = "Belgut">Belgut</option>
            <option value = "Kipkelion West">Kipkelion West</option>
            <option value = "Kipkelion East">Kipkelion East</option>
            <option value = "Bureti">Bureti</option>
            <option value = "Soin/Sigowet">Soin/Sigowet</option>
          </select>
        </div>
      </div>



      <br/>
      <div class="control-group" style="position: absolute; left:10px;top:180px;width:600px;background-color:#ABD9F2;">
        <label class="control-label" for="selection">Select your Ward</label>
        <div class="controls">

          <select name = "ward" id = "ward" class="input-xlarge" required>
        
          </select>
        </div>

      </div>
            
              <div class="control-group" style="position: absolute; left:10px;top:230px;width:600px;background-color:#ABD9F2;">
                <label class="control-label" for="message">Enter your Message</label>
                <div class="controls">
                  <textarea class="input-xxlarge" name="description" id="description" rows="3" placeholder = "Draft your Issue here ..." required></textarea>
                </div>
                <div class="space-6"></div>
                <button type="submit" class="btn btn-primary btn-medium" id="send_btn" name="submit"  ><i class="icon-ok"></i>Submit</button>
                <button type="clear" class="btn btn-success" onclick="history.back(-1)" ><i class="icon-undo"></i>Cancel</button>
            <div class="space-8"></div>
<div>

        
                  <div class="widget-box">
                    <div class="widget-header widget-header-flat widget-header-small">
                      <h5>
                        <i class="icon-signal"></i>
                        County Resources
                      </h5>

                      <div class="widget-toolbar no-border">
                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                          This Financial Year
                          <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-info pull-right dropdown-caret">
                          <li class="active">
                            <a href="#">This Financial Year</a>
                          </li>

                          <li>
                            <a href="#">Last Financial Year</a>
                          </li>

                          <li>
                            <a href="#">Next Financial Year(Projections)</a>
                          </li>

                          <li>
                            <a href="#">Summary</a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="widget-body">
                      <div class="widget-main">
                        <div id="piechart-placeholder"></div>

                        <div class="hr hr8 hr-double"></div>

                        
                      </div><!--/widget-main-->
                    </div><!--/widget-body-->
                  </div><!--/widget-box-->
                
</div>



              </div>
          </form>
</div>



<div class="scroll">
  
<fieldset class="">
            <legend class="text-center">Recent Responded Disasters</legend>
            <?php

            include('../Connections/connect.php');

             $query = "SELECT * FROM s_disaster where Q_comment !='' order by date_saved desc limit 5";
            $result = $localhost2->query($query);
if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          $Agenda_idc=$row['Agenda_id'];
          $Constituency=$row['Constituency'];
          $ward=$row['Ward'];
          $date_saved=$row['date_saved'];
          $comment=$row['Q_comment'];
          $descrp=$row['description'];
          $issue=$row['issue'];
          $respo=$row['Responded_by'];
          $fmnsty=$row['f_Ministry'];
          $fcont=$row['f_Constituency'];
           $comm=$row['Comments'];
          ?>

              <div>
                <div class="profile-activity clearfix">


                  <h6 style="color:#9e0f6e"><U>Issue: </U><?php echo $issue;?></h6>
                  <p><U>Location: </U><?php echo $Constituency;?> Constituency in <?php echo $ward;?> ward</p>
                  <h6 class="text-info"><U>Details: </U><?php echo $descrp;?></h6>
                 <p>Response: <?php echo $comment; ?> </p>
                  <p> <U>Responded by: </U> <?php echo $respo.' '.$fmnsty.' '.$fcont;?><br><p><a href="#comments" data-action="collapse">
                <i class="icon-chevron-down"></i>View Comments
              </a></p><hr></p>

                  <?php } }?>


            </fieldset>
</div>






<style type="text/css">
  
  .scroll{
  position: absolute;
   left:830px;
   top:80px;
   width:500px;
overflow-y: auto;
height: 700px;
background-color:#ABD9F2;
}
</style>
      



        <!-- PAGE CONTENT BEGINS HERE -->


        <!-- PAGE CONTENT ENDS HERE -->


        <?php include("../assets/Ufooter.php"); ?>
