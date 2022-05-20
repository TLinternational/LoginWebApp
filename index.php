<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>TLinternational</title>
  <link rel="stylesheet" href="./preloader.css">

         <script type="text/javascript">
function myFunction() {
   var loginID = '<?php session_start();echo $_SESSION["admin"] ?>';
  if(loginID==''){
window.location.replace("./pages-signin.html");
  }
};
</script>

    </head>
    <body onload="myFunction();">
<!-- partial:index.partial.html -->
<div class="loading-window">
    <div class="car">
        <div class="strike"></div>
        <div class="strike strike2"></div>
        <div class="strike strike3"></div>
        <div class="strike strike4"></div>
        <div class="strike strike5"></div>
        <div class="car-detail spoiler"></div>
        <div class="car-detail back"></div>
        <div class="car-detail center"></div>
        <div class="car-detail center1"></div>
        <div class="car-detail front"></div>
        <div class="car-detail wheel"></div>
        <div class="car-detail wheel wheel2"></div>
    </div>

    <div class="text">
        <span>Loading</span><span class = "dots">...</span>
    </div>
</div>
<script src="assets/vendor/jquery/jquery.js"></script>
        
  
</body>
</html>
