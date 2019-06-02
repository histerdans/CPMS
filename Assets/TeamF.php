<?php 
$query = "SELECT * FROM budget ";
$result = $localhost2->query($query);
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    $bR = $row['MBudget'];
  }
}
?>

<div class="row-fluid ">
  <!-- block -->

  <div class=" verticalLine">
   <form class="form-horizontal" method="POST" action="../../Apps/conBudget.php">


    <input type="hidden" name="Bid" value="<?php echo $bR; ?>" />
    <label style="position: absolute; top: 20px; left: 650px"><h2>Ksh.<?php echo $bR; ?></h2></label>

 
    <legend>Budget Allocation</legend>

    <div Name="Project Details" class="verticalLine1">



      <div class="control-group">
        <label class="control-label" for="selection">Select Ministry</label>
        <select name = "Ministry" id = "Min" class="input-xlarge" required>
          <option value="">--Select Ministry--</option>
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
      </div>
      <div><br/><br/><br/><br/></div>
      <div class="control-group">
        <label class="control-label" for="typeahead">Total Ministry Budget</label>
        <div class="controls span9">
          <input type="text" class="span4" name="BudgetM" id="TB" required />

        </div>
      </div>



      <div class="form-actions">
        <button type="submit" name="Submit" class="btn btn-primary ">Save </button>
        <button type="reset" class="btn btn-danger ">Cancel</button>
      </div>

    </div>



  </div>


</form>

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
    height: 500px;
    padding: 10px;
    width: 1000px;



  }
  .verticalLine1 {
    border:solid 1px;
    color:#081feb;
    position: absolute;
    height: 380px;
    top:80px;
    width: 900px;
    padding-top: 50px;


  }
  .verticalLine2 {
    border:solid 1px;
    color:#081feb;
    position:absolute;
    height: 200px;
    top: 300px;
    margin-top: 50px;
    width: 600px;


  }

  .verticalLine3 {
    border:solid 1px;
    color:#081feb;
    position: relative;
    height: 200px;
    top:450px;
    width: 750px;
    margin-top: 5px;


  }


</style>

