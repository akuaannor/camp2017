<!DOCTYPE html>
<html class="full" style="background-color: rgba(0,0.5,0,0.5);" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ICGC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/the-big-picture.css" rel="stylesheet">

    <style type="text/css">
        .register{
              /*background-color: rgba(0, 0, 0, 0.2);*/
              /*background-color: #ffc107;*/
              color: #ffc107;
              /*border-radius: 0px;*/
              border-bottom-right-radius: 50px;
              border-bottom-left-radius: 50px;
              border-top-left-radius: 50px;
              border-top-right-radius: 50px;
              box-shadow: 0 0.2px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.29);
              width: auto;
              height: auto;
              font-size: 30px;
              /*padding-top: 0px;*/
              /*padding: 10px;*/


              /*opacity: 0.3;*/
              border: 7px solid #ffc107;
              /*font-weight: bold;*/
            }

            .register:hover, .register:focus{
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9), 13px 12px 24px 0 rgba(0, 0, 0, 0.29);
              color: rgba(0, 0, 0, 0.9);
              font-weight: bolder;
              opacity: 0.9;
              background-color: #ffc107;
              /*width: 200px;*/
            }
    </style>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="opacity:1; background-color: rgba(0,0.5,0,0.5); ">
        <!-- <div class="container"> -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">DISTRICT YOUTH CAMP</a>
            </div>
                
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                   <!--  <li><a href="index" class="selected">Home</a></li> -->
                    <!-- <li><a href="hgt_Camp/index">Admin Login</a></li> -->
                    <li><a href="#termsModal" role="button" data-toggle="modal" class="" style="color: #ffe401; font-weight: bolder; ">Camp registration</a></li>
                    <li><a href="item.pdf" role="button"  class="" style="color: #ffe401; font-weight: bolder; ">CAMP ITEMS</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- </div> -->
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row"  style="margin-top: 190px; ">
            <div class="col-md-12 col-xs-12">
                    <!-- <div class="intro-message"  > -->
                        <!-- <h4 style="margin-top: 0px;text-shadow: 2px 2px 3px rgba(0,0,0,0.6);font-size: 5em; color:white; text-align:center;">OMEGA GENERATION</h1>
                        <h4 style="margin: 0;text-shadow: 2px 2px 3px rgba(0,0,0,0.6);font-size: 5em; color:white; text-align:center;">CAMP 2017</h1>
                                               <hr class="intro-divider"> -->
                                               <div class="col-md-12">

                                                  <h1 style="text-align: center; color: white; font-style: oblique; font-family: Brush Script Std, Brush Script MT;">Welcome</h1>

                                                 <h1 class="" style="text-align: center; color: white; font-weight: bolder; font-size: 60px; font-family: sans-serif; ">OMEGA GENERATION</h1>
                                                 <center>
                                                   <a href="#termsModal" role="button" data-toggle="modal" class="btn register">REGISTER</a>
                                                 </center>
                                                  
                                               </div>
                                                 
                                              
                                                 
                                              
                    <!-- </div> -->

                </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
	
    <!-- jQuery -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/modal.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <?php include('includes/termsModal.php');?>

</body>

</html>