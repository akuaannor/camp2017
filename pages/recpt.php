<!DOCTYPE html>
<html>
<?php 
// include 'database.php';

                                     
                        $surname = $_GET['Surname'];
                        $firstname = $_GET['firstname'];
                        $assembly = $_GET['assembly'];
                        $othername = $_GET['othername'];
                        // $row= $conn->query("SELECT * FROM campers WHERE id = '$id'");
                        // $rows= $row->fetch_assoc();
                        // $id= $rows['id'];
                        // $camppref= "CMP00";

                        // print_r($rows);
                    

 ?>
<head>
	<title>ICGC-CAMP2017</title>
	<title>ICGC-CAMP2017</title>
    <link href=".../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

      <!-- <link rel="stylesheet" type="text/css" href="themes/google/google.css"> -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container" style="color: black">

	


	<div class="row"> 
		
		<!-- <div class="row" style="margin-bottom:60px; margin-top: 20px;"> -->
			<!-- <div class="col-md-1"> -->
				<!-- <div "> -->
					<center>
						<div class="col-md-12">
							<img  style="width: 70px; height: 60px; margin: 10px; " src="../hgt_camp/image/logo.png">
						</div>
						
					</center>
				<!-- </div> -->
				
				<div class="col-md-12">
					<h4 class="" style="text-align: center; font-weight: bold; margin-top: 0px; margin-bottom:60px; margin-left: 0px;">INTERNATIONAL CENTRAL GOSPEL CHURCH <br><br><?php if ($assembly=='Other Assembly') {
															echo "";
														}else
														echo $assembly;  

													?></h4>
				</div>
	</div>
				
			<!-- </div> -->
			<!-- <p class="col-md-3"><strong> YOUTH CAMP MEETING - 2017</strong></p> -->

		<!-- </div> -->

		<div class="row">
			<p>
				"I, <strong><?php echo ucfirst($surname) ." ". ucfirst($firstname) . " " . ucfirst($othername); ?> </strong>having read and agreed to the terms and conditions of the 2017 Omega Generation camp, promise to be of good behaviour and learn well from this experience. <br>The annual Youth Camp is a Christian environment designed purposely for the younger generation be separated from the rest of the Society to enable them have a memorable encounter with God and to enhance their spiritual growth.It is an enjoyable experience which has, over the years, impacted the lives of many young people positively.<br><br>
				<p>To enhance this unique experience, there are rules and regulations formulated for strict enforcement.</p>
			</p>
		</div>

		

		<hr>
		
		<!-- <div class="row">
			
			<h4 style="font-weight: bold; margin-bottom: 20px;">CAMPERS ITEMS TO BE PROVIDED BY PARENTS OR GUARDIANS</h4>

			<div class="col-md-12 ">

				

				<div class="col-md-4 col-sm-4 col-xs-4 pull-left">
					<p class="col-md-4ICGC-CAMP2017">Bible</p>
					<p class="col-md-12">Bed sheet</p>
					<p class="col-md-12">Pyjamas/Nightgown</p>
					<p class="col-md-12">Sleeping cloth</p>
					<p class="col-md-12">Extra clothes &amp; underwear</p>
					
				</div>

				<div class="col-md-4 col-sm-4 col-xs-4 pull-right">
					<p class="col-md-12">Extra Shoes or Sandals</p>
					<p class="col-md-12">Sports Wear</p>
					<p class="col-md-12">Sweater/Jacket</p>
					<p class="col-md-12">Soap, Sponge &amp; Towel</p>
					<p class="col-md-12">Bathroom Slippers</p>
				</div>

				<div style="" class="col-md-4 col-sm-4 col-xs-4 pull-right">
					
					<p class="col-md-12">Toothbrush &amp; Toothpaste</p>
					<p class="col-md-12">Comb, Pomade and Mirror </p>
					<p class="col-md-12">Cup and Plate</p>
					<p class="col-md-12">Cutlery (knife, fork, spoon)</p>
					<p class="col-md-12">Stationery (Notebook, pen,etc)</p>
				</div>

				
			</div>
		
		</div> -->

		<div class="row">
			<div style="margin-top: 40px;">
			<h4 style="font-weight: bold;margin-bottom: 40px; ">PARENT/GUARDIAN'S CONSENT</h4>
			<p>
				I ,.............................................................., Parents/Guardian of <strong><?php echo ucfirst($surname) ." ". ucfirst($firstname) . " " . ucfirst($othername); ?></strong> consent and will make the required payments towards my ward's attendance.
			</p>
		</div>
		<div class="" style="margin-top: 100px;">
			<p>........................................................</p>
			<p>Parent/Guardian's Signature</p>
		</div>
		</div>

		
<!-- </div> -->

</div>
<!-- </div> -->
<!-- <footer style="margin-bottom: 0px;"> -->
<center>
	<!-- <div style="position: absolute; margin-top: 10%;" class=""> -->
		
			<h6 style="margin-top: 250px;">SIGNEED DOCUMENT WITH PAYMENT SHOULD BE SUBMITTED TO COMPLETE REGISTRATION.</h6>
		
		
	<!-- </div> -->
</center>	
<!-- </footer> -->

</body>
</html>