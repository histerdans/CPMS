<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv=content-type content="text/html;
  charset=UTF-8">
  <title>Agenda</title>

  <meta name="description" content="overview &amp; stats" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--basic styles-->

  <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../Assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../Assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
      <link rel="stylesheet" href="../Assets/css/font-awesome-ie7.min.css" />
      <![endif]-->

      <!--page specific plugin styles-->

      <!--fonts-->

      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

      <!--ace styles-->

      <link rel="stylesheet" href="../Assets/css/ace.min.css" />


    <!--[if lte IE 8]>
      <link rel="stylesheet" href="../Assets/css/ace-ie.min.css" />
      <![endif]-->

      <!--inline styles related to this page-->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


      <script type="text/javascript">
        function populate(s1,s2){
          var s1=document.getElementById(s1);
          var s2=document.getElementById(s2);
          s2.innerHTML="";


          if(s1.value=="Ainamoi"){
            var optionArray=["|","kapsoit|Kapsoit","ainamoi Ward|Ainamoi Ward","kapkugerwet|Kapkugerwet","kipchebor|Kipchebor","kipchimchim|Kipchimchim","kapsaos|Kapsaos"]


          } 
           else if(s1.value=="Belgut"){
            var optionArray=["|","Kabianga|Kabianga","Waldai|Waldai","Chaik|Chaik","Cheptororiet/Seretut|Cheptororiet/Seretut","Kapsuser|Kapsuser"]


          }
           else if(s1.value=="Kipkelion West"){
            var optionArray=["|","Chilchila|Chilchila","Kipkelion Ward|Kipkelion Ward","Kamasian|Kamasian","Kunyak|Kunyak"]


          }
          else if(s1.value=="Kipkelion East"){
            var optionArray=["|","Kedowa/Kimugul|Kedowa/Kimugul","Chepseon|Chepseon","Londiani|Londiani","Tendeno/Sorget|Tendeno/Sorget"]


          }else if(s1.value=="Bureti"){
            var optionArray=["|","Letin|Letin","Chemosot|Chemosot","Cheplanget|Cheplanget","Kisiara|Kisiara","Cheboin|Cheboin","Kapkatet|Kapkatet","Tebesonik|Tebesonik"]


          } 
          else if (s1.value=="Soin/Sigowet"){
            var optionArray=["|","Sigowet Ward|Sigowet Ward","Kaplelartet|Kaplelartet","Soin Ward|Soin Ward","Soliat|Soliat"];
          }


          for (var option in optionArray){
            var pair=optionArray[option].split("|");
            var newOption=document.createElement("option");
            newOption.value=pair[0];
            newOption.innerHTML=pair[1];
            s2.options.add(newOption);

          }
        }
      </script>

    </head>

    <body>