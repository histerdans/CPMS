
<?php 
$query = "SELECT * FROM activity WHERE Ministry='$Dep'";
$sql = "SELECT * FROM budget WHERE Ministry='$Dep'";
$result = $localhost2->query($query);
$result1 = $localhost2->query($sql);
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    $Pmin = $row['Ministry'];
    $db=$row['MBudget'];
    $bd=$row['CMBudget'];
    $ec='0';
    $el='0';
    $ef='0';
    $etb='0';


    if ($bd=='0') {
      $update=$localhost2->query("UPDATE activity SET CMBudget='$db' WHERE Ministry='$Dep'");

    }
     if($bd!='0'){

      $bd=$row['CMBudget'];
      $update=$localhost2->query("UPDATE activity SET CMBudget='$bd' WHERE Ministry='$Dep'");

    }
  

    

  }
}
if ($result1->num_rows > 0) {

  while($row = $result1->fetch_assoc()) {
    $Bmin = $row['BudgetM'];
    $update=$localhost2->query("UPDATE activity SET MBudget='$Bmin' WHERE Ministry='$Dep'");
    
  }

  

}



?>


<div class="row-fluid ">
  <!-- block -->

  <div class=" verticalLine">
    <legend>Project Budget Allocation</legend> 

    <div class="space-12"></div>
    <form class="form-horizontal" method="POST" action="../../Apps/conCEC.php">

      <input type="hidden" name="PMinistry" value="<?php echo $Pmin;?>" />
      <input type="hidden" name="BMinistry" value="<?php echo $db;?>" />
 <label style="position: absolute; top: 8px;left: 450px;"><h3><?php echo $Pmin;?></h3></label>
      <div Name="Project Details" class="verticalLine1">


       



        <div Name="Project Cost" class="verticalLine2" >

          <div style="position: absolute; top: 100px;left: 450px;">

           <?php echo '<a href="A3.php"'; echo 'title="Click if Amount is Ksh.0">';?>
           <i class="icon-refresh bigger-230"></i>
           Refresh 
         </a>

       </div>


       <label style="position: absolute; top: 100px;left: 550px;"><h3>Ksh.<?php echo $bd;?></h3></label>

       <div class="control-group">
        <label for="form-field-select-2">Project Name</label>
        <div class="controls">
          <select id="form-field-select-2"  name="ProjectName">
           <option value="">--Select Project--</option>
           <?php
           $query="SELECT * from activity where E_tBudget='0' AND Ministry='$Pmin'";
           $results=mysqli_query($localhost2, $query);
           foreach ($results as $projectName) {
             ?>
             <option value="<?php echo $projectName["Project_Name"];?>"><?php  echo $projectName["Project_Name"];?></option>
             <?php }?>
           </select>
         </div>
       </div>



       <div class="control-group">
        <label class="control-label" for="typeahead">Project Development Cost</label>
        <div class="controls span9">
          <input type="text" class="span4" value="<?php echo $ec ?>" name="dCost" id="dcost" oninput="calculateB('dcost','lcost','fcost','tbudget')"/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="typeahead">Project Labour Cost</label>
        <div class="controls span9">
          <input type="text" class="span4" value="<?php echo $el ?>" name="lCost" id="lcost" oninput="calculateB('lcost','dcost','fcost','tbudget')"/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="typeahead">Project Facilities Cost</label>
        <div class="controls span9">
          <input type="text" class="span4" value="<?php echo $ef ?>" name="fCost" id="fcost" oninput="calculateB('fcost','lcost','dcost','tbudget')"/>
        </div>
      </div>
      <div class="control-group">
       <label class="control-label" for="date01">Project Duration Time Frame</label>
       <label class="control-label" for="date01">Project Start</label>
       <div class="controls">
         <input type="text" name="pStart" class="span4 datepicker" id="datest" oninput="calculateDate(this.id,'datest','ptt')"/>

       </div>
       <label class="control-label" for="date01">Project Completion</label>
       <div class="controls">
         <input type="text" name="pStop" class="span4 datepicker" id="datesp" oninput="calculateDate(this.id,'datest','ptt')"/ >

       </div>
     </div>

   </div>



   <div class="verticalLine3">

    <div class="control-group">
      <label class="control-label" for="typeahead">Project Duration Time Frame(Days)</label>
      <div class="controls span9">
        <input type="text" class="span4" name="pTT" id="ptt"/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="typeahead">Project Total Estimated Budget</label>
      <div class="controls span9">
        <input type="text" class="span4" name="tBudget" id="tbudget" value="<?php echo $etb ?>"/>
      </div>
    </div>

    <div class="form-actions">
      <button type="submit" class="btn btn-primary btn-mini">Save changes</button>
      <button type="reset" class="btn btn-danger btn-mini">Cancel</button>
    </div>


  </div>



</div>

</form>


</div>



<!--/.fluid-container-->
<link href="../../Assets/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="../../Assets/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="../../Assets/vendors/chosen.min.css" rel="stylesheet" media="screen">

<link href="../../Assets/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

<script src="../../Assets/vendors/jquery-1.9.1.js"></script>
<script src="../../Assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../../Assets/vendors/jquery.uniform.min.js"></script>
<script src="../../Assets/vendors/chosen.jquery.min.js"></script>
<script src="../../Assets/vendors/bootstrap-datepicker.js"></script>

<script src="../../Assets/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
<script src="../../Assets/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

<script src="../../Assets/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

<script type="text/javascript" src="../../Assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../../Assets/assets/form-validation.js"></script>

<script src="../../Assets/assets/scripts.js"></script>
<script>

  jQuery(document).ready(function() {   
   FormValidation.init();
 });


  $(function() {
   $(".datepicker").datepicker();
   $(".uniform_on").uniform();
   $(".chzn-select").chosen();
   $('.textarea').wysihtml5();


 });
</script>
<style type="text/css">
  .verticalLine {
    border:double 3px;
    color: #000;
    position: relative;
    height: 900px;
    padding-top:10px;
    padding-right:5px;
    margin: 10px;
    width: 890px;



  }.verticalLine1 {
    border:solid 1px;
    color:#081feb;
    position: absolute;
    height: 750px;
    top:80px;
    width: 850px;
    padding-top: 50px;
    margin: 10px;


  }
  .verticalLine2 {
    border:solid 1px;
    color:#081feb;
    position:absolute;
    height: 350px;
    top: 50px;
    margin-top: 50px;
    width: 800px;
    padding: 10px;
    margin: 10px;


  }

  .verticalLine3 {
    border:solid 1px;
    color:#081feb;
    position: relative;
    height: 200px;
    top:430px;
    width: 800px;
    margin-top: 50px;
    margin: 10px;
    padding: 10px;



  }

</style>

