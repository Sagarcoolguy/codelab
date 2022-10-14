<?php

session_start();
require_once("config.php");

if(!isset($_SESSION["un"]))
{
  header("Location:login.php");
}

if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
}





?>


<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/ruet.png">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"> </script>
        <script src="bootstrap-3.3.7/js/bootstrap.js"> </script>
        <script src="js/vendor/moment.min.js"></script>



        <script>
        // Set the date we're counting down to

        function call(d,val,st){

        //console.log(d);
        //console.log(val);
        //console.log(st);
        var countDownDate = new Date(d).getTime();
        var start =new Date(st).getTime();

        //console.log(start);

        var result;

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();
            
            // Find the distance between now an the count down date
            
            
           
           

            if(start>now)
            {

               var distance = start - now;

                // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);


              // Output the result in an element with id="demo"
              var result=days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";

              //console.log(result);

               document.getElementById(val).innerHTML = "Contest Countdown : "+ days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
            }
            else if(countDownDate>=now)
            {
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                 
                // Output the result in an element with id="demo"
                var result=days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

              //console.log(result);
                document.getElementById(val).innerHTML = "Running : "+ days + "d " + hours + "h "
               + minutes + "m " + seconds + "s ";
            }
            
            // If the count down is over, write some text 
            else if (now>countDownDate) {
                clearInterval(x);
                document.getElementById(val).innerHTML = "Status : Finished";
            }


            
        }, 1000);

          return x;
        }


        </script>

        


</head>
<body onload="set()">


<!--<script type="text/javascript">var hour=<?php print json_encode(date("H"));?>; call(hour); </script>-->
<div class="main">

 <div class="row">
  <div class="col-sm-12">
  <nav class="shadow navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="home.php"> OJ</a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
    </div>
    <div class="collapse navbar-collapse navbar-menubuilder">
    <ul class="nav navbar-nav">
      <li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
      <li class="space"><a href="archive.php"><i class="fa fa-archive ispace"></i>Problem Archive</a></li>
      <li class="space"><a href="contest.php"><i class="fa fa-cogs ispace"></i>Contests</a></li>
      <li class="space"><a href="#"><i class="fa fa-check-square ispace"></i>Debug</a></li>
      <li class="lgspace space"><a href="profile.php?user=<?php echo("$username"); ?>"><i class="fa fa-user ispace"></i><?php echo("$username"); ?></a></li>
      <li class="space"><a href="logout.php"><i class="fa fa-power-off ispace"></i>Logout</a></li>
      
    </ul>
    </div>
</nav>
</div>
</div>


<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Online Compiler</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" name="f2" method="POST">
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>
<!--<option value="python2.7">Python2</option>
<option value="python3.2">Python2</option>-->
  

</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" class="btn btn-success" value="Run Code"><br><br><br>



</form>

</div>
</div>



</div>
</div>
 <!--  -->
</div>
</body>
</html>


