<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function test(s1,s2,s3){
			var s1=document.getElementById(s1);
			var s2=document.getElementById(s2);
			var s3=document.getElementById(s3);
			var c1=parseFloat(s1.value);
			var c2=parseFloat(s2.value);
			var sum=(c1+c2);
			s3.value=sum;


		}
	</script>
</head>
<body>
<input type="text" id="t1" oninput="test(this.id,'t2','t3')" />
<input type="text" id="t2" oninput="test(this.id,'t1','t3')" />
<input type="text" id="t3" />
</body>
</html>