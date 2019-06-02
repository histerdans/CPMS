



<div class="row-fluid ">
  <!-- block -->

  <div class=" verticalLine">

    <legend>Project Budget Allocation</legend> 

    <div class="space-12"></div>


    <div class="span4 center pull-right Bars">
        <div class="progress progress-success progress-striped active ">
          <div class="bar" style="width: 40%"></div>
        </div>
        <hr />
        <div class="progress progress-inverse  progress-striped active">
          <div class="bar" style="width: 40%"></div>
        </div>

        <hr />
        <div class="progress progress-danger progress-striped active">
          <div class="bar" style="width: 40%"></div>
        </div><hr />
        <div class="progress progress-warning progress-striped active">
          <div class="bar" style="width: 40%"></div>
        </div>
      </div><!--/span-->



    <form class="form-horizontal">

      <?php 
      $Dep=$row_AdminPanel_recordset['Department'];
      $Projo=$row_AdminPanel_recordset['Project_Name'];

      ?>
      
      
      <div Name="Project Details" class="verticalLine1">
        <div class="control-group">
          <label class="control-label" for="typeahead">Ministry/Category:</label>
          <div class="controls span9">
            <label class="control-label" for="typeahead"><?php echo $Dep; ?></label>

          </div>
        </div>
          <div class="control-group">
          <label class="control-label" for="select01">Project Name</label>
          <div class="controls">
            <label class="control-label" for="select01"><?php echo $Projo; ?></label>
        </div>
      </div>
        


      <div Name="Project Cost" class="verticalLine2" >

   <div class="control-group">
          <label class="control-label" for="typeahead">Current Project Development Cost</label>
          <div class="controls span9">
            <input type="text" class="span4" name="dCost" id="dcost" oninput="calculateB('dcost','lcost','fcost','tbudget')"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="typeahead">Current Project Labour Cost</label>
          <div class="controls span9">
            <input type="text" class="span4" name="lCost" id="lcost" oninput="calculateB('lcost','dcost','fcost','tbudget')"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="typeahead">Current Project Facilities Cost</label>
          <div class="controls span9">
            <input type="text" class="span4" name="fCost" id="fcost" oninput="calculateB('fcost','lcost','dcost','tbudget')"/>
          </div>
        </div>

     </div>
  


   <div class="verticalLine3">

     <div class="control-group">
          <label class="control-label" for="typeahead">Current Project Duration Time Frame</label>
          <div class="controls span9">
           <input type="text" class="span4 datepicker"name="pTT" id="ptt">
         </div>
       </div>
       <div class="control-group">
        <label class="control-label" for="typeahead">Current Project Total Estimated Budget</label>
        <div class="controls span9">
          <input type="text" class="span4" name="tBudget" id="tbudget" onchange="action(this.id)">
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
    height: 300px;
    top: 140px;
    margin-top: 50px;
    width: 800px;
    padding: 10px;
    margin: 10px;


  }
.Bars {
    border:solid 1px;
    color:#081feb;
    left: 500px;
    position:absolute;
    height: 250px;
    top: 250px;
    margin-top: 50px;
    width: 300px;
    padding: 10px;
    margin: 10px;


  }
  .verticalLine3 {
    border:solid 1px;
    color:#081feb;
    position: relative;
    height: 280px;
    top:340px;
    width: 800px;
    margin-top: 50px;
    margin: 10px;
    padding: 10px;



  }

</style>

