 </div><!--/row-->

</div><!--/#page-content-->
</div><!-- #main-content -->


</div><!--/.fluid-container#main-container-->




<a href="tables.html#" id="btn-scroll-up" class="btn btn-small btn-inverse">
	<i class="icon-double-angle-up icon-only"></i>
</a>


<!-- basic scripts -->
<script src="../../Assets/js/jquery.min.js"></script>
<script type="text/javascript">
	window.jQuery || document.write("<script src='../../Assets/js/jquery-1.10.2.min.js'>\x3C/script>");
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="../../Assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<script type="text/javascript" src="../../Assets/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="../../Assets/js/jquery.dataTables.bootstrap.js"></script>


<script src="../../Assets/js/ace-elements.min.js"></script>
<script src="../../Assets/js/ace.min.js"></script>
<script type="text/javascript" src="../../Assets/js/jquery.slimscroll.min.js"></script>


<!-- inline scripts related to this page -->
<script type="text/javascript">
	function checkifempty(s1,s2,s3){

		var s1=document.getElementById(s1);
		var s2=document.getElementById(s2);
		var s3=document.getElementById(s3);

		s2.disabled=true;
		s3.disabled=true;


		if(s1.value=="County Secretary"){
			s2.disabled=true;
			s3.disabled=true;
		} 

		else if(s1.value=="Deputy Governor"){
			s2.disabled=true;
			s3.disabled=true;
		}
		else if(s1.value=="Sub-County Admin"){
			s2.disabled=true;
			s3.disabled=false;
		}
		else if(s1.value=="C.E.C"){
			s2.disabled=false;
			s3.disabled=true;
		}
		else if(s1.value=="Dept_Sub-County Admin"){
			s2.disabled=true;
			s3.disabled=false;
		}
		else if(s1.value=="C.O"){
			s2.disabled=false;
			s3.disabled=true;
		};
				
	setInterval("checkifempty(s1,s2,s3)",100);

};
</script>

<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_QA').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null, null,null,null,null,
			{ "bSortable": false }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	});

</script>
<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_Progress').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null, null,null,null,
			{ "bSortable": false }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	});

</script>
<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_bdget').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null,
			{ "bSortable": false }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	})

</script>
<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_PCEC').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null, null,null,null,null,null,null,
			{ "bSortable": false }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	})

</script>
<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_AD1').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null, null,null,null,
			{ "bSortable": false }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	})

</script>
<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_AD').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null, null,null,null,null,
			{ "bSortable": false }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	})

</script>
<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_users').dataTable( {
			"aoColumns": [
			{ "bSortable": true },
			null, null,null,null,null,null,null,null,null,null,
			{ "bSortable": true }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	})

</script>
<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_userM').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null, null,null,null,null,null,null,null,null,
			{ "bSortable": false }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	})

</script>
<script type="text/javascript">
	$(function() {


		var oTable1 = $('#table_PostM').dataTable( {
			"aoColumns": [
			{ "bSortable": false },
			null, null,null,
			{ "bSortable": false }
			] } );

		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});


		$('table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
			
		});
		$("#bootbox-regular").on('click', function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					//Example.show("Prompt dismissed");
				} else {
					//Example.show("Hi <b>"+result+"</b>");
				}
			});
		});


		$('[data-rel=tooltip]').tooltip();
	})

</script>





</body>
</html>
