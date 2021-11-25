<?php
session_start();
?>

<html>

  <head>
    <title> About | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Le Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php

?>
        </div>

      </div>
    </nav>

    <div class="wide">
        
        <div class="tagline">* <font color="red"><strong>Chandiarh</strong></font> University <font color="green"><strong><em>*</em></strong></font></div>
        <h3 style="color: red">*  Information :</h3>
        <br>
        <h3 style="color: black;">*  Shrikant Hans <h3 style="color: black;">*   20MCA1443</h3><h3 style="color : black;">*   20MCA3B</h3><h3 style="color : black;">  </h3></h3>
    </div>

      <iframe src="https://www.google.com/maps/place/Le+Cafe/@11.9316155,79.8335933,17z/data=!3m1!4b1!4m5!3m4!1s0x3a53636a24873e45:0x7f1e7ad6a30982dd!8m2!3d11.9316103!4d79.835782" style="width: 250px"></iframe>
         </body>
</html>