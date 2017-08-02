<?php
$info="";
$alert="";

include_once('config.php');

  if (isset($_POST['Register'])) {

      $btnSubmit = $_POST['Register'];

                                        // collecting data entered into form controls
            if (isset($_POST['Assembly']))    
              {   
            $Assembly= $_POST['Assembly']; 
              } else {
                $assembly="";
              }
            if (isset($_POST['fam_email']))    
              {   
            $fam_email= $_POST['fam_email']; 
              }
            if (isset($_POST['church'])) {
              $church = $_POST['church'];
            } else {
              $church = $_POST['Assembly'];
            }
            $Surname= $_POST['Surname'];
            $firstname = $_POST['firstname'];
            if (isset($_POST['Othername']))    
              {   
            $Othername= $_POST['Othername'];
              }
            if (isset($_POST['dob']))    
              {   
            $dob = $_POST['dob'];
              }
            if (isset($_POST['Address']))    
              {   
            $Address = $_POST['Address'];
              }
            $email= filter_var(($_POST['email']), FILTER_SANITIZE_EMAIL) ;
            if (isset($_POST['Phonenumber']))    
              {   
            $Phonenumber= $_POST['Phonenumber'];
              }
            $sex = $_POST['sex'];
            $nationality = $_POST['nationality'];
            if (isset($_POST['health']))    
              {   
            $health = $_POST['health'];
              }
            if (isset($_POST['diet']))    
              {   
            $diet = $_POST['diet'];
              }
            $fam_name = $_POST['fam_name'];
            if (isset($_POST['fam_num']))    
              {   
            $fam_num = $_POST['fam_num']; 
              } 
            
    $num = 10;
    
    if(empty($Surname)) {

      $alert .= 
        "<div class='col-md-12'>
          <div class='alert alert-warning alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <strong><center>PLEASE CHECK THAT ALL FIELDS ARE FILLED </center></strong> 
          </div>
        </div>";

    }elseif (!is_numeric($Phonenumber))  {
       
      $alert .= 
        "<div class='col-md-12'>
          <div class='alert alert-warning alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <strong><center>PLEASE PROVIDE A VALID TELEPHONE NUMBER </center></strong> 
          </div>
        </div>"; 
                  
     }else if (strlen($Phonenumber) != $num)  {
       
      $alert .= 
        "<div class='col-md-12'>
          <div class='alert alert-warning alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <strong><center>PLEASE PROVIDE A 10 DIGIT TELEPHONE NUMBER </center></strong> 
          </div>
        </div>"; 

    } else {
      $result = mysqli_query($conn, "SELECT * FROM campers WHERE email='$email' AND surname='$Surname' AND dob = '$dob'");
      $data = mysqli_num_rows($result);

      if(($data)==0){

          $sql = "INSERT INTO campers (surname, firstname, othername, email, nationality, phone_num, city, assembly, health, dob, church, fam_name, fam_email,fam_num, sex) VALUES('$Surname', '$firstname', '$Othername', '$email', '$nationality', '$Phonenumber', '$Address', '$Assembly', '$health', '$dob', '$church', '$fam_name', '$fam_email', '$fam_num', '$sex')";
                
          if (mysqli_query($conn, $sql)) {  
            $alert .= 
              "<div class='container'><div class='col-md-12'>
                <div class='alert alert-success alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                  <strong><center> Success! </center></strong> 
                </div>
              </div>
              </div>";

               $info .= '
                      <div class="row">
                        <div class="col s12 m12">
                          <div class="card" style="background-color: #2e7d32; padding-bottom:20px;">
                            <div class="card-content white-text">
                              <span class="card-title">Hi, '.ucfirst($Surname).' '.ucfirst($firstname).'</span>
                              <p>YOU HAVE SUCCESSFULLY COMPLETED YOUR REGISTRATION FOR THE 2017 OMEGA GENERATION CAMP</p>
                              
                            </div>
                            <div class="card-action">
                              <div class="col-md-6">
                              <a href="../pages/recpt.php?Surname='.$Surname.'&firstname='.$firstname.'&othername='.$Othername.'&assembly='.$church.'" type="button" value="printletter" class="btn btn-primary">Print</a>
                              </div><br>
                              <div class="col-md-6">
                                  <p class="pull-right" style="color:white;">2017 : OMEGA GENERATION!</p>
                              </divclass="pull-right" style="color:#333333;">2017 : OMEGA GENERATION!</p>
                              
                            </div>
                          </div>
                        </div>
                      </div>
              ';
              } else { 
                die(mysqli_error($conn));
                  echo "Error: " . $sql . "<br>" . mysql_error($conn);
                }
              mysqli_close($conn);
      } else {

        $alert .=
        '<div class="row">
                        <div class="col s12 m12">
                          <div class="card " style="background-color: #2e7d32; padding-bottom:20px;">
                            <div class="card-content white-text">
                              <span class="card-title">Hi, '.ucfirst($Surname).' '.ucfirst($firstname).'</span>
                              <p>IT LOOKS LIKE YOU HAVE ALREADY REGISTERED</p>
                              
                            </div>
                            <div class="card-action" >
                            <div class="col-md-6">
                              <a href="../pages/recpt.php?Surname='.$Surname.'&firstname='.$firstname.'&othername='.$Othername.'&assembly='.$church.'" type="button" value="printletter" class="btn btn-primary">Print</a>
                              </div><br>
                              <div class="col-md-6">
                                  <p class="pull-right" style="color:white;">2017 : OMEGA GENERATION!</p>
                              </div
                              
                              <iframe style="display: none;" src="" name="frame"></iframe>
                            </div>
                          </div>
                        </div>
                      </div>';

      }
    }
        
  }

 ?>