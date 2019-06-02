



<div class="row-fluid ">
  <!-- block -->

  <div class=" verticalLine">
   <form class="form-horizontal" method="POST" action="../../Apps/conQAA.php">
  <input type="hidden" class="span4" name="userId" value="<?php echo $admin ;?>">
    <input type="hidden" class="span4" name="QAA" value="<?php echo "QAA" ;?>">
    <legend>Project Creation</legend>

    <div Name="Project Details" class="verticalLine1">
      <div class="control-group">
        <label class="control-label" for="typeahead">Project Name</label>
        <div class="controls span9">
          <input type="text" class="span4" name="Pname" id="typeahead"  data-provide="typeahead" data-items="4" data-source='[]'>

        </div>
      </div>



      <div class="control-group">
        <label class="control-label" for="typeahead">Project Description</label>
        <div class="controls span9">
          <input type="text" class="span4" id="typeahead" name="Pdesrc"  data-provide="typeahead" data-items="4" data-source='[]'>
        

        </div>
      </div>
      <div class="control-group" style="position: absolute; left: 410px;top:50px;width:600px;background-color:#ABD9F2;">
        <label class="control-label" for="selection">Select Project's Constituency</label>
        <div class="controls">

          <select name = "constituency" id = "constituency" class="input-xlarge" onchange="populate(this.id, 'ward')" required>
            <option value = "">Project Constituency</option>
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
      <div class="control-group" style="position: absolute; left:410px;top:110px;width:600px;background-color:#ABD9F2;">
        <label class="control-label" for="selection">Select Project's Ward</label>
        <div class="controls">

          <select name = "ward" id = "ward" class="input-xlarge" required>

          </select>
        </div>

      </div>
      <div class="controls">
        <label class="control-label" for="selection">Select Ministry</label>
        <select name = "Ministry" id = "select" class="input-xlarge" required>
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


      <div class="control-group">
        <label class="control-label" for="typeahead"><u> <b>DETAILS</b></u> </label>
        <div class="controls">
         <label class="control-label" for="typeahead"><u> <b> First Name</b></u></label>
         <label class="control-label" for="typeahead"><u> <b>Last Name </b></u></label>
         <label class="control-label" for="typeahead"><u> <b>Company </b></u></label>

       </div>

     </div><div></div>
     <div class="control-group">
      <label class="control-label" for="typeahead">Project Supervisors</label>
      


      <div class="controls">
        <input type="text" class="span4" id="typeahead" name="FNsup" placeholder = "First name" data-provide="typeahead" data-items="4" required>
        <input type="text" class="span4" id="typeahead" name="LNsup" placeholder = "Last name" data-provide="typeahead" data-items="4" required>
        <input type="text" class="span4" id="typeahead" name="Csup" placeholder = "Company" data-provide="typeahead" data-items="4" required>

      </div>

    </div>
    <div class="control-group">
      <label class="control-label" for="typeahead">Project Managers</label>
      

      <div class="controls">
        <input type="text" class="span4" id="typeahead" name="FNPM" placeholder = "First name" data-provide="typeahead" data-items="4" data-source='[]'>
        <input type="text" class="span4" id="typeahead" name="LNPM" placeholder = "Last name" data-provide="typeahead" data-items="4" data-source='[]'>
        <input type="text" class="span4" id="typeahead" name="CPM" placeholder = "Company" data-provide="typeahead" data-items="4" data-source='[]'>

      </div>
      

    </div>
    <div class="control-group">
      <label class="control-label" for="typeahead">Project Surveyors</label>
      


      <div class="controls">
       <input type="text" class="span4" id="typeahead" name="FNsur" placeholder = "First name" data-provide="typeahead" data-items="4" data-source='[]'>
       <input type="text" class="span4" id="typeahead" name="LNsur" placeholder = "Last name" data-provide="typeahead" data-items="4" data-source='[]'>
       <input type="text" class="span4" id="typeahead" name="Csur" placeholder = "Company" data-provide="typeahead" data-items="4" data-source='[]'>
     </div>


   </div>
   <div class="control-group">
    <label class="control-label" for="typeahead">Project Engineers</label>



    <div class="controls">
     <input type="text" class="span4" id="typeahead" name="FNPE" placeholder = "First name" data-provide="typeahead" data-items="4" data-source='[]'>
     <input type="text" class="span4" id="typeahead" name="LNPE" placeholder = "Last name" data-provide="typeahead" data-items="4" data-source='[]'>
     <input type="text" class="span4" id="typeahead" name="CPE" placeholder = "Company" data-provide="typeahead" data-items="4" data-source='[]'>

   </div>


 </div>
 <div class="control-group">
  <label class="control-label" for="typeahead">Project Contractors</label>



  <div class="controls">
   <input type="text" class="span4" id="typeahead" name="FNPC" placeholder = "First name" data-provide="typeahead" data-items="4" data-source='[]'>
   <input type="text" class="span4" id="typeahead" name="LNPC" placeholder = "Last name" data-provide="typeahead" data-items="4" data-source='[]'>
   <input type="text" class="span4" id="typeahead" name="CPC" placeholder = "Company" data-provide="typeahead" data-items="4" data-source='[]'>

 </div>


</div>

<div class="form-actions">
  <button type="submit" name="Submit" class="btn btn-primary ">Save </button>
  <button type="reset" class="btn btn-danger ">Cancel</button>
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
    height: 780px;
    padding: 10px;
    width: 1000px;



  }.verticalLine1 {
    border:solid 1px;
    color:#081feb;
    position: absolute;
    height: 580px;
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

