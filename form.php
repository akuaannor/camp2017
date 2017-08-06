<?php

if (!isset($_POST['agreeCheckbox'])) {
  echo "Please read and agree to the" 
  ?>

  <a href="index#termsModal">terms and conditions</a>
  <?php 
  echo "before you can register";
  ;
  die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ICGC Youth</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/image.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css'>
  </head>
<body style="background-color: smokewhite;" data-target=".navbar-fixed-top" onload='document.registrationform.Surname.focus()'>

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
                <a class="navbar-brand" href="index">DISTRICT YOUTH CAMP</a>
            </div>
                
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                   <!--  <li><a href="index" class="selected">Home</a></li> -->
                    <!-- <li><a href="hgt_Camp/index">Admin Login</a></li> -->
                    <li><a href="index"class="" style="color: #ffe401; font-weight: bolder; ">Home</a></li>
                    <li><a href="#termsModal" role="button" data-toggle="modal" class="" style="color: #ffe401; font-weight: bolder; ">Camp registration</a></li>
                    <li><a href="item.pdf" role="button"  class="" style="color: #ffe401; font-weight: bolder; ">Camp Items</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- </div> -->
        <!-- /.container -->
</nav>
          
        <div class="container">
          <div class="row">
            <div class="pagetitle col-md-5 col-md-offset-1 " style="margin-top:70px;">
              <p style="font-weight: bold; font-size: 16px; color: white;">ACCRA NORTH-EAST DISTRICT YOUTH CAMP - 2017</p>
            </div>
            
          </div>


          <div class="row">
            <!-- <div class="col-md-12"> -->
            <div class="adduserdiv col-md-10 col-md-offset-1" style="padding-top: 40px;">
            <!-- <p style="font-size: 18px; font-weight: bold;">Add User</p> -->
           
              <form id="registration_form" method="post" action="./pages/successfulpage.php" name="registrationform" enctype="multipart/form-data" class="form-group">
                      <div class="col-md-12">    
                        <h3 style="text-align: center; padding-bottom: 30px;">Your personal information</h3>

                        <div class="row" style="margin-bottom: 26px;">
                          <div class="col-xs-12 col-md-12" style="background-color:#115639; position:relative;">
                          <div class="options">
                              <div class="box-2 pull-left">
                                 <div class="result" style="margin-bottom:10px;"></div>
                              </div>
                              
                                  <!-- input file -->
                              <!-- <div class="">
                                  <input type="file" id="file-input" name="image">
                              </div> -->

                              <!-- input file -->
                              <div class="box">
                                  <div class="options hide">
                                  <label> Width</label>
                                  <input type="number" class="img-w" value="300" min="100" max="1200" />
                              </div>
                                  <!-- save btn -->
                                  <button class="btn save hide">Save</button>
                                  <!-- download btn -->
                                  <a href="" class="btn download hide">Download</a>
                              </div>
                          </div>
                            <div class="col-xs-7 col-sm-7 col-md-7  text-center" style="padding:30px 0;">
                              <img src="images/me.png" alt="" name="image" class="center-block img-responsive cropped" style="max-width: 207px; background-color: white;">
                              <!-- <input type="file" name="image"> -->
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 " style="padding: 78px 0;">
                            <span style="color:#fff;"><i class="fa fa-camera fa" aria-hidden="true" style="float: left;"></i> <input type="file" id="file-input" name="image"></span>
                            </div>
                          </div>
                        </div>

                          <div class="in col-md-12" >
                            <label class="form-label" id="surname_error_message">Surname</label>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input class="form-control" type="text" name="Surname" id="form_surname"  placeholder="Enter your surname" style="border: 1px solid #115639;">
                            </div>
                          </div>

                            <div class="in col-md-6">
                              <label class="form-label" >First Name</label>
                              <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                              <input class="form-control" type="text" name="firstname" id="firstname"  placeholder="First name" style="border: 1px solid #115639;">
                              </div>
                            </div>

                            <div class="in col-md-6">
                              <label class="form-label" >Other Names</label>
                              <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user-o fa" aria-hidden="true"></i></span>
                              <input class="form-control" type="text" name="Othername" id="Other names"  placeholder="Enter other names that you may have" style="border: 1px solid #115639;">
                              </div>
                            </div>

                            <div class="in col-md-6">
                              <label class="form-label" >Date of Birth (ex: 12-25-1999)</label>
                              <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-birthday-cake fa" aria-hidden="true"></i></span>
                              <input class="form-control" required="true" type="date" name="dob" placeholder="YYY-MM-DD" style="border: 1px solid #115639;">
                              </div>
                            </div>

                            <div class="in col-md-6">
                              <label class="form-label" >Sex</label>
                              <select name="sex" class="form-control" style="border: 1px solid #115639;">
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                              </select>
                            </div>


                            <div class="in col-md-12">
                              <label class="form-label" id="email_error_message">E-mail</label>
                              <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                              <input class="form-control" type="email" name="email" id="form_email"  placeholder="Enter your Email" style="border: 1px solid #115639;">
                              </div>
                            </div>


                            <SCRIPT language=Javascript>
                               <!--
                               function isNumberKey(evt)
                               {
                                  var charCode = (evt.which) ? evt.which : evt.keyCode;
                                  if (charCode != 46 && charCode > 31 
                                    && (charCode < 48 || charCode > 57))
                                     return false;

                                  return true;
                               }
                               //-->
                            </SCRIPT>

                            <div class="in col-md-6">
                              <label class="form-label" id="phonenumber_error_message">Phone Number</label>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span>
                              <input class="form-control" type="text" name="Phonenumber" id="form_phonenumber" onkeypress="return isNumberKey(event)" style="border: 1px solid #115639;">
                              </div>
                            </div>


                            <div class="in col-md-6">
                              <label class="form-label" >Address</label>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-address-book fa" aria-hidden="true"></i></span>
                              <input class="form-control" type="text" name="Address" placeholder="" style="border: 1px solid #115639;">
                              </div>
                            </div>

                            <div class="in col-md-6">
                              <label for="Nationality">Country</label>
                                  <select class="form-control" name="nationality">
                                  <option value="Afghanistan">Afghanistan</option>
                                  <option value="Åland Islands">Åland Islands</option>
                                  <option value="Albania">Albania</option>
                                  <option value="Algeria">Algeria</option>
                                  <option value="American Samoa">American Samoa</option>
                                  <option value="Andorra">Andorra</option>
                                  <option value="Angola">Angola</option>
                                  <option value="Anguilla">Anguilla</option>
                                  <option value="Antarctica">Antarctica</option>
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Armenia">Armenia</option>
                                  <option value="Aruba">Aruba</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Austria">Austria</option>
                                  <option value="Azerbaijan">Azerbaijan</option>
                                  <option value="Bahamas">Bahamas</option>
                                  <option value="Bahrain">Bahrain</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Barbados">Barbados</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Belize">Belize</option>
                                  <option value="Benin">Benin</option>
                                  <option value="Bermuda">Bermuda</option>
                                  <option value="Bhutan">Bhutan</option>
                                  <option value="Bolivia">Bolivia</option>
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                  <option value="Botswana">Botswana</option>
                                  <option value="Bouvet Island">Bouvet Island</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                                  <option value="Bulgaria">Bulgaria</option>
                                  <option value="Burkina Faso">Burkina Faso</option>
                                  <option value="Burundi">Burundi</option>
                                  <option value="Cambodia">Cambodia</option>
                                  <option value="Cameroon">Cameroon</option>
                                  <option value="Canada">Canada</option>
                                  <option value="Cape Verde">Cape Verde</option>
                                  <option value="Cayman Islands">Cayman Islands</option>
                                  <option value="Central African Republic">Central African Republic</option>
                                  <option value="Chad">Chad</option>
                                  <option value="Chile">Chile</option>
                                  <option value="China">China</option>
                                  <option value="Christmas Island">Christmas Island</option>
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                  <option value="Colombia">Colombia</option>
                                  <option value="Comoros">Comoros</option>
                                  <option value="Congo">Congo</option>
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                  <option value="Cook Islands">Cook Islands</option>
                                  <option value="Costa Rica">Costa Rica</option>
                                  <option value="Cote D'ivoire">Cote D'ivoire</option>
                                  <option value="Croatia">Croatia</option>
                                  <option value="Cuba">Cuba</option>
                                  <option value="Cyprus">Cyprus</option>
                                  <option value="Czechia">Czechia</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Djibouti">Djibouti</option>
                                  <option value="Dominica">Dominica</option>
                                  <option value="Dominican Republic">Dominican Republic</option>
                                  <option value="Ecuador">Ecuador</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="El Salvador">El Salvador</option>
                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                  <option value="Eritrea">Eritrea</option>
                                  <option value="Estonia">Estonia</option>
                                  <option value="Ethiopia">Ethiopia</option>
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                  <option value="Faroe Islands">Faroe Islands</option>
                                  <option value="Fiji">Fiji</option>
                                  <option value="Finland">Finland</option>
                                  <option value="France">France</option>
                                  <option value="French Guiana">French Guiana</option>
                                  <option value="French Polynesia">French Polynesia</option>
                                  <option value="French Southern Territories">French Southern Territories</option>
                                  <option value="Gabon">Gabon</option>
                                  <option value="Gambia">Gambia</option>
                                  <option value="Georgia">Georgia</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Gibraltar">Gibraltar</option>
                                  <option value="Greece">Greece</option>
                                  <option value="Greenland">Greenland</option>
                                  <option value="Grenada">Grenada</option>
                                  <option value="Guadeloupe">Guadeloupe</option>
                                  <option value="Guam">Guam</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Guernsey">Guernsey</option>
                                  <option value="Guinea">Guinea</option>
                                  <option value="Guinea-bissau">Guinea-bissau</option>
                                  <option value="Guyana">Guyana</option>
                                  <option value="Haiti">Haiti</option>
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Hong Kong">Hong Kong</option>
                                  <option value="Hungary">Hungary</option>
                                  <option value="Iceland">Iceland</option>
                                  <option value="India">India</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                  <option value="Iraq">Iraq</option>
                                  <option value="Ireland">Ireland</option>
                                  <option value="Isle of Man">Isle of Man</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Italy">Italy</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Japan">Japan</option>
                                  <option value="Jersey">Jersey</option>
                                  <option value="Jordan">Jordan</option>
                                  <option value="Kazakhstan">Kazakhstan</option>
                                  <option value="Kenya">Kenya</option>
                                  <option value="Kiribati">Kiribati</option>
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                  <option value="Korea, Republic of">Korea, Republic of</option>
                                  <option value="Kuwait">Kuwait</option>
                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                  <option value="Latvia">Latvia</option>
                                  <option value="Lebanon">Lebanon</option>
                                  <option value="Lesotho">Lesotho</option>
                                  <option value="Liberia">Liberia</option>
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                  <option value="Liechtenstein">Liechtenstein</option>
                                  <option value="Lithuania">Lithuania</option>
                                  <option value="Luxembourg">Luxembourg</option>
                                  <option value="Macao">Macao</option>
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                  <option value="Madagascar">Madagascar</option>
                                  <option value="Malawi">Malawi</option>
                                  <option value="Malaysia">Malaysia</option>
                                  <option value="Maldives">Maldives</option>
                                  <option value="Mali">Mali</option>
                                  <option value="Malta">Malta</option>
                                  <option value="Marshall Islands">Marshall Islands</option>
                                  <option value="Martinique">Martinique</option>
                                  <option value="Mauritania">Mauritania</option>
                                  <option value="Mauritius">Mauritius</option>
                                  <option value="Mayotte">Mayotte</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                                  <option value="Monaco">Monaco</option>
                                  <option value="Mongolia">Mongolia</option>
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option>
                                  <option value="Morocco">Morocco</option>
                                  <option value="Mozambique">Mozambique</option>
                                  <option value="Myanmar">Myanmar</option>
                                  <option value="Namibia">Namibia</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Nepal">Nepal</option>
                                  <option value="Netherlands">Netherlands</option>
                                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                                  <option value="New Caledonia">New Caledonia</option>
                                  <option value="New Zealand">New Zealand</option>
                                  <option value="Nicaragua">Nicaragua</option>
                                  <option value="Niger">Niger</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Niue">Niue</option>
                                  <option value="Norfolk Island">Norfolk Island</option>
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                  <option value="Norway">Norway</option>
                                  <option value="Oman">Oman</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="Palau">Palau</option>
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                  <option value="Panama">Panama</option>
                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                  <option value="Paraguay">Paraguay</option>
                                  <option value="Peru">Peru</option>
                                  <option value="Philippines">Philippines</option>
                                  <option value="Pitcairn">Pitcairn</option>
                                  <option value="Poland">Poland</option>
                                  <option value="Portugal">Portugal</option>
                                  <option value="Puerto Rico">Puerto Rico</option>
                                  <option value="Qatar">Qatar</option>
                                  <option value="Reunion">Reunion</option>
                                  <option value="Romania">Romania</option>
                                  <option value="Russian Federation">Russian Federation</option>
                                  <option value="Rwanda">Rwanda</option>
                                  <option value="Saint Helena">Saint Helena</option>
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                  <option value="Saint Lucia">Saint Lucia</option>
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                  <option value="Samoa">Samoa</option>
                                  <option value="San Marino">San Marino</option>
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Serbia">Serbia</option>
                                  <option value="Seychelles">Seychelles</option>
                                  <option value="Sierra Leone">Sierra Leone</option>
                                  <option value="Singapore">Singapore</option>
                                  <option value="Slovakia">Slovakia</option>
                                  <option value="Slovenia">Slovenia</option>
                                  <option value="Solomon Islands">Solomon Islands</option>
                                  <option value="Somalia">Somalia</option>
                                  <option value="South Africa">South Africa</option>
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                  <option value="Spain">Spain</option>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="Sudan">Sudan</option>
                                  <option value="Suriname">Suriname</option>
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                  <option value="Swaziland">Swaziland</option>
                                  <option value="Sweden">Sweden</option>
                                  <option value="Switzerland">Switzerland</option>
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                  <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                  <option value="Tajikistan">Tajikistan</option>
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                  <option value="Thailand">Thailand</option>
                                  <option value="Timor-leste">Timor-leste</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Tokelau">Tokelau</option>
                                  <option value="Tonga">Tonga</option>
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                  <option value="Tunisia">Tunisia</option>
                                  <option value="Turkey">Turkey</option>
                                  <option value="Turkmenistan">Turkmenistan</option>
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                  <option value="Tuvalu">Tuvalu</option>
                                  <option value="Uganda">Uganda</option>
                                  <option value="Ukraine">Ukraine</option>
                                  <option value="United Arab Emirates">United Arab Emirates</option>
                                  <option value="United Kingdom">United Kingdom</option>
                                  <option value="United States">United States</option>
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                  <option value="Uruguay">Uruguay</option>
                                  <option value="Uzbekistan">Uzbekistan</option>
                                  <option value="Vanuatu">Vanuatu</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Viet Nam">Viet Nam</option>
                                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                                  <option value="Western Sahara">Western Sahara</option>
                                  <option value="Yemen">Yemen</option>
                                  <option value="Zambia">Zambia</option>
                                  <option value="Zimbabwe">Zimbabwe</option>
                                  </select>
                            </div>


                          <div class="form-group col-md-6 col-sm-6">
                                    <label for="filter">Assembly/Branch</label>
                                    <select class="form-control" name="Assembly" onchange="if (this.value=='Other Assembly'){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};">
                                        <option value="Holy Ghost Temple" selected="">Holy Ghost Temple</option>
                                        <option value="Yahweh Temple">Yahweh Temple</option>
                                        <option value="Joy Temple">Joy Temple</option>
                                        <option value="Seekers Temple">Seekers Temple</option>
                                        <option value="Liberty Temple">Liberty Temple</option>
                                        <option value="Open heavens">Open heavens</option>
                                        <option value="Salem Temple">Salem Temple</option>
                                        <option value="Shammah Temple">Shammah Temple</option>
                                        <option value="Other Assembly" name="Assembly">Other</option>
                                    </select>
                                     <input type="textbox" class="form-control" placeholder="Enter your Assembly" name="other" style="visibility:hidden; margin-top: 10px;"/>           
                        </div>

                            <div class="in col-md-6">
                            <label class="form-label">Special Health Issues</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-thermometer-empty fa" aria-hidden="true"></i></span>
                            <textarea class="form-control" name="health" placeholder="" style="border: 1px solid #115639;"></textarea>
                            </div>
                            </div>

                          <div class="in col-md-6">
                            <label class="form-label">Diet Issues</label>
                            <textarea class="form-control" name="diet" placeholder="" style="border: 1px solid #115639;"></textarea>
                            </div>
                          </div>
                          <div class="col-md-12" id="inceased">
                            <h3 style="text-align: center; padding-bottom: 30px;">Parent/Guardian's Information</h3>
                            <div class="in col-md-4">
                            <label class="form-label">Parent / Guardian Name</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input class="form-control" type="text" name="fam_name" placeholder="" style="border: 1px solid #115639;">
                            </div>
                            </div>



                            <div class="in col-md-4">
                            <label class="form-label" >Parent / Guardian Number</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-volume-control-phone fa" aria-hidden="true"></i></span>
                            <input class="form-control" type="phone" name="fam_num" placeholder="" style="border: 1px solid #115639;" onkeypress="return isNumberKey(event)">
                            </div>
                            </div>

                            <div class="in col-md-4">
                            <label class="form-label">Parent / Guardian E-mail</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input class="form-control" type="email" name="fam_email" placeholder="" style="border: 1px solid #115639;">
                            </div>
                            </div>

                            </div>
                              <div class="col-md-12 ">
                              <button class="btn btnlogin" type="submit" name="Register">Register</button>
                            </div>
                            
                          <div>
                              
                          </div>

              </form>
            </div>
          </div>
       </div>
        
  


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js'></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/image.js"></script>
    <script src="sweet-alert/script.js"></script>
    <!-- <script src="js/scripts.js"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 
    
<?php include('includes/footer.php'); 
include('includes/termsModal.php');
include('includes/picModal.php');
?>   
</body>
</html> 
