
<?php 
$query = "SELECT * FROM activity WHERE Ministry='$Dep' AND Project_Name='$Pname'";

$result = $localhost2->query($query);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    $Pmin = $row['Ministry'];
    $db=$row['PBudget'];
    $bd=$row['CPBudget'];
    $ec='0';
    $el='0';
    $ef='0';
    $etb='0';
    $ffname=$row['FNsup'];
    $llname=$row['LNsup'];
    $CPR=$row['CPRBudget'];



    if ($bd=='0') {
      $update=$localhost2->query("UPDATE activity SET CPBudget='$db' WHERE Ministry='$Dep' AND Project_Name='$Pname'");

    }
    if($bd!='0'){

      $bd=$row['CPBudget'];
      $update=$localhost2->query("UPDATE activity SET CPBudget='$bd' WHERE Ministry='$Dep'AND Project_Name='$Pname'");

    }


    

  }
}



?>


<div class="row-fluid ">
  <!-- block -->

  <div class=" verticalLine">
    <legend>Project Budget Allocation</legend> 

    <div class="space-12"></div>
    <form class="form-horizontal" method="POST" action="../../Apps/conTEAM.php">


     <div Name="Project Details" class="verticalLine1">


       <div class="control-group">
        <label class="control-label" for="typeahead">Ministry/Category:</label>
        <div class="controls span9">
          <p class="control-label" for="typeahead"><h3><?php echo $Pmin; ?></h3></p>

        </div>

        <label class="control-label" for="typeahead">Project Name:</label>
        <div class="controls span9">
          <p class="control-label" for="typeahead"><h3><?php echo $Pname; ?></h3></p>
          <input type="hidden" class="span4" name="PMinistry" value="<?php echo $Pmin;?>" />
          <input type="hidden" class="span4" name="BMinistry" value="<?php echo $bd;?>" />
          <input type="hidden" class="span4" name="PName" value="<?php echo $Pname;?>" />
          <input type="hidden" class="span4" name="Fname" value="<?php echo $ffname;?>"/>
          <input type="hidden" class="span4" name="Lname" value="<?php echo $llname;?>"/>
          <input type="hidden" class="span4" name="RemBudget" value="<?php echo $CPR;?>"/>



        </div>
      </div>


      <div Name="Project Cost" class="verticalLine2" >

        <div style="position: absolute; top: 100px;left: 450px;">

         <?php echo '<a href="A4.php"'; echo 'title="Click if Amount is Ksh.0">';?>
         <i class="icon-refresh bigger-230"></i>
         Refresh 
       </a>

     </div>


     <label style="position: absolute; top: 100px;left: 550px;"><h3>Ksh.<?php echo $bd;?></h3></label>
     <div class="control-group">
      <label class="control-label" for="typeahead">Current Project Development Cost</label>
      <div class="controls span9">
        <input type="text" class="span4" value="<?php echo $ec; ?>"  name="dCost" id="dcost" oninput="calculateB('dcost','lcost','fcost','tbudget')" required />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="typeahead">Current Project Labour Cost</label>
      <div class="controls span9">
        <input type="text" class="span4" value="<?php echo $el ;?>" name="lCost" id="lcost" oninput="calculateB('lcost','dcost','fcost','tbudget')"  required/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="typeahead">Current Project Facilities Cost</label>
      <div class="controls span9">
        <input type="text" class="span4" value="<?php echo $ef ;?>" name="fCost" id="fcost" oninput="calculateB('fcost','lcost','dcost','tbudget')"  required/>
      </div>
    </div>

  </div>



  <div class="verticalLine3">

    <div class="control-group">
      <label class="control-label" for="typeahead">Current Project Duration Time Frame</label>
      <div class="controls span9">
       <input type="text" class="span4 datepicker"name="pTT" id="ptt"  required/>
     </div>
   </div>
   <div class="control-group">
    <label class="control-label" for="typeahead">Current Project Total Estimated Budget</label>
    <div class="controls span9">
      <input type="text" class="span4" value="<?php echo $CPR; ?>" name="tBudget" id="tbudget" onchange="action(this.id)">
    </div>
  </div>

  <div class="form-actions">
    <button type="submit" class="btn btn-primary btn-mini">Save changes</button>
    <button type="reset" class="btn btn-danger btn-mini">Cancel</button>
  </div>


</div>
</form>


</div>




</div>

<!-- /block -->
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
    height: 250px;
    top: 180px;
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
    top:350px;
    width: 800px;
    margin-top: 50px;
    margin: 10px;
    padding: 10px;



  }

</style>

