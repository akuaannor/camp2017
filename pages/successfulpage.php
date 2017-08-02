<?php

if (isset($_POST['Register'])) {
	include_once('../includes/register.php');
}
else {
  header('location:../from.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ICGC Youth</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/forms.css" type="text/css" rel="stylesheet" media="all"> 
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<!-- //Custom Theme files --> 

<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300i,400,400i,600,600i,700" rel="stylesheet"> 
<!-- //web-fonts -->
</head>
<body>
 <nav class="navbar navbar-inverse navbar-static" role="navigation" style="opacity:1; background-color: rgba(0,0.5,0,0.5); ">
        <!-- <div class="container"> -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">ICGC - Youth Department</a>
            </div>
                
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                   <!--  <li><a href="index" class="selected">Home</a></li> -->
                    <!-- <li><a href="hgt_Camp/index">Admin Login</a></li> -->
                    <li><a href="#termsModal" role="button" data-toggle="modal" class="" style="color: #ffe401; font-weight: bolder; ">Camp registration</a></li>
                    <li><a href="fsf.pdf" role="button"  class="" style="color: #ffe401; font-weight: bolder; ">CAMP ITEMS</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- </div> -->
        <!-- /.container -->
    </nav>
<div class="container">
  <?php echo $alert;?>
</div>
  
	<div class='container' role="main">

    <?php echo $info; ?>

  </div>
  <!-- footer -->
</style>
    <!-- <div class="footer navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
        <h3>ICGC HOLY GHOST TEMPLE</h3>
        <p>© 2017 - Youth Department</p>
        <div class="social-icons">
          <ul>
            <li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
          </ul>
        </div>
      </div>
    </div> -->
<!-- //footer -->

  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
