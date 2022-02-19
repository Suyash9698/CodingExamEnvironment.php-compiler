<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

 
 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
<style>
#ews{
width:96%;
height:10%;
margin-left:2%;
margin-top:10%;
text-align:center;
padding-bottom:50px;
text-align:center;
border-radius:50px;
background-image:url('https://ak1.picdn.net/shutterstock/videos/11745611/thumb/1.jpg');
-webkit-animation:animate 6s linear infinite;
}
.form-control{
width:99%;
font-size:30px;
}
#next{
border-top:20px solid dodgerblue;
border-right:5px solid dodgerblue;
border-left:5px solid dodgerblue;
border-bottom:10px solid dodgerblue;
height:40%;
width:35%;
margin-left:2%;
background-color:white;
border-radius:50px;
}
#st
{
background-color:lightgray;
font-size:30px;
width:10%;
}
#st:hover{
background-color:green;
}
#news{
font-family:Courier New;
font-style: oblique;
font-weight:5300px;
text-decoration:underline;
text-transform:uppercase;
background-image:url('https://ak1.picdn.net/shutterstock/videos/11745611/thumb/1.jpg');
color:transparent;
background-image:url('https://tse4.mm.bing.net/th?id=OIP.qPRpgVmPIcXeY9-wFMGLygHaEK&pid=Api&P=0&w=309&h=175');
background clip:text;
-webkit-background-clip:text;
-webkit-animation:animated 6s linear infinite;
font-size:50px;
-webkit-animation:animate 6s linear infinite;

}
@keyframes animate{
0%{background-position:0% 20%;
box-shadow:0 0 30px blue;}
50%{background-position:20% 50%;
box-shadow:0 0 30px green;}
100%{background-position:100% 50%;
box-shadow:0 0 30px red;}
}

@keyframes animated{
0%{background-position:0% 20%;}
50%{background-position:20% 50%;}
100%{background-position:100% 50%;}
}
#what{
border-top:20px solid dodgerblue;
border-right:5px solid dodgerblue;
border-left:5px solid dodgerblue;
border-bottom:10px solid dodgerblue;
height:10%;
width:93%;
margin-left:2%;
background-color:white;
border-radius:50px;
}
#ok
{
background-color:lightgray;
color:green;
}
#ok:hover{
background-color:gray;
}
</style>
</head>
<body>
<h1 id="news">problem task:</h1>

<textarea class="form-control" name="input" rows="9" cols="10" style="border-radius:50px;border-top:20px solid dodgerblue;border-right:5px solid dodgerblue;border-left:5px solid dodgerblue;border-bottom:10px solid dodgerblue;">
  

  <1>.write a program to print suyash.
  <2>.write a program to print hello world .
  <3>.write a program to add two natural numbers.
  <4>.write a program to print disco dancer.


</textarea>
<h1 id="news">required constraints:</h1>
<textarea class="form-control" name="input" rows="7" cols="10" style="border-radius:50px;border-top:20px solid dodgerblue;border-right:5px solid dodgerblue;border-left:5px solid dodgerblue;border-bottom:10px solid dodgerblue;">
  
  #1->. 1<=n<10000;
  #2->. 2<=t<1000;
  #3->. 4<=s<100000;
  #4->. 10<=m<1000;
  for complete points TIME COMPLEXITY should be <= 10sec
</textarea>
<hr style="width:100%;height:0.5%;background-color:lightgray;"></hr>
<textarea class="form-control" name="input" rows="1" cols="8" style="border-radius:50px;margin-top:-0.0001%;margin-left:-0.2%;padding:2%;text-transform:uppercase;font-weight: 1000;text-align:center;font-size:40px;color:red;text-shadow:5px 5px 10px green,10px 10px 10px red;"id="ews">online compiler</textarea>
<br><br><br><br>
<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang"><h1 id="news">Choose Language:</h1></label>
<select class="form-control" name="language" id="ok">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>

</select><br><br>
<label for="ta"><h1 id="news">Write Your Code</h1></label>
<textarea style="background-color:black;border-radius:5px;color:violet;"class="form-control" name="code" rows="10" cols="30"></textarea><br><br>
<label for="in"><h1 id="news">Enter Your Input</h1></label>
<textarea style="background-color:black;color:violet;border-radius:5px;"class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>


</form>



<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>

<label for="out"><h1 id="news">Output</h1></label>
<textarea  style="background-color:white;color:green;"id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>

<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50" ></textarea><br><br>-->
<center><i class="fas fa-home" style="font-size:40px;"></i><strong style="font-size:30px;">suyashkhareji@gmail.com</strong></center>
</body>
</html>


