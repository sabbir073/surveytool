<?php include('admin/db.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
    <title>Survey System</title>
    <!-- CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <!-- FONT -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!-- CONTAINER -->
    <div class="container d-flex align-items-center min-vh-100">
        <div class="row g-0 m-auto justify-content-center">
            <!-- TITLE -->
            <!-- <div class="col-lg-4 offset-lg-1 mx-0 px-0">
                <div id="title-container">
                    <img class="covid-image" src="./img/covid-check.png">
                    <h2>COVID-19</h2>
                    <h3>Self Checker Form</h3>
                    <p>A clinical assessment multi-step form that will assist individuals on deciding when to seek testing or medical care if they suspect they or someone they know has contracted COVID-19 or has come into close contact with someone who has COVID-19</p>
                </div>
            </div> -->
            <!-- FORMS -->
            <div class="col-lg-12 mx-0 px-0">
                <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 0%"></div>
                </div>
                <div style="background-color: #f1f1f1;">
                    <div class="logos" style="padding:20px 0;">
                        <img src="assets/logo.png" alt="logo">
                    </div>
                </div>
                <div id="qbox-container">
                    <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate="">
                        <div id="steps-container">
                            <div class="step">
                                <h1>Survey</h1>
                                <h3>Social Acceptability of Expressive Gestures</h3>
                                <p>The Frankfurt University of Applied Sciences cordially invites you to participate in a survey on the social acceptability of gestures in social context. This survey is part of the research and for scientific purposes only.
Participation in the survey is voluntary. <a target="_blank" href="ic.pdf">Click here</a> to view and print the full informed consent. The survey takes ca. 15 minutes. If you have questions or comments, feel free to send an email to samiul.stu2014@juniv.edu</p>
                                <!-- <div class="form-check ps-0 q-box">
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input basic__question" id="q_1_yes" name="q_1" type="radio" value="Yes"> 
                                        <label class="form-check-label question__label" for="q_1_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input checked class="form-check-input question__input basic__question" id="q_1_no" name="q_1" type="radio" value="No"> 
                                        <label class="form-check-label question__label" for="q_1_no">No</label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="step">
                               
                                <h1>Demographics</h1>
                                <h4>Some demographics about you:</h4>
                                <table class="table">
                                    <tbody>
                                      <tr>
                                        <td class="pt-3">Gender</td>
                                        <td>
                                            <div class="q-box__question">
                                                <select class="form-select" id="gender" name="gender" required>
                                                    <option selected>Select...</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                    <option value="4">Not Specified</option>
                                                  </select>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3">Occupation</td>
                                        <td>
                                            <div class="q-box__question">
                                                <select class="form-select" id="occupation" name="occupation" aria-label="Default select example">
                                                <option value="">Please select. . .</option>
                                                <option value="Management">Management</option>
                                                <option value="Natural Sciences">Natural Sciences</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Health">Health</option>
                                                <option value="Law and Order">Law and Order</option>
                                                <option value="Clerical">Clerical</option>
                                                <option value="Spiritual">Spiritual</option>
                                                <option value="Spiritual">Social</option>
                                                <option value="Humanities">Humanities</option>
                                                <option value="Services and Sales">Services and Sales</option>
                                                <option value="Agriculture and Food">Agriculture and Food</option>
                                                <option value="Craft">Craft</option>
                                                <option value="Military">Military</option>
                                                <option value="Others">Others</option>
                                                  </select>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3">Graduation</td>
                                        <td>
                                            <div class="q-box__question">
                                                <select class="form-select" id="graduation" name="graduation" aria-label="Default select example">
                                                <option value="">Please select. . .</option>
                                                <option value="None">none</option>
                                                <option value="Primary School">primary school</option>
                                                <option value="Secondary School">secondary school</option>
                                                <option value="High School">post-secondary school diploma / high school diploma</option>
                                                <option value="Vocational Training">completed vocational training</option>
                                                <option value="University">completed university studies</option>
                                                <option value="Doctoral Degree">doctoral degree</option>
                                                  </select>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3">Nationality</td>
                                        <td>
                                            <div class="q-box__question">
                                                <select class="form-select" id="nationality" name="nationality" aria-label="Default select example">
                                                    <option value="">Please select. . .</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Akrotiri">Akrotiri</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier I.">Ashmore and Cartier I.</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas, The">Bahamas, The</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Bassas da India">Bassas da India</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian">British Indian</option><option value="British Virgin I.">British Virgin I.</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman I.">Cayman I.</option><option value="Central African Rep.">Central African Rep.</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) I.">Cocos (Keeling) I.</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook I.">Cook I.</option><option value="Coral Sea I.">Coral Sea I.</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Rep.">Czech Rep.</option><option value="Denmark">Denmark</option><option value="Dhekelia">Dhekelia</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Rep.">Dominican Rep.</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland I.">Falkland I.</option><option value="Faroe I.">Faroe I.</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern">French Southern</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso I.">Glorioso I.</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island">Heard Island</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Juan de Nova I.">Juan de Nova I.</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall I.">Marshall I.</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Navassa Island">Navassa Island</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana I.">Northern Mariana I.</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paracel I.">Paracel I.</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn I.">Pitcairn I.</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre">Saint Pierre</option><option value="Saint Vincent">Saint Vincent</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia and Montenegro">Serbia and Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon I.">Solomon I.</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia">South Georgia</option><option value="Spain">Spain</option><option value="Spratly I.">Spratly I.</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinitemad and Tobago</option><option value="Tromelin Island">Tromelin Island</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos I.">Turks and Caicos I.</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin I.">Virgin I.</option><option value="Wake Island">Wake Island</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                                                  </select>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3">Age</td>
                                        <td>
                                            <div class="input-container">
                                                <input class="form-control" id="age" name="age" type="text">
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3">I own a smartphone</td>
                                        <td>
                                            <div class="q-box__question">
                                                <select class="form-select" name="smartphone" id="smartphone" aria-label="Default select example">
                                                    <option selected>Select...</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                  </select>
                                            </div>
                                        </td>
                                      </tr>
                                
                                    </tbody>
                                  </table>
                            </div>
                            <div class="step">
                                
                                <h1>Survey</h1>
                                <h3>Instructions</h3>
                                <p>In the following, you will see some videos of expressive gestures to control a mobile device. Please answer the questions below the video. Chose your ratings quickly and based on your feelings. It is not you or your performance that is evaluated, but the usability of the expressive gestures. So please answer honestly, there is no right or wrong. Your data will be processed anonymously and used for research purposes only. At the end of the questionnaire, you have the opportunity to leave your name and email address for receiving participation confirmation.</p>
                            </div>


                            <?php
                                $sql= "SELECT * FROM survey";
                                $res= mysqli_query($conn,$sql);
                                if ($res != null) {
                                    while($row = mysqli_fetch_assoc($res)) {

                                        ?>


    <div class="step">
                                <h1><?php echo $row["title"]?></h1>
                                <p><b>Scene description</b>:<?php echo $row["description"]?></p>
                                <div class="logossur">
                                    <img style="width:100%;"src="admin/images/<?php echo $row["image"]?>" alt="picture">
                                </div>
                                <h4>Please rate the extent to which you agree with the following statements:</h4>
                                <table class="table tablemax">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Strongly Disagree</th>
                                        <th scope="col">Disagree</th>
                                        <th scope="col">Neither Disagree nor Agree</th>
                                        <th scope="col">Agree</th>
                                        <th scope="col">Strongly Agree</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">I can imagine to be that person in that situation</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_1<?php echo $row['id']; ?>" name="<?php echo 'q_1'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q_1<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_2<?php echo $row['id']; ?>" name="<?php echo 'q_1'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q_2<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_3<?php echo $row['id']; ?>" name="<?php echo 'q_1'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q_3<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_4<?php echo $row['id']; ?>" name="<?php echo 'q_1'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q_4<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_5<?php echo $row['id']; ?>" name="<?php echo 'q_1'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q_5<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Performing this gesture in this context is society accepted</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_01<?php echo $row['id']; ?>" name="<?php echo 'q_01'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q_01<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_02<?php echo $row['id']; ?>" name="<?php echo 'q_01'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q_02<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_03<?php echo $row['id']; ?>" name="<?php echo 'q_01'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q_03<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_04<?php echo $row['id']; ?>" name="<?php echo 'q_01'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q_04<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_05<?php echo $row['id']; ?>" name="<?php echo 'q_01'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q_05<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Performing this gesture using a smartphone is socially accepted</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_001<?php echo $row['id']; ?>" name="<?php echo 'q_001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q_001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_002<?php echo $row['id']; ?>" name="<?php echo 'q_001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q_002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_003<?php echo $row['id']; ?>" name="<?php echo 'q_001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q_003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_004<?php echo $row['id']; ?>" name="<?php echo 'q_001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q_004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_005<?php echo $row['id']; ?>" name="<?php echo 'q_001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q_005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">I would perform this gesture in this context</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_0001<?php echo $row['id']; ?>" name="<?php echo 'q_0001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q_0001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_0002<?php echo $row['id']; ?>" name="<?php echo 'q_0001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q_0002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_0003<?php echo $row['id']; ?>" name="<?php echo 'q_0001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q_0003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_0004<?php echo $row['id']; ?>" name="<?php echo 'q_0001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q_0004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_0005<?php echo $row['id']; ?>" name="<?php echo 'q_0001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q_0005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr class="spaceUnder">
                                        <th scope="row">Performing this gesture is generally socially accepted</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_00001<?php echo $row['id']; ?>" name="<?php echo 'q_00001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q_00001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_00002<?php echo $row['id']; ?>" name="<?php echo 'q_00001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q_00002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_00003<?php echo $row['id']; ?>" name="<?php echo 'q_00001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q_00003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_00004<?php echo $row['id']; ?>" name="<?php echo 'q_00001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q_00004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q_00005<?php echo $row['id']; ?>" name="<?php echo 'q_00001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q_00005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <!--label two questions here -->
                                      <tr>
                                        <th scope="row">Is this person rather a male or a female ?</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_1<?php echo $row['id']; ?>" name="<?php echo 'q2_1'.$row['id']; ?>" type="radio" value="Male"> 
                                                <label class="form-check-label question__label" for="q2_1<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_2<?php echo $row['id']; ?>" name="<?php echo 'q2_1'.$row['id']; ?>" type="radio" value="Like male"> 
                                                <label class="form-check-label question__label" for="q2_2<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_3<?php echo $row['id']; ?>" name="<?php echo 'q2_1'.$row['id']; ?>" type="radio" value="Neither Nor"> 
                                                <label class="form-check-label question__label" for="q2_3<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_4<?php echo $row['id']; ?>" name="<?php echo 'q2_1'.$row['id']; ?>" type="radio" value="Like Female"> 
                                                <label class="form-check-label question__label" for="q2_4<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_5<?php echo $row['id']; ?>" name="<?php echo 'q2_1'.$row['id']; ?>" type="radio" value="Female"> 
                                                <label class="form-check-label question__label" for="q2_5<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr class="spaceUnder">
                                        <th scope="row">Is such a gesture rather performed by a male or a female?</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_01<?php echo $row['id']; ?>" name="<?php echo 'q2_01'.$row['id']; ?>" type="radio" value="Male"> 
                                                <label class="form-check-label question__label" for="q2_01<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_02<?php echo $row['id']; ?>" name="<?php echo 'q2_01'.$row['id']; ?>" type="radio" value="Like male"> 
                                                <label class="form-check-label question__label" for="q2_02<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_03<?php echo $row['id']; ?>" name="<?php echo 'q2_01'.$row['id']; ?>" type="radio" value="Neither Nor"> 
                                                <label class="form-check-label question__label" for="q2_03<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_04<?php echo $row['id']; ?>" name="<?php echo 'q2_01'.$row['id']; ?>" type="radio" value="Like Female"> 
                                                <label class="form-check-label question__label" for="q2_04<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__male" id="q2_05<?php echo $row['id']; ?>" name="<?php echo 'q2_01'.$row['id']; ?>" type="radio" value="Female"> 
                                                <label class="form-check-label question__label" for="q2_05<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <!--label three questions here -->
                                      <tr>
                                        <th scope="row">I linke what this gesture communicates about its performer</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_1<?php echo $row['id']; ?>" name="<?php echo 'q3_1'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_1<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_2<?php echo $row['id']; ?>" name="<?php echo 'q3_1'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_2<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_3<?php echo $row['id']; ?>" name="<?php echo 'q3_1'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_3<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_4<?php echo $row['id']; ?>" name="<?php echo 'q3_1'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_4<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_5<?php echo $row['id']; ?>" name="<?php echo 'q3_1'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_5<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">I could imagine aspiring to be like the performer of such a gesture</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_01<?php echo $row['id']; ?>" name="<?php echo 'q3_01'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_01<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_02<?php echo $row['id']; ?>" name="<?php echo 'q3_01'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_02<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_03<?php echo $row['id']; ?>" name="<?php echo 'q3_01'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_03<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_04<?php echo $row['id']; ?>" name="<?php echo 'q3_01'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_04<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_05<?php echo $row['id']; ?>" name="<?php echo 'q3_01'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_05<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">The performer of this gesture could be considered rude</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_001<?php echo $row['id']; ?>" name="<?php echo 'q3_001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_002<?php echo $row['id']; ?>" name="<?php echo 'q3_001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_003<?php echo $row['id']; ?>" name="<?php echo 'q3_001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_004<?php echo $row['id']; ?>" name="<?php echo 'q3_001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_005<?php echo $row['id']; ?>" name="<?php echo 'q3_001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">People would not be offended by the performance of this gesture</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0001<?php echo $row['id']; ?>" name="<?php echo 'q3_0001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_0001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0002<?php echo $row['id']; ?>" name="<?php echo 'q3_0001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_0002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0003<?php echo $row['id']; ?>" name="<?php echo 'q3_0001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_0003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0004<?php echo $row['id']; ?>" name="<?php echo 'q3_0001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_0004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0005<?php echo $row['id']; ?>" name="<?php echo 'q3_0001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_0005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">This gesture seems to be useful and easy to perform</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00001<?php echo $row['id']; ?>" name="<?php echo 'q3_00001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_00001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00002<?php echo $row['id']; ?>" name="<?php echo 'q3_00001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_00002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00003<?php echo $row['id']; ?>" name="<?php echo 'q3_00001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_00003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00004<?php echo $row['id']; ?>" name="<?php echo 'q3_00001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_00004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00005<?php echo $row['id']; ?>" name="<?php echo 'q3_00001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_00005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">The performer of this gesture would get a positive reaction from others</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000001<?php echo $row['id']; ?>" name="<?php echo 'q3_000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000002<?php echo $row['id']; ?>" name="<?php echo 'q3_000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000003<?php echo $row['id']; ?>" name="<?php echo 'q3_000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000004<?php echo $row['id']; ?>" name="<?php echo 'q3_000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000005<?php echo $row['id']; ?>" name="<?php echo 'q3_000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">This gesture could allow its performer to take advantage of people </th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000001<?php echo $row['id']; ?>" name="<?php echo 'q3_0000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_0000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000002<?php echo $row['id']; ?>" name="<?php echo 'q3_0000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_0000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000003<?php echo $row['id']; ?>" name="<?php echo 'q3_0000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_0000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000004<?php echo $row['id']; ?>" name="<?php echo 'q3_0000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_0000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000005<?php echo $row['id']; ?>" name="<?php echo 'q3_0000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_0000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">This gesture could help people </th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000001<?php echo $row['id']; ?>" name="<?php echo 'q3_00000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_00000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000002<?php echo $row['id']; ?>" name="<?php echo 'q3_00000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_00000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000003<?php echo $row['id']; ?>" name="<?php echo 'q3_00000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_00000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000004<?php echo $row['id']; ?>" name="<?php echo 'q3_00000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_00000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000005<?php echo $row['id']; ?>" name="<?php echo 'q3_00000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_00000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">I like how this gesture shows membership to a certain social group</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000000001<?php echo $row['id']; ?>" name="<?php echo 'q3_000000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_000000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000000002<?php echo $row['id']; ?>" name="<?php echo 'q3_000000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_000000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000000003<?php echo $row['id']; ?>" name="<?php echo 'q3_000000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_000000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000000004<?php echo $row['id']; ?>" name="<?php echo 'q3_000000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_000000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_000000005<?php echo $row['id']; ?>" name="<?php echo 'q3_000000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_000000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Use of this gesture raises privacy issues</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000000001<?php echo $row['id']; ?>" name="<?php echo 'q3_0000000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_0000000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000000002<?php echo $row['id']; ?>" name="<?php echo 'q3_0000000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_0000000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000000003<?php echo $row['id']; ?>" name="<?php echo 'q3_0000000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_0000000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000000004<?php echo $row['id']; ?>" name="<?php echo 'q3_0000000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_0000000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_0000000005<?php echo $row['id']; ?>" name="<?php echo 'q3_0000000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_0000000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Performing this gesture could be considered inappropriate</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000000001<?php echo $row['id']; ?>" name="<?php echo 'q3_00000000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q3_00000000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000000002<?php echo $row['id']; ?>" name="<?php echo 'q3_00000000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q3_00000000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000000003<?php echo $row['id']; ?>" name="<?php echo 'q3_00000000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q3_00000000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000000004<?php echo $row['id']; ?>" name="<?php echo 'q3_00000000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q3_00000000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input basic__question" id="q3_00000000005<?php echo $row['id']; ?>" name="<?php echo 'q3_00000000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q3_00000000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>

                                    </tbody>
                                </table>
                                <br><br/>
                                <h4>As viewed by society, how...is this person: </h4>
                                <table class="table tablepro">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Not at all</th>
                                        <th scope="col">Maybe</th>
                                        <th scope="col">Don't know</th>
                                        <th scope="col">Yes</th>
                                        <th scope="col">Extremely</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">Good-natured</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_1<?php echo $row['id']; ?>" name="<?php echo 'q4_1'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_1<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_2<?php echo $row['id']; ?>" name="<?php echo 'q4_1'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_2<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_3<?php echo $row['id']; ?>" name="<?php echo 'q4_1'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_3<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_4<?php echo $row['id']; ?>" name="<?php echo 'q4_1'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_4<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_5<?php echo $row['id']; ?>" name="<?php echo 'q4_1'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_5<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Competent</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_01<?php echo $row['id']; ?>" name="<?php echo 'q4_01'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_01<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_02<?php echo $row['id']; ?>" name="<?php echo 'q4_01'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_02<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_03<?php echo $row['id']; ?>" name="<?php echo 'q4_01'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_03<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_04<?php echo $row['id']; ?>" name="<?php echo 'q4_01'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_04<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_05<?php echo $row['id']; ?>" name="<?php echo 'q4_01'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_05<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Independent</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_001<?php echo $row['id']; ?>" name="<?php echo 'q4_001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_002<?php echo $row['id']; ?>" name="<?php echo 'q4_001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_003<?php echo $row['id']; ?>" name="<?php echo 'q4_001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_004<?php echo $row['id']; ?>" name="<?php echo 'q4_001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_005<?php echo $row['id']; ?>" name="<?php echo 'q4_001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Tolerant</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0001<?php echo $row['id']; ?>" name="<?php echo 'q4_0001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_0001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0002<?php echo $row['id']; ?>" name="<?php echo 'q4_0001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_0002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0003<?php echo $row['id']; ?>" name="<?php echo 'q4_0001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_0003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0004<?php echo $row['id']; ?>" name="<?php echo 'q4_0001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_0004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0005<?php echo $row['id']; ?>" name="<?php echo 'q4_0001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_0005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Intelligent</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00001<?php echo $row['id']; ?>" name="<?php echo 'q4_00001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_00001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00002<?php echo $row['id']; ?>" name="<?php echo 'q4_00001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_00002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00003<?php echo $row['id']; ?>" name="<?php echo 'q4_00001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_00003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00004<?php echo $row['id']; ?>" name="<?php echo 'q4_00001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_00004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00005<?php echo $row['id']; ?>" name="<?php echo 'q4_00001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_00005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Competitive</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000001<?php echo $row['id']; ?>" name="<?php echo 'q4_000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000002<?php echo $row['id']; ?>" name="<?php echo 'q4_000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000003<?php echo $row['id']; ?>" name="<?php echo 'q4_000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000004<?php echo $row['id']; ?>" name="<?php echo 'q4_000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000005<?php echo $row['id']; ?>" name="<?php echo 'q4_000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Warm</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0000001<?php echo $row['id']; ?>" name="<?php echo 'q4_0000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_0000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0000002<?php echo $row['id']; ?>" name="<?php echo 'q4_0000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_0000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0000003<?php echo $row['id']; ?>" name="<?php echo 'q4_0000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_0000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0000004<?php echo $row['id']; ?>" name="<?php echo 'q4_0000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_0000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_0000005<?php echo $row['id']; ?>" name="<?php echo 'q4_0000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_0000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Sincere</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00000001<?php echo $row['id']; ?>" name="<?php echo 'q4_00000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_00000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00000002<?php echo $row['id']; ?>" name="<?php echo 'q4_00000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_00000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00000003<?php echo $row['id']; ?>" name="<?php echo 'q4_00000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_00000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00000004<?php echo $row['id']; ?>" name="<?php echo 'q4_00000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_00000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_00000005<?php echo $row['id']; ?>" name="<?php echo 'q4_00000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_00000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Confident</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000000001<?php echo $row['id']; ?>" name="<?php echo 'q4_000000001'.$row['id']; ?>" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q4_000000001<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000000002<?php echo $row['id']; ?>" name="<?php echo 'q4_000000001'.$row['id']; ?>" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q4_000000002<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000000003<?php echo $row['id']; ?>" name="<?php echo 'q4_000000001'.$row['id']; ?>" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q4_000000003<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000000004<?php echo $row['id']; ?>" name="<?php echo 'q4_000000001'.$row['id']; ?>" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q4_000000004<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__society" id="q4_000000005<?php echo $row['id']; ?>" name="<?php echo 'q4_000000001'.$row['id']; ?>" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q4_000000005<?php echo $row['id']; ?>"></label>
                                            </div>
                                        </td>
                                      </tr>

                                    </tbody>
                                </table>
                            </div>
                                
                                <?php   
                                 }
                                }
                                
                                    ?>

                            

                                   
                            <div class="step">
                                <h1>Last Questions</h1>
                                <p>We would be happy about your feedback</p>
                                <h4>Finally, please provide feedback on the following questions:</h4>
                                <table class="table tablemax">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Not at all</th>
                                        <th scope="col">Maybe</th>
                                        <th scope="col">Don't know</th>
                                        <th scope="col">Yes</th>
                                        <th scope="col">Extremely</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">I was able to imagine the person performing the gestures</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_100" name="q_100" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q_100"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_101" name="q_101" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q_101"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_102" name="q_102" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q_102"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_103" name="q_103" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q_103"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_104" name="q_104" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q_104"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">The visualization was not always clear to me</th>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_105" name="q_105" type="radio" value="1"> 
                                                <label class="form-check-label question__label" for="q_105"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_106" name="q_106" type="radio" value="2"> 
                                                <label class="form-check-label question__label" for="q_106"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_107" name="q_107" type="radio" value="3"> 
                                                <label class="form-check-label question__label" for="q_107"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_108" name="q_108" type="radio" value="4"> 
                                                <label class="form-check-label question__label" for="q_108"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input question__last" id="q_109" name="q_109" type="radio" value="5"> 
                                                <label class="form-check-label question__label" for="q_109"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                             
										<label for="surveydescription1" class="form-label">How could the visualizations be improved?</label>
										<textarea rows="4" cols="50" class="form-control" id="howcanimprove" name="howcanimprove" autocomplete="off"></textarea>
									    
                                      </tr>
                                      <tr>
                                       
										<label for="surveydescription2" class="form-label">What Difficulties did you have completing the survey?</label>
										<textarea rows="4" cols="50" class="form-control" id="surveydifficulties" name="surveydifficulties" autocomplete="off"></textarea>
									    
                                      </tr>
                                </tbody>
                            </table>

                            </div>


                            <div class="step">
                               
                                <h1>Thank you for your participation!</h1>
                                <p><b>Online workers</b> are done and can use this code or link for confirmation of their participation:</p>
                                <input type="text" name="per_code" disabled value="<?php echo 'FRA' . str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);?>">
                                <p><b>Students of the Frankfurt University of Applied Sciences</b> who want to receive 1.0 credit points for their study course please enter name and e-mail:</p>
                                <table class="table">
                                    <tbody>
                                      
                                      <tr>
                                        <td class="pt-3">Name</td>
                                        <td>
                                            <div class="input-container">
                                                <input class="form-control" id="username" name="username" type="text" placeholder="name">
                                            </div>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td class="pt-3">Email</td>
                                        <td>
                                            <div class="input-container">
                                                <input class="form-control" id="useremail" name="useremail" type="email" placeholder="email">
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3">I am student of the Frankfurt University of Applied Sciences and want to receive 1.0 credit points.</td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input" id="q_110" name="q_110" type="checkbox" value="Yes"> 
                                                <label class="form-check-label" for="q_110"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3">I agree that this data will be stored until the end of this survey.</td>
                                        <td>
                                            <div class="q-box__question">
                                                <input class="form-check-input" id="q_111" name="q_111" type="checkbox" value="Yes"> 
                                                <label class="form-check-label" for="q_111"></label>
                                            </div>
                                        </td>
                                      </tr>
                                      
                                
                                    </tbody>
                                  </table>
                                  <p><b>Students of the Frankfurt University of Applied Sciences</b> who receive credit points will receive a separate email until February 29 2020 when and where they can get their signed confirmation of study participation.</p>
                                
                            </div>


                            
                            <!-- <div class="step">
                                <h4>Are you experiencing any of these serious symptoms of COVID-19 below?</h4>
                                <div class="row">
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input basic__question" id="q_5_breathing" name="q_5_breathing" type="checkbox" value="breathing"> 
                                            <label class="form-check-label question__label" for="q_5_breathing">Difficulty breathing or shortness of breath</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input basic__question" id="q_5_chest" name="q_5_chest" type="checkbox" value="chest pain"> 
                                            <label class="form-check-label question__label" for="q_5_chest">Chest pain or pressure</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input basic__question" id="q_5_speech" name="q_5_speech" type="checkbox" value="speech problem"> 
                                            <label class="form-check-label question__label" for="q_5_speech">Loss of speech or movement</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input basic__question" id="q_5_pale" name="q_5_pale" type="checkbox" value="pale"> 
                                            <label class="form-check-label question__label" for="q_5_pale">Pale, gray or blue-colored skin, lips or nail beds</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="step">
                                <h4>Provide us with your personal information</h4>
                                <div class="mt-1">
                                    <label class="form-label">Complete Name:</label> 
                                    <input class="form-control" id="full_name" name="full_name" type="text">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Complete Address:</label> 
                                    <input class="form-control" id="address" name="address" type="text">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Email:</label> 
                                    <input class="form-control" id="email" name="email" type="email">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Phone / Mobile Number:</label> 
                                    <input class="form-control" id="phone" name="phone" type="text">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-2 col-md-2 col-3">
                                        <label class="form-label">Age:</label>
                                        <div class="input-container">
                                            <input class="form-control" id="age" name="age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="input-container">
                                            <input class="form-check-input" name="gender" type="radio" value="male"> 
                                            <label class="form-check-label radio-lb">Male</label> 
                                            <input class="form-check-input" name="gender" type="radio" value="female"> 
                                            <label class="form-check-label radio-lb">Female</label> 
                                            <input checked class="form-check-input" name="gender" type="radio" value="undefined"> 
                                            <label class="form-check-label radio-lb">Rather not say</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div id="success">
                                <div class="mt-5">
                                    <h4>Success! We'll get back to you ASAP!</h4>
                                    <p>Meanwhile, clean your hands often, use soap and water, or an alcohol-based hand rub, maintain a safe distance from anyone who is coughing or sneezing and always wear a mask when physical distancing is not possible.</p>
                                    <a class="back-link" href="">Go back from the beginning ➜</a>
                                </div>
                            </div>
                        </div>
                        <div id="q-box__buttons">
                            <button id="prev-btn" type="button">Previous</button> 
                            <button id="next-btn" type="button">Next</button> 
                            <button id="submit-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- PRELOADER -->
    <div id="preloader-wrapper">
        <div id="preloader"></div>
        <div class="preloader-section section-left"></div>
        <div class="preloader-section section-right"></div>
    </div>
    <script src="assets/main.js">
    </script>
<!-- Static App Form Collection Script -->
<script src="https://static.app/js/static-forms.js" type="text/javascript"></script>
<!-- Static App Form Collection Script -->
<script src="https://static.app/js/static-forms.js" type="text/javascript"></script>
<!-- Static App Form Collection Script -->
<script src="" type="text/javascript"></script>
<!-- Static App Form Collection Script -->
<script src="" type="text/javascript"></script>
</body>
</html>