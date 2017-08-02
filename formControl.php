	<?php 

include 'database.php';


      if(isset($_POST['submitbtn']))
         {
                                  // collecting data entered into form controls
	          $surname = $_POST['surname'];
	          $firstname = $_POST['firstname'];
	          $othername = $_POST['othername'];
	          $dob = $_POST['dob'];
	          $email = $_POST['email'];
	          $phone_num = $_POST['phone_num'];
	          $sex = $_POST['sex'];
	          $church = $_POST['church'];
	          $city = $_POST['city'];
	          $nationality = $_POST['nationality'];
	          $assembly = $_POST['assembly'];
	          $health = $_POST['health'];
	          $diet = $_POST['diet'];
	          $fam_name = $_POST['fam_name'];
	          $fam_num = $_POST['fam_num'];
	          $fam_mail = $_POST['fam_mail'];

	                                  
	          $addcamper= $conn->query("INSERT INTO campers (surname, firstname, othername, email, phone_num, church, dob, sex, city, nationality, assembly, health, diet, fam_name, fam_num, fam_email) VALUES ('$surname', '$firstname', '$othername', '$email', '$phone_num', '$church', '$dob', '$sex', '$city', '$nationality', '$assembly', '$health', '$diet', '$fam_name', '$fam_num', '$fam_mail')");

	          // $addcampers=$addcamper->fetch_assoc();
	       
	       if ($addcamper==true){
	              
	           		echo "good";
	            }
	         	 else{
	         	 	
	         	 	echo"sorry try later";
	                 
	                 
	  			      }

         
}

	      
	      // if (isset($_POST['editbtn'])) {
	      	
	      	

	      // }

	      // elseif (isset($_POST['deletebtn'])) {
	      	
	      // 	echo "Are you sure you want to delete user?";

	      // 	if (isset($_POST['yesbtn'])) {
	      		
	      // 		$del =$sql->query("DELETE * users WHERE user_id= '$id'");
	      // 	}

	      // }


 ?>