

<div class="row-fluid ">
  <!-- block -->

  <div class=" verticalLine">
   <form class="form-horizontal" method="POST" action="../../Apps/conCB.php">

 
  <input type="hidden" name="CBid" value="<?php echo $MMID; ?>" />
    <legend>Budget Allocation</legend>

    <div Name="Project Details" class="verticalLine1">

 

      <div class="control-group">
        <label class="control-label" for="typeahead">Total County Budget</label>
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

