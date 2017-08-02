<?php
$page = $_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html>
<html>
<head>
<title>ICGC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ICGC, ICGC HOLY GHOST TEMPLE, ICGC CAMP" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet">  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<!-- web-fonts -->  
<link href=' //fonts.googleapis.com/css?family=Aref+Ruqaa:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
</head>
<body>
<div class="navbar navbar-blue navbar-static-top" style="background-color: #fff;position:inherit;">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    <div class="site-logo pull-left">
                            <h1>
                               <a href="../index" title="ICGC - Holy Ghost Temple">
                                <div class="nsticky-logo">
                                    <img src="../images/icgc-logo.png" alt="ICGC - Holy Ghost Temple" class="default-logo">
                                </div>
                               </a>
                            </h1>
                        </div>
                    </div>
                  <nav class="collapse navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden"><a class="page-scroll scroll" href="#page-top"></a>  </li>
                            <li class=""><a class="page-scroll scroll" href="#home">Home</a></li>
                            <li class="active"><a class="page-scroll scroll" href="#about">About</a></li>
                            <li><a class="page-scroll scroll" href="#work">Events</a></li>
                            <li><a class="page-scroll scroll" href="#team">Facilitators</a></li>
                            <!-- <li><a class="page-scroll scroll" href="#plans">Plans</a></li>
                            <li><a class="page-scroll scroll" href="#gallery">Projects</a></li> -->
                            <li><a class="page-scroll scroll" href="#contact">Contact</a></li>
                        </ul>
              </nav>
</div>
<div class="container" id="fg_membersite">
<div class="row">
<div id="wrap_404" class="col-md-12" style="min-height: 100%; margin-bottom: -50px;">
<h3 class="title_404">404</h3>
<span class="line_1_404">Oops, sorry we can't find that page!</span>
<br>
<span class="line_2_404">Either something went wrong or the page doesn't exist anymore.</span>
<?php echo $page;?>
<br>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>
